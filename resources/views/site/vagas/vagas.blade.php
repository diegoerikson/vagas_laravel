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
                        <th> Nome </th>
                        <th> Descrição </th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($opportunities as $opportunitie)

                    <tr>
                        <td>{{$opportunitie->idopportunitie}}</td>
                        <td> <a href="{{ url("/opportunitie/$$opportunitie->idopportunitie/update") }}"> {{$opportunitie->name}} </a> </td>
                        <td>{{$opportunitie->description}}</td>
                    </tr>  
                    @empty
                <h4>Não há vagas cadastradas no momento!</h4>
                @endforelse

                </tbody>
            </table>
        </div>
        <div>
            <a href="{{route('vagas.create')}}" class="btn btn-primary btn-add">
        <span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
        </div>
    </div>
</div>

@endsection