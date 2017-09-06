@extends('template.template')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Formulário</h4>
                    </div>
                    <div class="content">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label" for="nome">Nome</label>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-sm-12">
                                    <label class="control-label" for="email">Email</label>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="nome@email.com">
                                    <!-->
                                    <pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                                      </!-->
                                </div>
                            </div>

                            <div ngModelGroup="endereco">

                                <div class="form-group">

                                    <div class="col-md-3" >
                                        <label for="cep" class="control-label">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep" ngModel required >

                                    </div>

                                    <div class="col-md-3" >
                                        <label for="numero" class="control-label">Número</label>
                                        <input type="text" class="form-control" id="numero" name="numero" ngModel required >

                                    </div>

                                    <div class="col-md-6">
                                        <label for="complemento" class="control-label">Complemento</label>
                                        <input type="text" class="form-control" id="complemento" name="complemento" ngModel required >
                                    </div>
                                </div>

                                <div class="form-group" >

                                    <div class="col-sm-12">
                                        <label class="control-label" for="rua">Rua</label>
                                    </div>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="rua" id="rua" ngModel required readonly>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-5" >
                                        <label for="bairro" class="control-label">Bairro</label>
                                        <input type="text" class="form-control" id="cidade" name="bairro" ngModel required >


                                    </div>

                                    <div class="col-sm-4" >
                                        <label for="cidade" class="control-label">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" ngModel required >


                                    </div>

                                    <div class="col-sm-3" >
                                        <label for="estado" class="control-label">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="estado" ngModel required >
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <!--app-form-debug [form]="f"></app-form-debug-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection