@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

            <b-card title="Inicio de sesión" class="my-3">

                    @if ($errors->any())
                        <b-alert show variant="danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </b-alert>
                    @else
                    <b-alert show variant="dark">Introduce tus datos</b-alert>
                    @endif

                    <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <b-form-group id="exampleInputGroup1"
                            label="Email:"
                            label-for="email">
                            <b-form-input id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}" required autofocus
                                placeholder="example@domain.com">
                            </b-form-input>  
                        </b-form-group>

                        <b-form-group id="exampleInputGroup1"
                            label="Contraseña:"
                            label-for="password">
                            <b-form-input id="password"
                                type="password"
                                name="password" required autocomplete="new-password">
                            </b-form-input>  
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox name="remember {{ old('remember') ? 'checked="true"' : '' }}"
                                type="checkbox">
                                Recordar sesión
                            </b-form-checkbox>
                        </b-form-group>

                            <b-button type="submit" variant="dark">
                                Entrar
                            </b-button>
                            <b-button href="{{ route('password.request') }}" variant="link">
                                Recuperar contraseña
                            </b-button>
                    </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
