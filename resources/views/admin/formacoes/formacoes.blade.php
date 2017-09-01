@extends('template.template')

@section('content')

    <div class="container">
    <div class="portlet-title">

        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Formação </th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($formations as $formation)

                    <tr>
                        <td>{{$formation->idformation}}</td>
                        <td> <a href="{{ url("/formation/$formation->idformation/update") }}"> {{$formation->name}} </a> </td>
                    </tr>  
                    @empty
                <p>Não há vagas nenhuma formação cadastrada no momemto!</p>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
        
         <a href="{{route('cadastrarFormacao.create')}}" class="btn btn-primary btn-add">
        <span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
</div>

@endsection