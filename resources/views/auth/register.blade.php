@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para darse de alta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                                       name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="appat" class="col-md-4 col-form-label text-md-end">Primer apellido</label>

                            <div class="col-md-6">
                                <input id="appat" type="text" class="form-control"
                                       name="appat" value="{{ old('appat') }}" autocomplete="appat" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apmat" class="col-md-4 col-form-label text-md-end">Segundo apellido</label>

                            <div class="col-md-6">
                                <input id="apmat" type="text" class="form-control @error('apmat') is-invalid @enderror"
                                       name="apmat" value="{{ old('apmat') }}" required autocomplete="apmat" autofocus>

                                @error('apmat')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="domicilio" class="col-md-4 col-form-label text-md-end">Domicilio</label>

                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror"
                                       name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                                @error('domicilio')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telcel" class="col-md-4 col-form-label text-md-end">Teléfono de contacto</label>

                            <div class="col-md-6">
                                <input id="telcel" type="text" class="form-control @error('telcel') is-invalid @enderror"
                                       name="telcel" value="{{ old('telcel') }}" required autocomplete="telcel" autofocus>

                                @error('telcel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirme contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                       required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Darse de alta
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
