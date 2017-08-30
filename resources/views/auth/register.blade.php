@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    
                        
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" value="{{ old('phone') }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                        <div class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                            <label for="usertype" class="col-md-4 control-label">Tipo de Pessoa</label>

                            <div class="col-md-6">
                                <Select name="usertype" class="form-control" value="{{ old('usertype') }}" required>                                    
                                    <option value="F">Físico</option>
                                    <option value="J">Jurídico</option>
                                </select>  
                                
                                @if ($errors->has('usertype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usertype') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('cpf_cnpj') ? ' has-error' : '' }}">
                            <label for="cpf_cnpj" class="col-md-4 control-label">Cpf/Cnpj</label>

                            <div class="col-md-6">
                                <input id="cpf_cnpj" type="text" class="form-control" value="{{ old('cpf_cnpj') }}" name="cpf_cnpj" required>

                                @if ($errors->has('cpf_cnpj'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf_cnpj') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                          

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <Select name="gender" class="form-control" value="{{ old('gender') }}" required>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>                                    
                                </select>  
                                
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif                                
                            </div>                                                           
                        </div>   
                        
                        <div class="form-group{{ $errors->has('dtbirth') ? ' has-error' : '' }}">
                            <label for="dtbirth" class="col-md-4 control-label">Data de Nascimento</label>

                            <div class="col-md-6">
                                <input id="dtbirth" type="date" class="form-control" name="dtbirth" value="{{ old('dtbirth') }}" required>

                                @if ($errors->has('dtbirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dtbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        
                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                            <label for="cep" class="col-md-4 control-label">CEP</label>

                            <div class="col-md-6">
                                <input id="cep" class="form-control" value="{{ old('cep') }}" name="cep" placeholder="00000-000" required>

                                @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   

                        <div class="form-group{{ $errors->has('acceptemail') ? ' has-error' : '' }}">
                            <label for="acceptemail" class="col-md-4 control-label">Receber E-mails?</label>

                            <div class="col-md-6">
                                <Select name="acceptemail" class="form-control" value="{{ old('acceptemail') }}" required>                                    
                                    <option value="S">Sim</option>
                                    <option value="N">Não</option>
                                </select>  
                                
                                @if ($errors->has('acceptemail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('acceptemail') }}</strong>
                                    </span>
                                @endif                                
                            </div>                                                           
                        </div>                         
                        
                        <div class="form-group{{ $errors->has('deficient') ? ' has-error' : '' }}">
                            <label for="deficient" class="col-md-4 control-label">Possui alguma deficiência?</label>

                            <div class="col-md-6">
                                <Select name="deficient" class="form-control" value="{{ old('deficient') }}" required>                                    
                                    <option value="N">Não</option>
                                    <option value="S">Sim</option>                                    
                                </select>  
                                
                                @if ($errors->has('deficient'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deficient') }}</strong>
                                    </span>
                                @endif                                
                            </div>                                                           
                        </div>                          
                                                                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                             

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirmar
                                </button>
                            </div>
                        </div>                                                                                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
