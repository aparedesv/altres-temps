@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-4">
                <img class="logo_login" src="https://osonaweb.cat/assets/img/logo_osonaweb.png" style="width:240px">
                <br>
                <br>
                Gracias por registrarse! recuerde verificar su cuenta antes de logearse.
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-primary-button>
                            Reenviar correo de verificación
                        </x-primary-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="mt-2">
                    @csrf

                    <x-primary-button>
                        Salir
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
