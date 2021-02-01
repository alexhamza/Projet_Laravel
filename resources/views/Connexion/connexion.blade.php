@extends('layout')

@section('contenu')

    <div id="login">
        <h3 class="text-center text-white pt-3">Connexion</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/connexion" method="post">
                            {{csrf_field()}}
                            <h3 style="text-align: center;">Connexion</h3>
                            <div class="form-group" class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                                @if($errors->has('email'))
                                    <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @if($errors->has('password'))
                                    <small id="emailHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <p>Pas de compte?</p><a href="{{ url('/inscription') }}">Inscrivez-vous ici</a>
                                <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                                <br><br>
                                <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection