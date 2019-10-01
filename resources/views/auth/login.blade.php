@extends('layouts.app')

@section('content')

<div class="container center">
    <div class="container">
        <div class="card">
            <div class="row center">
                <div class="card-header center"><h5>{{ __('Entrar') }}</h5></div>
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="container">
                            <div class="input-field col s12">
                                <i class="material-icons prefix" id="icone">email</i>
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <div class="input-field col s12">
                                <i class="material-icons prefix" id="icone">vpn_key</i>
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="form-check">
                                <p>
                                    <label for="remember">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Lembre de mim') }}</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="input-field inline">
                            <button type="submit" class="btn btn-primary card-panel teal accent-4">
                                {{ __('Entrar') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection