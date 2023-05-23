@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')
<!-- contact Area -->
<div class="contact-section contact-inner-1 bg-default-3 border-bottom border-default-color-3">
  <div class="container">
    <div class="row">

      <div class="col-xl-4 offset-xl-1 col-lg-5" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
        <div class="contact-widget-box">
          <div class="contact-widget-box__title-block">
            <h2 class="widget-box__title">Get In Touch</h2>
            <p class="widget-box__paragraph">
                We're always happy to hear from you!
            </p>
          </div>
          <div class="contact-widgets-wrapper row">

            <div class="widget widget--contact col-lg-12 col-sm-6">
              <div class="widget-icon widget-icon--circle">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="widget-body">
                <h3 class="widget-body--title">Visit us :</h3>
                <p>
                    The Binary by Omniyat (Marasi Dr)
                    <br class="d-block">
                    Business Bay - Dubai, UAE
                </p>
              </div>
            </div>

            <div class="widget widget--contact col-lg-12 col-sm-6">
              <div class="widget-icon widget-icon--circle">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="widget-body">
                <h3 class="widget-body--title">Call us:</h3>
                <p>
                    {{-- <a href="te:+971 58 598 6373">+971 58 598 6373</a>
                    <br class="d-block">
                    <a href="te:+971 50 922 0172">+971 50 922 0172</a> --}}
                    <a href="te:+971 52 982 8176">+971 52 982 8176</a>
                </p>
              </div>
            </div>

            <div class="widget widget--contact col-lg-12 col-sm-6 active">
              <div class="widget-icon widget-icon--circle">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="widget-body">
                <h3 class="widget-body--title">Mail us :</h3>
                <p>
                    hello [at] nannygenie [dot] com
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ .contact Area -->

@include('layouts._include._viewall')
@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection