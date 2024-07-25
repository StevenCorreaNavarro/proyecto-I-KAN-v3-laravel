@extends('layouts.app')

@section('content')
    <style>
        .container {
            background-color: white;
            align-content: center;
        }
    </style>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresar') }}</div>
                <div class="card-body w ">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste la contraseña??') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}




    <div class="form login_form container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>INICIAR SESION</h2>
            <div class="input_box">
                <!-- <input type="email" placeholder="Ingresa tu email" required> -->
                {{-- <input type="email" id="email" placeholder="Ingresa tu correo electrónico" required> --}}
                <input id="email" type="email" placeholder="Ingresa tu correo electrónico"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus>
                {{-- <i class="uil uil-envelope-alt email"></i> --}}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input_box">
                <!-- <input type="password" placeholder="Ingresa tu contraseña" required> -->
                {{-- <input type="password" id="password" placeholder="Ingresa tu contraseña" required> --}}
                <input id="password" type="password" placeholder="Ingresa tu contraseña"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <br><br>

            <div class="option_field">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordar') }}
                    </label>
                </div>
                {{-- <span class="checkbox">
                    <input type="checkbox" id="check">
                    <label for="check">Recordarme</label>
                </span>
                <a href="#" class="forgot_pw">Olvidaste tu contraseña </a> --}}
            </div>
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Ingresar') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvidaste la contraseña??') }}
                    </a>
                @endif
            </div>
            {{-- <button class="button" id="iniciar-sesion">INICIAR SESION</button> --}}
            {{-- <div class="login_signup">No tienes cuenta? <a href="#" id="signup">REGISTRARSE</a>
                
            </div> --}}
        </form>
    </div>
@endsection
