@extends('layouts.app')

@section('page-title') Your Nanny Job Search starts on NannyGenie @endsection
@section('meta_description') Find your dream nanny job with NannyGenie. Explore new opportunities live-in and live-out in diverse households nationwide. Start your career today! @endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('website/plugins/fancybox/jquery.fancybox.min.css') }}">
@endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')

<div class="welcome-area welcome-area--l9 bg-default-8">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9 col-xs-11 order-2 order-lg-1">
        <div class="welcome-content">
          <h5 class="welcome-content__sub-heading text-java" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
              We find you a matching family
          </h5>
          <h1 class="welcome-content__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
            Ready for a new Nanny job?
          </h1>



            <div class="career-details-box career-details-box--2">
                <ul class="career-deatils__content__list">
                  <li>We create your profile</li>
                  <li>We find you a matching family</li>
                  <li>0 costs for you</li>
                </ul>
            </div>

          <div class="welcome-btn-group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">
            <a class="btn btn--lg-2 btn-electric-violet-2 me-3 text-white shadow--electric-violet-2 rounded-50 me-3" href="https://wa.me/971529828176?text=Hi, I have a question about NannyGenie" target="_blank">
                Text us on WhatsApp
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-9 col-xs-11 order-1 order-lg-2">
        <div class="welcome-img welcome-img--l9 video-box">
          <img class="w-100" src="{{ asset('website/image/find-a-new-job.jpg') }}" alt="find a new job" />
          <!-- Video Button -->
          <a class="video-btn btn-electric-violet-2 popup-btn" href="https://www.youtube.com/watch?v=DgEpIseZ8EQ">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="faqs-area pricing-table__faqs bg-default-6">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8 col-md-9 col-xs-10">
        <!-- Section Title -->
        <div class="section-title section-title--l8 text-center">
          <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Frequently Asked Question</h2>
        </div>
        <!--/ .Section Title -->
      </div>
    </div>
    <!-- Faqs -->
    <div class="row" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
        <div class="col-lg-6 col-md-9 col-xs-11">
          <!-- Single Faq -->
          <div class="faqs faqs__single">
            <div class="faqs__media d-flex">
              <div class="faqs__icon">
                <i class="fa fa-question"></i>
              </div>
              <div class="faqs__content">
                <h4 class="faqs__content__title">How much does it cost?</h4>
                <p class="faqs__content__text">
                    NannyGenie is absolute free for all nannies.
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Faq -->
        </div>

      <div class="col-lg-6 col-md-9 col-xs-11">
        <!-- Single Faq -->
        <div class="faqs faqs__single">
          <div class="faqs__media d-flex">
            <div class="faqs__icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="faqs__content">
              <h4 class="faqs__content__title">Is a NannyGenie an agency?</h4>
              <p class="faqs__content__text">
                  No. NannyGenie is an online platform that connects busy families with trusted nannies, making it easier for families to find reliable childcare. At the same time, it helps nannies by providing them with more job opportunities and support. Families can access a wide network of pre-screened nannies and conveniently browse through their profiles to find the right match. The platform benefits both families and nannies, creating a win-win situation for everyone involved.
              </p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
      </div>

      <div class="col-lg-6 col-md-9 col-xs-11">
        <!-- Single Faq -->
        <div class="faqs faqs__single">
          <div class="faqs__media d-flex">
            <div class="faqs__icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="faqs__content">
              <h4 class="faqs__content__title">Do we have to pay any registration fee during the interview?</h4>
              <p class="faqs__content__text">
                  No. NannyGenie goes the extra mile by ensuring that nannies are not burdened with any registration fees. This means that nannies can join the platform and create their profiles without incurring any financial obligations. NannyGenie aims to make the platform accessible and inclusive for nannies of all backgrounds and experiences. This approach enables nannies to explore a wider range of job opportunities and showcase their skills and expertise to potential families without any financial barriers.
              </p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
      </div>

      <div class="col-lg-6 col-md-9 col-xs-11">
        <!-- Single Faq -->
        <div class="faqs faqs__single">
          <div class="faqs__media d-flex">
            <div class="faqs__icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="faqs__content">
              <h4 class="faqs__content__title">Do we get the visa from you or is it direct from the client?</h4>
              <p class="faqs__content__text">
                  Once the employer and the nanny have reached an agreement on the terms and conditions of their employment, including the duration and scope of the nanny's services, it is customary for the employer to take responsibility for providing the necessary visa for the nanny.
                  <br />
                  It's important for employers and nannies to discuss visa-related matters during the negotiation and agreement phase to ensure clarity and understanding of the responsibilities involved. Open communication and collaboration between both parties help establish a strong foundation for a successful and legally compliant nanny-employer relationship.
              </p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
      </div>

      <div class="col-lg-6 col-md-9 col-xs-11">
        <!-- Single Faq -->
        <div class="faqs faqs__single">
          <div class="faqs__media d-flex">
            <div class="faqs__icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="faqs__content">
              <h4 class="faqs__content__title">What is the purpose of the psychometric and personality tests? </h4>
              <p class="faqs__content__text">
                  The purpose of personality and psychometric tests in NannyGenie is to provide families with additional insights into the traits, characteristics, and suitability of potential nannies beyond what can be gleaned from their profiles and interviews.
                  <br />
                  By incorporating personality and psychometric tests, NannyGenie aims to enhance the matching process by providing families with objective data and a comprehensive understanding of a nanny's abilities, strengths, and areas for growth. These tests contribute to creating successful long-term placements by ensuring a better alignment between a nanny's characteristics and the specific requirements of the family.
              </p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
      </div>

      <div class="col-lg-6 col-md-9 col-xs-11">
        <!-- Single Faq -->
        <div class="faqs faqs__single">
          <div class="faqs__media d-flex">
            <div class="faqs__icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="faqs__content">
              <h4 class="faqs__content__title">Do nannies have a contract with NannyGenie?</h4>
              <p class="faqs__content__text">
                  NannyGenie operates as a facilitator, striving to connect nannies with potential families through its comprehensive matching process.
                  <br />
                  It is important to note that nannies are not bound by any contractual obligations or commitments to NannyGenie beyond this notification requirement. NannyGenie's primary focus is on assisting nannies in finding suitable job opportunities and connecting them with families seeking their services. The platform operates with the understanding that nannies may secure employment through various channels, and it respects the nannies' autonomy in choosing the best opportunities for themselves.
              </p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
      </div>

      <!-- Button  -->
      <div class="buttons text-center">
        <p class="">
            Haven’t got your answer?
            <br />
            <a class="btn-link text-electric-violet-2 ms-2" href="https://wa.me/971529828176?text=Hi, I have a question about NannyGenie" target="_blank">
                Reach out to us via WhatsApp
            </a>
        </p>
      </div>
      <!-- Button End -->
    </div>
  </div>
</div>

@include('layouts._include._viewall')
@endsection

@section('footer')
  @include('layouts._include._footer')
@endsection

@section('scripts')
<script src="{{ asset('website/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<script>
  if (jQuery(".popup-btn").length > 0) {
        $("a.popup-btn").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600,
            'speedOut': 200
        });
    }

    if (jQuery(".popup-img").length > 0) {
        $("a.popup-img").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600,
            'speedOut': 200
        });
    }
</script>
@endsection