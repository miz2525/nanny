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
          <p class="welcome-content__descriptions">
              Nanny Genie is an innovative childcare service portal designed to make
              finding the right nanny an easy and hassle-free experience.
          </p>

          <div class="welcome-btn-group--l3">
            <a class="btn btn--lg-2 btn-primary shadow--primary text-white rounded-50 me-2 me-sm-3 aos-init aos-animate" href="all-nannies.php" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
              Browse all nannies
            </a>
          </div>

          <p class="welcome-content__terms-text">
              <br />
              Be sure to check our
              <a href="ethical-considerations-for-hiring-a-nanny.php">Ethical considerations for hiring a nanny</a> and
              <a class="btn btn-link" href="eligibility-criteria-for-hiring-a-nanny.php">Eligibility criteria for hiring a nanny</a>
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
          <h2 class="section-title__heading">
              We aim to connect happy families and happy nannies
          </h2>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-xs-10">
        <div class="section-title  text-center text-md-start" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
          <p class="section-title__description">
              We understand the challenges of relying on social media groups and anonymous recommendations,
              which is why we offer a secure and transparent environment for finding the right nanny.
          </p>
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
              <img src="{{ asset('website/image/svg/Comprehensive-Nanny-Profiles.svg') }}" alt="Comprehensive Nanny Profiles">
            </div>
            <div class="widget__body">
              <h5 class="widget__heading">
                  Comprehensive Nanny Profiles
              </h5>
              <p class="widget__description">
                  Not just a resume but valuable insights about the nanny’s abilities and suitability for your needs. Each profile includes psychometric test results, which help assess the nanny's safeguarding abilities, and an interpretation of a personality test to better understand their traits.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-10">
          <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
            <div class="widget__icon widget__icon--ice-cold mx-auto mx-md-0">
              <img src="{{ asset('website/image/svg/archery-target.svg') }}" alt="">
            </div>
            <div class="widget__body">
              <h5 class="widget__heading">
                  Standardized Resumes
              </h5>
              <p class="widget__description">
                  We ensure that all resumes are presented in a standardized form, making it easier for you to compare and evaluate the qualifications and experiences of different nannies
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-10">
          <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
            <div class="widget__icon widget__icon--anakiwaap mx-auto mx-md-0">
              <img src="{{ asset('website/image/svg/Verified-References.svg') }}" alt="Verified References">
            </div>
            <div class="widget__body">
                <h5 class="widget__heading">
                    Verified References
                </h5>
              <p class="widget__description">
                  Nanny Genie verifies references provided by nannies, including quoted commentary, giving you confidence in the credibility of their work history and recommendations.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-10">
          <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
            <div class="widget__icon widget__icon--anakiwaap mx-auto mx-md-0">
              <img src="{{ asset('website/image/svg/Visa Status Verification.svg') }}" alt="Visa Status Verification">
            </div>
            <div class="widget__body">
                <h5 class="widget__heading">
                    Visa Status Verification
                </h5>
              <p class="widget__description">
                  For families with specific visa requirements, we provide visa status verification for nannies, ensuring they meet the necessary legal criteria.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-10">
          <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
            <div class="widget__icon widget__icon--golden-tainoi mx-auto mx-md-0">
              <img src="{{ asset('website/image/svg/video.svg') }}" alt="">
            </div>
            <div class="widget__body">
                <h5 class="widget__heading">
                    Prerecorded Video Interviews
                </h5>
              <p class="widget__description">
                  Access prerecorded video interviews of the nannies, allowing you to get a better sense of their personality, communication style, and overall suitability for your family.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-10">
          <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
            <div class="widget__icon widget__icon--ice-cold mx-auto mx-md-0">
              <img src="{{ asset('website/image/svg/Daily nanny profile updates.svg') }}" alt="Daily nanny profile updates">
            </div>
            <div class="widget__body">
                <h5 class="widget__heading">
                    Daily profile updates
                </h5>
              <p class="widget__description">
                  Our portal is constantly updated with new nanny profiles added daily, ensuring a fresh and diverse selection of caregivers for families.
              </p>
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
          <h2 class="section-title__heading mb-5">
              We understand the challenges of relying on social media
          </h2>
          <p class="section-title__description mt-8">
              We understand the challenges of relying on social media groups and anonymous recommendations,
              which is why we offer a secure and transparent environment for finding the right nanny.
          </p>
        </div>
      </div>
    </div>
    <!--/ .Section Title -->
    <div class="feature-area-tab">
      <div class="row justify-content-center justify-content-md-start">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="tab-content tab-content--feature" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row align-items-center">
                <div class="col-md-4 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                  <div class="features-content__item">
                    <h2 class="features-content__item__count">01.</h2>
                    <h5 class="features-content__item__heading">Interview nannies</h5>
                    <p class="features-content__item__content">
                        We interview and create a video profile separate for each and every nanny
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                  <div class="features-content__item">
                    <h2 class="features-content__item__count">02.</h2>
                    <h5 class="features-content__item__heading">Comprehensive profile</h5>
                    <p class="features-content__item__content">
                        Each profile contains a personality test, checked references and verified visa status
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                  <div class="features-content__item">
                    <h2 class="features-content__item__count">03.</h2>
                    <h5 class="features-content__item__heading">Daily updates</h5>
                    <p class="features-content__item__content">
                        We contantly touch base with nannies to make sure you get the latest information
                    </p>
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
          <img class="w-100" src="{{ asset('website/image/Revolutionary nanny service.jpg') }}" alt="Revolutionary nanny service" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
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
                  <h2 class="card-head__count text-white">2h</h2>
                  <span class="card-head__icon">
                                  <i class="fa fa-arrow-up"></i>
                              </span>
                </div>
                <div class="card-body p-0">
                  <p class="card-body__description">
                      Find a super nanny in 2 hours
                  </p>
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
          <h2 class="content__heading">
              Revolutionary nanny service
          </h2>
          <p class="content__description">
              Nanny Genie is a revolutionary nanny service that combines cutting-edge technology with a touch of magic to help you find the perfect caregiver for your family.
          </p>
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
          <h2 class="content__heading">
              Enjoy the convenience of watching video interviews
          </h2>
          <p class="content__description">
              At Nanny Genie, we offer our services at a competitive and affordable price of 370 AED.
              <br /><br />
              This fee provides you with access to our comprehensive childcare service portal, allowing you to explore nanny profiles, review psychometric test results, access standardized resumes, verify references, and benefit from visa status verification.
          </p>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-5 col-lg-5 offset-lg-1 col-md-7 col-xs-9 order-1 order-lg-2">
        <div class="content-image-group content-image-group--l1_2" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
          <div class="card card--content-2 bg-white">
            <div class="card--content-single border-bottom-dotted-3">
              <h2 class="card--content-2__currency">3 hours</h2>
              <p class="card--content-2__text">Time saved / nanny</p>
            </div>
            <div class="card--content-single">
              <h2 class="card--content-2__currency">45 days</h2>
              <p class="card--content-2__text">Time saved / hiring</p>
            </div>
            <div class="card--content-single card--content-single--highlight  bg-green-2">
              <h2 class="card--content-2__currency">370 AED</h2>
              <p class="card--content-2__text">30 days access</p>
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
            <a class="review-star__single" href="#">
              <i class="fa fa-star"></i>
            </a>
          </div>
          <p class="widget--testimonial__description">
              Nanny Genie has been a game-changer for my family. Their customized matchmaking service helped us find the perfect nanny hassle-free. Thank you, Nanny Genie and Oana for supporting us and making our feedback important.
          </p>
          <div class="widget widget--profile">
            <div class="widget--profile__body">
              <h6 class="widget--profile__name">Maria</h6>
              <p class="widget--profile__position">Dubai</p>
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
            <a class="review-star__single" href="#">
              <i class="fa fa-star"></i>
            </a>
          </div>
          <p class="widget--testimonial__description">
              I was so intrigued by Nanny Genie's tests for the nannies. It was fascinating to see how they assessed the nanny's abilities and made the whole process of finding a nanny a lot less time consuming.
          </p>
          <div class="widget widget--profile">
            <div class="widget--profile__body">
              <h6 class="widget--profile__name">Hiba</h6>
              <p class="widget--profile__position">Dubai</p>
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
            <a class="review-star__single" href="#">
              <i class="fa fa-star"></i>
            </a>
          </div>
          <p class="widget--testimonial__description">
              I highly recommend Nanny Genie for families in need of a nanny. Their user-friendly interface and comprehensive nanny profiles, complete with psychometric and personality test results, make the process of finding a reliable and suitable caregiver a breeze.
          </p>
          <div class="widget widget--profile">
            <div class="widget--profile__body">
              <h6 class="widget--profile__name">Salma</h6>
              <p class="widget--profile__position">Ajman</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection