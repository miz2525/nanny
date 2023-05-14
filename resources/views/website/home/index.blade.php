@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')
<!-- Hero Area -->
<div class="welcome-area welcome-area--l1 position-relative bg-default">
    <div class="container">
      <div class="row">
        <!-- Welcome content Area -->
        <div class="col-xl-6 col-lg-7 col-md-8 col-xs-11 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          <div class="welcome-content welcome-content--l1">
            <h1 class="welcome-content__title">
              Find the best nanny for your
              <br>
              <span class="text-highlight highlight-text d-inline-block"></span>
            </h1>
            <p class="welcome-content__descriptions">Create custom landing pages
              with Fastland<br class="d-none d-xs-block"> that converts more visitors than any website.</p>

            <div class="welcome-btn-group--l3">
              <a class="btn btn--lg-2 btn-primary shadow--primary text-white rounded-50 me-2 me-sm-3 aos-init aos-animate" href="{{ route('all-nannies') }}" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                Browse all nannies
              </a>
            </div>

            <p class="welcome-content__terms-text">By clicking the button, you are agreeing with our <a class="btn btn-link" href="javascript:;">Terms & Conditions.</a>
            </p>
          </div>
        </div>
        <!--/ .Welcome Content Area -->
        <!--Welcome Image Area -->
        <div class="col-xl-6 col-lg-5 col-md-10 order-1 order-lg-2 position-static">
          <div class="welcome-image-group-wrapper">
            <div class="welcome-image welcome-image--group-01">
              <img src="{{ asset('website/image/home-1/l1-hero-img-ipad.png') }}" alt="" class="welcome-image__single welcome-image--group-01__main">
              <div class="welcome-image__single welcome-image--group-01__img-1">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-img-1.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-2">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-img-2.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-3">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-img-3.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-4">
                <img class="w-100" src="{{ asset('website/image/home-1/hero-dots.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-5">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-shape-1.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-6">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-shape-2.png') }}" alt="">
              </div>
              <div class="welcome-image__single welcome-image--group-01__img-7">
                <img class="w-100" src="{{ asset('website/image/home-1/l1-hero-shape-3.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
        <!--/ .Welcome Image Area -->
      </div>
    </div>
  </div>
  <!--/ .Hero Area -->
  <!-- Services Area -->
  <div class="service-area service-area--l1 border-top border-default-color-2 bg-default">
    <div class="service-shape service-shape--l1">
      <img class="w-100" src="{{ asset('website/image/home-1/services-shape-l1.png') }}" alt="">
    </div>
    <div class="container">
      <!-- Section Title -->
      <div class="row align-items-end justify-content-center">
        <div class="col-lg-7 col-md-12 col-xs-10">
          <div class="section-title text-center text-md-start" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <h2 class="section-title__heading">Your business needs a<br class="d-none d-xs-block d-lg-none d-xl-block"> better shape today.</h2>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-10">
          <div class="section-title  text-center text-md-start" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <p class="section-title__description">Create custom landing pages with <br class="d-none d-xs-block"> Fastland that converts more
                      visitors<br class="d-none d-sm-block"> than any website. Easy & Fast.</p>
          </div>
        </div>
      </div>
      <!--/ .Section Title -->
      <div class="service-items">
        <div class="row justify-content-center justify-content-md-start">
          <!-- Single Service -->
          <div class="col-lg-4 col-xs-6 col-10">
            <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
              <div class="widget__icon widget__icon--golden-tainoi mx-auto mx-md-0">
                <img src="{{ asset('website/image/svg/athletics.svg') }}" alt="">
              </div>
              <div class="widget__body">
                <h5 class="widget__heading">Manage Smartly</h5>
                <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
          with what's happening</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-6 col-10">
            <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
              <div class="widget__icon widget__icon--ice-cold mx-auto mx-md-0">
                <img src="{{ asset('website/image/svg/archery-target.svg') }}" alt="">
              </div>
              <div class="widget__body">
                <h5 class="widget__heading">Communicate Fast</h5>
                <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
          with what's happening</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-6 col-10">
            <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
              <div class="widget__icon widget__icon--anakiwaap mx-auto mx-md-0">
                <img src="{{ asset('website/image/svg/money-coins.svg') }}" alt="">
              </div>
              <div class="widget__body">
                <h5 class="widget__heading">Influence Easily</h5>
                <p class="widget__description">Stay on top of your task lists and stay<br class="d-none d-md-block"> in touch
          with what's happening</p>
              </div>
            </div>
          </div>
          <!--/ .Single Service -->
        </div>
      </div>
    </div>
  </div>
  <!--/ .Services Area -->
  <!-- Feature Area -->
  <div class="feature-section feature-section--l1 bg-blue-ribbon dark-mode-texts">
    <!-- Section Shape -->
    <div class="feature-section--l1__shape-group">
      <img class="w-100" src="{{ asset('website/image/home-1/l1-half-circle-shape.png') }}" alt="">
      <div class="img-1">
        <img class="w-100" src="{{ asset('website/image/home-1/l1-full-circle-shape.png') }}" alt="">
      </div>
    </div>
    <!--/ .Section Shape -->
    <div class="container">
      <!-- Section Title -->
      <div class="row">
        <div class="col-xl-8 col-lg-10">
          <div class="section-title" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <h2 class="section-title__heading mb-5">Best features available <br class="d-none d-xs-block"> for your
                      social marketing.</h2>
            <p class="section-title__description mt-8">Create custom landing pages with Fastland
              that converts<br class="d-none d-xs-block"> more visitors than any website. Easy & Fast.</p>
          </div>
        </div>
      </div>
      <!--/ .Section Title -->
      <div class="feature-area-tab">
        <div class="row justify-content-center justify-content-md-start">
          <div class="col-lg-3 col-md-12 col-xs-6 col-8">
            <div class="nav nav-tab--feature row ms-0 me-0" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
              <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0 active" data-bs-toggle="pill" id="v-pills-home-tab" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <i class="fa fa-chart-pie"></i>
                <span class="widget-text">Analytics</span></a>
              <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0" data-bs-toggle="pill" id="v-pills-profile-tab" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <i class="far fa-flag"></i>
                <span class="widget-text"> Advertisement</span></a>
              <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0" data-bs-toggle="pill" id="v-pills-messages-tab" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                <i class="fas fa-chart-line"></i>
                <span class="widget-text"> Sales Report</span></a>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
            <div class="tab-content tab-content--feature" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row align-items-center">
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">01.</h2>
                      <h5 class="features-content__item__heading">Real data access</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">02.</h2>
                      <h5 class="features-content__item__heading">Daily email reports</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">03.</h2>
                      <h5 class="features-content__item__heading">Real data access</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">04.</h2>
                      <h5 class="features-content__item__heading">Daily email reports</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">05.</h2>
                      <h5 class="features-content__item__heading">Real data access</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-9" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                    <div class="features-content__item">
                      <h2 class="features-content__item__count">06.</h2>
                      <h5 class="features-content__item__heading">Daily email reports</h5>
                      <p class="features-content__item__content">Create custom landing pages with<br
                                              class="d-none d-md-block"> Fastland that converts more visitors<br
                                              class="d-none d-md-block"> than any website.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ .Feature Area -->
  <!-- Content One Area -->
  <div class="content-section content-section--l1-1 bg-default">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-5 col-lg-6 col-xs-7">
          <!-- Content Image Wrap -->
          <div class="content-image-group content-image-group--l1_1">
            <!-- Content Image -->
            <img class="w-100" src="{{ asset('website/image/home-1/l1-contentOne-img-woman.png') }}" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <!-- Content Image -->
            <div class="content-image-group__image content-image-group__image-1" data-aos="fade-bottom" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              <img class="w-100" src="{{ asset('website/image/home-1/purple-dots.png') }}" alt="">
            </div>
            <!-- Content Image -->
            <div class="content-image-group__image content-image-group__image-2" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
              <img class="w-100" src="{{ asset('website/image/home-1/l1-contentOne-shape-1.png') }}" alt="">
            </div>
            <!-- Content Image -->
            <div class="content-image-group__image content-image-group__image-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
              <img class="w-100" src="{{ asset('website/image/home-1/l1-contentOne-shape-2.png') }}" alt="">
            </div>
            <!-- Content Image -->
            <div class="content-image-group__image content-image-group__image-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
              <!-- Card Section -->
              <div class="card card--content bg-primary dark-mode-texts">
                <div class="card-head d-flex align-items-end">
                  <h2 class="card-head__count text-white">68%</h2>
                  <span class="card-head__icon">
                                  <i class="fa fa-arrow-up"></i>
                              </span>
                </div>
                <div class="card-body p-0">
                  <p class="card-body__description">Extra growth for your company.</p>
                </div>
              </div>
              <!--/ .Card Section -->
            </div>
          </div>
          <!--/ .Content Image Wrap -->
        </div>
        <!-- Content Widgets -->
        <div class="col-xxl-4 col-xl-4 offset-xl-1 col-lg-6 col-md-8 col-xs-9">
          <div class="content-texts content-texts--l1-1" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <h2 class="content__heading">Get instant <br> growth result <br> for business.</h2>
            <p class="content__description">Create custom landing pages
              with Fastland that converts more visitors than any website. Easy, Reliable & Fast. The best medicines & biggest brands within 30 minutes at your home.</p>
          </div>
        </div>
        <!--/ .Content Widgets -->
      </div>
    </div>
  </div>
  <!--/ .Content One Area -->
  <!-- Content Two Area -->
  <div class="content-section content-section--l1-2 bg-default-2">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-md-7 col-xs-9 order-2 order-lg-1">
          <div class="content-texts content-texts--l1-2" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <h2 class="content__heading">Save your extra <br> money by using<br> our service.</h2>
            <p class="content__description">Create custom landing pages
              with Fastland<br class="d-none d-sm-block"> that converts more visitors than any<br
                          class="d-none d-sm-block"> website. Easy, Reliable & Fast.</p>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-5 offset-lg-1 col-md-7 col-xs-9 order-1 order-lg-2">
          <div class="content-image-group content-image-group--l1_2" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <div class="card card--content-2 bg-white">
              <div class="card--content-single border-bottom-dotted-3">
                <h2 class="card--content-2__currency">$271,824</h2>
                <p class="card--content-2__text">Annual revenue</p>
              </div>
              <div class="card--content-single">
                <h2 class="card--content-2__currency">$4,249</h2>
                <p class="card--content-2__text">Savings using other services</p>
              </div>
              <div class="card--content-single card--content-single--highlight  bg-green-2">
                <h2 class="card--content-2__currency">$21,947</h2>
                <p class="card--content-2__text">Savings using Fastland</p>
              </div>
            </div>
            <div class="content-image-group__image content-image-group__image-1">
              <img class="w-100" src="{{ asset('website/image/home-1/l1-contentTwo-shape-1.png') }}" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
            </div>
            <div class="content-image-group__image content-image-group__image-2" data-aos="fade-bottom" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
              <img class="w-100" src="{{ asset('website/image/home-1/gray-dots.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ .Content Two Area -->
  <!-- Testimonial Area -->
  <div class="testimonial-area bg-default">
    <div class="container">
      <div class="testimonial-slider testimonial-slider--l1" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
        <div class="testimonial-slider__single-slide">
          <div class="widget widget--testimonial">
            <div class="review-star">
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single active" href="#">
                <i class="fa fa-star"></i>
              </a>
            </div>
            <p class="widget--testimonial__description">Create custom landing pages with Fastland that converts more visitors
              than any website. Easy, Reliable & Fast.</p>
            <div class="widget widget--profile">
              <img class="widget--profile__image" src="{{ asset('website/image/home-1/user-1.png') }}" alt="">
              <div class="widget--profile__body">
                <h6 class="widget--profile__name">John Doe</h6>
                <p class="widget--profile__position">Product Designer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial-slider__single-slide">
          <div class="widget widget--testimonial">
            <div class="review-star">
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single active" href="#">
                <i class="fa fa-star"></i>
              </a>
            </div>
            <p class="widget--testimonial__description">Create custom landing pages with Fastland that converts more visitors
              than any website. Easy, Reliable & Fast.</p>
            <div class="widget widget--profile">
              <img class="widget--profile__image" src="{{ asset('website/image/home-1/user-2.png') }}" alt="">
              <div class="widget--profile__body">
                <h6 class="widget--profile__name">Tiana Dokidis</h6>
                <p class="widget--profile__position">CMO, Dotcorn</p>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial-slider__single-slide">
          <div class="widget widget--testimonial">
            <div class="review-star">
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single" href="#">
                <i class="fa fa-star"></i>
              </a>
              <a class="review-star__single active" href="#">
                <i class="fa fa-star"></i>
              </a>
            </div>
            <p class="widget--testimonial__description">Create custom landing pages with Fastland that converts more visitors
              than any website. Easy, Reliable & Fast.</p>
            <div class="widget widget--profile">
              <img class="widget--profile__image" src="{{ asset('website/image/home-1/user-3.png') }}" alt="">
              <div class="widget--profile__body">
                <h6 class="widget--profile__name">Talan Bergson</h6>
                <p class="widget--profile__position">CEO, Greener</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ .Testimonial Area -->
  <!-- Counter Area -->
  <div class="counter-section bg-default">
    <div class="container">
      <div class="counter-widgets-wrapper border-top border-default-color-2">
        <div class="row justify-content-center">
          <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <div class="widget widget--counter">
              <h3 class="text-blue-ribbon widget--counter__title"><span class="counter">15</span>M</h3>
              <p class="widget--counter__text">New visitors<br class="d-none d-xs-block"> every month.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
            <div class="widget widget--counter">
              <h3 class="text-primary widget--counter__title"><span class="counter">49</span>%</h3>
              <p class="widget--counter__text">Extra conversion<br class="d-none d-xs-block"> on any niche.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
            <div class="widget widget--counter">
              <h3 class="text-green-2 widget--counter__title">$<span class="counter">2</span>M</h3>
              <p class="widget--counter__text">Extra saved by<br class="d-none d-xs-block"> customers.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-4 col-xs-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <div class="widget widget--counter">
              <h3 class="text-tree-poppy widget--counter__title"><span class="counter">93</span>%</h3>
              <p class="widget--counter__text">Success rate on<br class="d-none d-xs-block"> last 05 years.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--/ .Counter Area -->
@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection