@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - Pricing @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')
<!-- Pricing Table Area -->
<div class="table-section table-section--l4 bg-default-3 border-bottom border-default-color-3 section-tl-shape">
  <div class="shape">
    <img class="w-100" src="./image/png/inner-banner-shape.png" alt="">
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-9 col-xxl-7">
        <div class="section-title section-title--l4 text-center">
          <h6 class="section-title__sub-heading text-electric-violet-3">Pricing table</h6>
          <h2 class="section-title__heading mb-4">Live Chat 24/7 Support</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- Single Table -->
      <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8 col-xs-9">
        <div class="card card--table-single text-center">
          <div class="table-top">
            <h5 class="table-top__title">Optimizing & SEO</h5>
            <p class="table-top__text">Monthly package</p>
            <div class="card--price">
              <span class="card--price__currency align-self-start">$</span>
              <h1 class="card--price__price">20</h1>
              <span class="card--price__price-time">/ Month</span>
            </div>
          </div>
          <ul class="card--table-single__list list-unstyled">
            <li>Unlimited updates & projects</li>
            <li>Custom permissions</li>
            <li>Custom instructors</li>
            <li>Custom designs & features</li>
          </ul>
          <a class="btn btn-torch-red btn--lg-2 text-white" href="#">Get Started</a>
        </div>
      </div>
      <!--/ .Single Table -->
    </div>
  </div>
</div>
<!--/ .Pricing Table Area -->
<!-- Testimonial Area -->
<div class="testimonial-section testimonial-section--l4 bg-default-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 col-xl-9 col-xxl-7">
        <div class="section-title section-title--l4">
          <h6 class="section-title__sub-heading text-torch-red">Testimonial</h6>
          <h2 class="section-title__heading mb-4">Don’t Just Take Our Words For It</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center testimonial-slider--l4">
      <div class="col-lg-3 col-md-12">
        <div class="card card-testimonial--l4">
          <div class="card-body ">
            <div class="card-body__top d-flex align-items-center justify-content-between">
              <div class="d-flex flex-wrap align-items-center">
                <div class="card-image">
                  <img src="./image/home-4/user-img-1.png" alt="">
                </div>
                <div class="card-body__user mr-3">
                  <h3 class="card-title">Charles Patterson</h3>
                  <p class="card-text--ext">One year with us</p>
                </div>
              </div>
              <div class="card-icon">
                <i class="fa fa-quote-left"></i>
              </div>
            </div>
            <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <div class="card card-testimonial--l4">
          <div class="card-body ">
            <div class="card-body__top d-flex align-items-center justify-content-between">
              <div class="d-flex flex-wrap align-items-center">
                <div class="card-image">
                  <img src="./image/home-3/user-circle-1.png" alt="">
                </div>
                <div class="card-body__user mr-3">
                  <h3 class="card-title">John Doe</h3>
                  <p class="card-text--ext">One year with us</p>
                </div>
              </div>
              <div class="card-icon">
                <i class="fa fa-quote-left"></i>
              </div>
            </div>
            <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <div class="card card-testimonial--l4">
          <div class="card-body ">
            <div class="card-body__top d-flex align-items-center justify-content-between">
              <div class="d-flex flex-wrap align-items-center">
                <div class="card-image">
                  <img src="./image/home-3/user-circle-2.png" alt="">
                </div>
                <div class="card-body__user mr-3">
                  <h3 class="card-title">Tiana Dokidis</h3>
                  <p class="card-text--ext">One year with us</p>
                </div>
              </div>
              <div class="card-icon">
                <i class="fa fa-quote-left"></i>
              </div>
            </div>
            <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <div class="card card-testimonial--l4">
          <div class="card-body ">
            <div class="card-body__top d-flex align-items-center justify-content-between">
              <div class="d-flex flex-wrap align-items-center">
                <div class="card-image">
                  <img src="./image/home-3/user-circle-3.png" alt="">
                </div>
                <div class="card-body__user mr-3">
                  <h3 class="card-title">Tiana Dokidis</h3>
                  <p class="card-text--ext">One year with us</p>
                </div>
              </div>
              <div class="card-icon">
                <i class="fa fa-quote-left"></i>
              </div>
            </div>
            <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <div class="card card-testimonial--l4">
          <div class="card-body ">
            <div class="card-body__top d-flex align-items-center justify-content-between">
              <div class="d-flex flex-wrap align-items-center">
                <div class="card-image">
                  <img src="./image/home-3/user-circle-1.png" alt="">
                </div>
                <div class="card-body__user mr-3">
                  <h3 class="card-title">Talan Bergson</h3>
                  <p class="card-text--ext">CEO, Greener</p>
                </div>
              </div>
              <div class="card-icon">
                <i class="fa fa-quote-left"></i>
              </div>
            </div>
            <p class="card-description">consetetur sadipscing elltr, sed dlam nonumy elrmod tempor invidunt ut labore et dolore magna allquyam erat, sed dlam voluptua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ .Testimonial Area -->
@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection