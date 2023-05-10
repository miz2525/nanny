@extends('layouts.app')

@section('page-title') Login @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
    {{-- @include('layouts._include._header') --}}
@endsection

@section('content')
<!-- Clean The Code And Hop in -->
<div class="form-block form-block--sign-in bg-default-3 vh-100 position-relative">
  <div class="container position-static vh-100">
    <div class="row align-items-center justify-content-center position-static vh-100">
      <div class="col-xl-6 col-lg-5 position-static vh-100 d-none d-lg-block">
        <div class="form-img position-absolute bg-image" style="background-image: url({{ asset('website/image/jpg/sign-in.jpg') }})">
        </div>
      </div>
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-xs-10">
          <div class="section-title section-title--l5 pb-7">
            <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign In to your Account</h2>
            <p class="section-title__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Enter your account details below to log in.</p>
          </div>
          <div class="form-box form-box--sign-in" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <form method="POST" action="{{ route('login') }}" class="contact-form" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              @csrf
              <div class="form-floating">
                <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Leave a comment here" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <label for="email">Your Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-floating">
                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Leave a comment here" id="password" name="password" required autocomplete="current-password" />
                <label for="password">Your Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-check d-flex align-items-center mt-6 mb-3">
                <input class="form-check-input bg-white float-none mt-0 mb-0" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <button class="btn btn-primary shadow--primary-4 btn--lg-2 rounded-55 text-white mt-2" type="submit">Sign In</button>

              {{-- @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif --}}
            </form>
            <div class="buttons mt-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">
              <p class="">
                Don’t have an account?
                <a class="btn-link text-electric-violet-2 ms-2" href="{{ route('register') }}">Create a free account</a>
              </p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
    {{-- @include('layouts._include._footer') --}}
@endsection

@section('scripts') <!-- Script Section --> @endsection