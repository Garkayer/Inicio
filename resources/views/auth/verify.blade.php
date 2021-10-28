@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo eléctronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se reenvio el correo eléctronico.') }}
                        </div>
                    @endif

                    {{ __('Antes de acceder, por favor verifique su email para acceder.') }}
                    {{ __('Si no recibio este correo eléctronico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haga click aqui para enviar uno nuevo.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
