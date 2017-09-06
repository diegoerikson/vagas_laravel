@extends('template.template')

@section('content')

<section class="content">

    <div class="main-container">
        <div class="container-fluid">
            <div class="card">

                @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif

                @if(isset($opportunities))
                <form role="form" method="post" action="{{route('vagas.update', $opportunities->id)}}">
                    {!! method_field('PUT') !!}
                    @else
                    <form class="form-vertical" method="post" action="{{route('vagas.store')}}">
                        @endif
                        {!! csrf_field() !!}

                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="form-section">Descrição</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label for="name">Nome:</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                                        <br>
                                        <label>
                                            Ativo: <input type="checkbox" name="active">
                                        </label>
                                        <br>
                                        <label>Data de vencimento</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="dtclosing" class="form-control pull-right" id="datepicker">
                                        </div>


                                    </div>

                                    <div class="col-md-6">
                                        <label for="description">Descrição:</label>
                                        <textarea class="form-control" name="description" rows="7" id="description" placeholder="Descrição"></textarea>
                                    </div>

                                </div>	

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="form-section">Exigências</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label for="idhierarchy">Nível:</label>
                                        <select name="hierarchy" class="form-control select2">
                                            <option value="0">Escolha a formação</option>
                                            @foreach($hierarchys as $hierarchy)
                                            <option value="{{$hierarchy}}"> {{$hierarchy}} </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="idformation">Curso:</label>
                                        <select name="formation" class="form-control select2">
                                            <option value="0">Escolha a formação</option>
                                            @foreach($formations as $formation)
                                            <option value="{{$formation}}"> {{$formation}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>	

                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="form-section">Benefícios</h3>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name">Salário:</label>
                                    <input type="number" name="salary" class="form-control" id="name" placeholder="Salário">
                                    <br>

                                </div>

                                <div class="col-md-6">
                                    <label for="description">Benefícios:</label>
                                    <textarea class="form-control" name="benefis" rows="3" id="description" placeholder="Descrição"></textarea>
                                </div>

                            </div>	

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="form-section">Empresa</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name">Empresa:</label>
                                    <input type="text" name="idcompany" class="form-control" id="name" placeholder="Empresa">

                                </div>

                            </div>	

                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="form-section">Contato</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="name">Nome:</label>
                                    <input type="text" name="namecontact" class="form-control" id="name" placeholder="Nome">

                                </div>

                                <div class="col-md-4">
                                    <label>Telefone:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <label for="name">Email:</label>
                                    <input type="email" name="emailcontact" class="form-control" id="name" placeholder="Email">

                                </div>
                                <hr>
                            </div>	


                        </div>

                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary btn-add">
                                <span class="glyphicon glyphicon-plus"></span> Cadastrar

                            </button>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</section>

@endsection


