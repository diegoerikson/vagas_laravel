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
                        
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <Select name="gender" class="form-control" value="{{ old('gender') }}" required>
                                    <option value=""></option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>
                                </select>  
                                
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
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
                        
                        <div class="form-group{{ $errors->has('cnh') ? ' has-error' : '' }}">
                            <label for="cnh" class="col-md-4 control-label">CNH</label>

                            <div class="col-md-6">
                                <input id="cnh" type="text" class="form-control" name="cnh" value="{{ old('cnh') }}">

                                @if ($errors->has('cnh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnh') }}</strong>
                                    </span>
                                @endif                              
                            </div>                                                           
                        </div>  
                        
                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label for="note" class="col-md-4 control-label">Observações</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="{{ old('note') }}">

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif                              
                            </div>                                                           
                        </div>   
                        
                        <div class="form-group{{ $errors->has('userimage') ? ' has-error' : '' }}">
                            <label for="userimage" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="userimage" type="text" class="form-control" name="userimage" value="{{ old('userimage') }}">

                                @if ($errors->has('userimage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userimage') }}</strong>
                                    </span>
                                @endif                              
                            </div>                                                           
                        </div>                         
                        
                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                            <label for="linkedin" class="col-md-4 control-label">Linkedin</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">

                                @if ($errors->has('linkedin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif                              
                            </div>                                                           
                        </div>
                        
                        <div class="form-group{{ $errors->has('skype') ? ' has-error' : '' }}">
                            <label for="skype" class="col-md-4 control-label">Skype</label>

                            <div class="col-md-6">
                                <input id="skype" type="text" class="form-control" name="skype" value="{{ old('skype') }}">

                                @if ($errors->has('skype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('skype') }}</strong>
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
                        
                        <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                            <label for="neighborhood" class="col-md-4 control-label">Bairro</label>

                            <div class="col-md-6">
                                <input id="neighborhood" type="text" class="form-control" value="{{ old('neighborhood') }}" name="neighborhood">

                                @if ($errors->has('neighborhood'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('neighborhood') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        
                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                            <label for="cep" class="col-md-4 control-label">CEP</label>

                            <div class="col-md-6">
                                <input id="cep" class="form-control" value="{{ old('cep') }}" name="cep" required>

                                @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                           
                        
                        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                            <label for="street" class="col-md-4 control-label">Rua</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control" value="{{ old('street') }}" name="street">

                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                          
                        
                        <div class="form-group{{ $errors->has('streetnumber') ? ' has-error' : '' }}">
                            <label for="streetnumber" class="col-md-4 control-label">Número</label>

                            <div class="col-md-6">
                                <input id="streetnumber" type="number" class="form-control" value="{{ old('streetnumber') }}" name="streetnumber">

                                @if ($errors->has('streetnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('streetnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>      
                        
                        <div class="form-group{{ $errors->has('complement') ? ' has-error' : '' }}">
                            <label for="complement" class="col-md-4 control-label">Complemento</label>

                            <div class="col-md-6">
                                <input id="complement" class="form-control" value="{{ old('complement') }}" name="complement">

                                @if ($errors->has('complement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('complement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                          

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" value="{{ old('phone') }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     
                        
                        <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
                            <label for="phone2" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input id="phone2" type="number" class="form-control" value="{{ old('phone2') }}" name="phone2">

                                @if ($errors->has('phone2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone2') }}</strong>
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
