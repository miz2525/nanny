@extends('layouts.app')

@section('page-title') NannyGenie's blog @endsection
@section('meta_description') Discover NannyGenie's expert advice on hiring nannies and babysitters in the United Arab Emirates, ensuring secure, happy homes for every family @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')

<div class="welcome-area welcome-area--l2 bg-default">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-11">
        <div class="welcome-content welcome-content--l2 text-center position-relative">
          <h1 class="welcome-content--l2__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
              NannyGenie's blog
          </h1>
          <p class="welcome-content--l2__descriptions" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              We aim to connect happy families and happy nannies, and through our series of blogs posts we share our learnings
          </p>
          <div class="welcome-content--l2-shape" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <img class="w-100" src="{{ asset('website/image/home-2/l2-hero-shape.png') }}" alt="">
          </div>

          <br /><br />

          <a class="btn btn--lg-2 btn-niagara rounded-50 me-3 text-white aos-init aos-animate" href="https://platform.nannygenie.com}" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true">
              Check our nannies
          </a>

          <br /><br />

        </div>
      </div>
    </div>
  </div>
  <div class="welcome-area--l2-shape-1" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
    <img class="w-100" src="{{ asset('website/image/home-2/l2-hero-shape-2.png') }}" alt="">
  </div>
  <div class="welcome-area--l2-shape-2" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
    <img class="w-100" src="{{ asset('website/image/home-2/l2-hero-shape-1.png') }}" alt="">
  </div>
</div>


<!-- NEW Blog Post -->
<div class="content-section content-section--l2-1 bg-default position-relative border-top">
  <div class="content-section--l2-1__shape">
    <img class="w-100" src="{{ asset('website/image/home-2/l2-content-1-shape.png') }}" alt="">
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-lg-start">
      <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 order-2 order-lg-1">
        <div class="content-texts content-texts--l2-1 text-center text-lg-start">
          <h2 class="content-texts--l2-1__heading" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              Hiring a full-time nanny in Dubai
          </h2>
          <p class="content-texts--l2-1__content" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              We understand. The hustle and bustle of Dubai life can be exhilarating yet equally exhausting, especially when you have little ones to care for.
          </p>
          <div class="content-texts--l2-1__button">
            <a class="btn-link--2 with--line border--primary" href="{{ route('full-time-nanny-dubai') }}" data-aos="fade-right" data-aos-delay="500" data-aos-duration="500" data-aos-once="true">
                Read more about hiring a full-time nanny in Dubai
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-6 col-md-8 col-xs-10 order-1 order-lg-2">
        <div class="content-image-group content-image-group--l2-1">
          <img class="w-100" src="{{ asset('website/image/full-time-nanny-dubai.jpg') }}" alt="full time nanny dubai" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
          <div class="content-image-group--l2-1__img-1">
            <img class="w-100" src="{{ asset('website/image/home-2/l2-content-shape-2.png') }}" alt="" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ .Content One Area -->


<!-- NEW Blog Post -->
<div class="content-section content-section--l2-2 position-relative bg-default">
  <div class="container">
    <div class="content-section--l2-2__wrapper border-top border-default-color">
      <div class="row align-items-center justify-content-center justify-content-lg-start">
        <div class="col-xl-7 col-lg-6 col-md-8 col-xs-10">
          <div class="content-image-group--l2-2">
            <img class="w-100" src="{{ asset('website/image/babysitter-in-dubai.jpg') }}" alt="babysitter in dubai" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <div class="content-image-group--l2-2__img-1">
              <img class="w-100" src="{{ asset('website/image/home-2/l2-content-2-shape-2.png') }}" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true" data-aos-delay="300">
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10">
          <div class="content-texts content-texts--l2-1 text-center text-lg-start">
            <h2 class="content-texts--l2-1__heading" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                Babysitter in Dubai
            </h2>
            <p class="content-texts--l2-1__content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                Discovering the right babysitter is like finding the Aladdin to your magic lamp. They may not grant you three wishes, but a trustworthy babysitter does offer a balanced home, some 'me-time', and a happy, nurtured child.
            </p>
            <div class="content-texts--l2-1__button" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
              <a class="btn-link--2 with--line border--primary" href="{{ route('babysitter-in-dubai') }}">
                  Read more about finding the right babysitter in Dubai
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-section--l2-2__shape-img">
    <img class="w-100" src="{{ asset('website/image/home-2/l2-content-2-shape.png') }}" alt="">
  </div>
</div>
<!--/ .Content Two Area -->

@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection