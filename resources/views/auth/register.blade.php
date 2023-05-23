@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
    {{-- @include('layouts._include._header') --}}
@endsection

@section('content')
<!-- Clean The Code And Hop in -->
<div class="form-block form-block--sign-up bg-default-3 vh-100 position-relative">
    <div class="container position-static vh-100">
      <div class="row align-items-center justify-content-center position-static vh-100">
        <div class="col-xl-6 col-lg-5 position-static vh-100 d-none d-lg-block">
          <div class="form-img position-absolute bg-image" style="background-image: url({{ asset('website/image/jpg/sign-up.jpg') }})">
          </div>
        </div>
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-xs-10">
          {{-- <div class="section-title section-title--l5 pb-6">
            <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign Up to Fastland</h2>
            <p class="section-title__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">When, while lovely valley teems with vapour around atlas<br class="d-none d-lg-block"> meand meridian the upper impenetrable.</p>
          </div> --}}
          <div class="section-title section-title--l5 pb-6">
            <h2 class="section-title__heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign up to NannyGenie</h2>
            <p class="section-title__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                The fastest way to find the best nanny for your home
            </p>
          </div>
          <div class="form-box form-box--sign-up" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <div class="contact-form" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-floating">
                  <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Your Name" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                  <label for="name">Your Name</label>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-floating">
                  <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Your Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                  <label for="email">Your Email</label>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-floating">
                  <input class="form-control @error('phone') is-invalid @enderror" type="number" placeholder="Your Phone number" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" />
                  <label for="phone">Your Phone number</label>
                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-floating">
                  <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Your Password" id="password" name="password" required autocomplete="new-password" />
                  <label for="password">Your Password</label>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-floating">
                  <input class="form-control" type="password" placeholder="Confirm Your Password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" />
                  <label for="password-confirm">Confirm Your Password</label>
                </div>
                {{-- <div class="form-check d-flex align-items-center mt-6 mb-3">
                  <input class="form-check-input bg-white float-none mt-0 mb-0" type="checkbox" value="" id="flexCheckDefault" required>
                  <label class="form-check-label" for="flexCheckDefault">I agree to all the statements included in<a class="btn-link--2 text-electric-violet-2 ms-1" href="terms.php">privacy policy</a></label>
                </div> --}}
                <div class="form-check d-flex align-items-center mt-6 mb-3">
                  <input class="form-check-input bg-white float-none mt-0 mb-0" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault" checked="" style="font-size: 75%;">
                      I agree to all Terms &amp; Conditions and Privacy Policy
                  </label>
                </div>
                <button class="btn btn-primary shadow--primary-5 btn--lg-2 rounded-55 text-white mt-2" type="submit">Sign Up</button>
              </form>
            </div>
            <div class="buttons mt-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">
              <p class="ms-2">
                Already a member?
                <a class="btn-link--2 text-electric-violet-2 ms-2" href="{{ route('login') }}">Sign In</a>
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