@extends('layout')

@section('contenu')

    <div id="register">
        <h3 class="text-center text-white pt-3">Inscription</h3>
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="/inscription" method="post">
                            {{csrf_field()}}
                            <h3 style="text-align: center;">Inscription</h3>
                            <div class="form-group">
                                <label for="email" class="form-label">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" value = {{ old('email') }}>
                                @if($errors->has('email'))
                                    <p>{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Name:</label><br>
                                <input type="string" name="name" id="name" class="form-control">
                                @if($errors->has('name'))
                                    <p>{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @if($errors->has('password'))
                                    <p>{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">Password confirmation:</label><br>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                @if($errors->has('password_confirmation'))
                                    <p>{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <p>Vous avez déjà un compte?</p><a href="{{ url('/connexion') }}">Connectez-vous ici</a>
                                <br><br>
                                <input type="submit" name="submit" class="btn btn-primary" value="S'inscrire"><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection