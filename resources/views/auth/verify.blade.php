@extends('layouts.app')

@section('content')

<!-- HEADER IMAGE -->
<header id="register-header" class="header-image text-white d-none d-md-block">
  <div class="header-overlay">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-1">Join our Community</h1>
          <p>Bergabunglah Dengan Salah Satu Blog Komunitas Terbaik
             Di Indonesia</p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
