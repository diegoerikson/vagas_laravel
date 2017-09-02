@extends('template.template')

@section('content')


<section class="content container-fluid">

    <form role="form">
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
                        <label for="idformation">Nível:</label>
                        <select class="form-control select2" name="idhierarchy" data-placeholder="Nível" style="width: 100%;">
                            <option select="selected">Todos</option>
                            <option>Auxiliar</option>
                            <option>Encarregado</option>
                            <option>Coordenador</option>
                            <option>Gerente</option>
                            <option>Estágio</option>
                            <option>Trainner</option>
                            <option>Júnior</option>
                            <option>Pleno</option>
                            <option>Sênior</option>
                            <option>Master</option>

                        </select>
                    </div>	

                    <!--div class="col-md-6">
                        <label>Grau de Instrução:</label>
                        <select class="form-control select2" name="idformation" multiple="multiple" data-placeholder="Grau de Instrução"
                                style="width: 100%;">
                            <option>Analfabeto</option>	
                            <option>Ensino Fundamental Completo</option>
                            <option>Ensino Fundamental Incompleto</option>
                            <option>Ensino Médio Completo</option>
                            <option>Ensino Médio Incompleto</option>
                            <option>Ensino Superior Incompleto</option>
                            <option>Ensino Superior Completo</option>
                            <option>Pós-Graduação</option>
                            <option>Doutorado</option>
                            <option>Mestrado</option>
                        </select>
                    </div-->

                    <div class="col-md-6">
                        <select name="formation" class="form-control">
                            <option value="0">Escolha a formação</option>
                            @foreach($formations as $formation)
                                <option value="{{$formation}}"> {{$formation}} </option>
                            @endforeach
                        </select>
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
                        <input type="number" name="namecontact" class="form-control" id="name" placeholder="Nome">

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

</section>

@endsection

