@extends('layouts.app')

@section('page-title')
@php echo ($nanny->meta_title)? $nanny->meta_title : 'All Nannies - Find Your Perfect Caregiver at NannyGenie'; @endphp
@endsection
@section('meta_description')
@php echo ($nanny->meta_description)? $nanny->meta_description : 'Discover qualified nannies at Nanny Genie. Our rigorous process includes video interviews and reference checks, ensuring reliable and trustworthy caregivers for your family.'; @endphp
@endsection
@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles')
  <style>
    #loading{ display: none !important; }
    .para-styles > p {
      font-family: unset !important;
      color: unset !important;
      font-size: unset !important;
      line-height: unset !important;
    }

    .para-styles > p > span {
      font-family: unset !important;
      color: unset !important;
      font-size: unset !important;
      line-height: unset !important;
    }

    .para-styles > ol > li {
      font-family: unset !important;
      color: unset !important;
      font-size: unset !important;
      line-height: unset !important;
    }

    .para-styles > ol > li > p > span {
      font-family: unset !important;
      color: unset !important;
      font-size: unset !important;
      line-height: unset !important;
    }
    span {
      font-family: unset !important;
      color: unset !important;
      font-size: unset !important;
      line-height: unset !important;
    }
  </style>
@endsection

@section('header')
    @include('layouts._include._header')
@endsection

@section('content')
<!-- Blog Details Area -->
<div class="blog-details bg-default-6">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="blog-title">
          <h1 class="blog-title__heading">@if(Auth::check() && Auth::user()->is_paid) {{$nanny->first_name.' '.$nanny->family_name}} @else {{$nanny->short_name}} @endif</h1>
          <div class="blog__metainfo">
            <a href="javascript:;" class="blog__metainfo__author-name">Added {{dateDifferanceTwoDatesFormat($nanny->updated_at, date('Y-m-d H:i:s'))}} ago</a>
          </div>
        </div>
        <div class="blog-content">
          <section class="intro">
            <div class="blog-content-video">
              <iframe class="blog-content-video__iframe" src="{{$nanny->video_link_url}}" title="Video about nannie genie" width="756" height="567" webkitallowfullscreen mozallowfullscreen allow="fullscreen">
              </iframe>
            </div>

            <div class="para-styles blog-content__text">{!! $nanny->intro !!}</div>
            
          </section>

          <section class="work-background mt-7 mb--40 mb-lg--65">
            <h2 class="section-title mb--40">Work background</h2>
            <p class="blog-content__text">
                {{$nanny->first_name}} has experience with {{$nanny->backgrounds->count()}} different families, and we were able to get reference from {{$nanny->backgrounds->where('reference_title', '!=', '')->count()}} family.
            </p>

            @foreach ($nanny->backgrounds as $background)
            <h3 class="section-subtitle mt--20">{{$background->work_title}}</h3>
            <h4 class='section-subtitle-small'>{{$background->work_period}}</h4>
            @if ($background->status)
              <h4 class='section-subtitle-small icon__checked'>Reference: checked</h4>
            @else
              <h4 class='section-subtitle-small'>Reference: not checked</h4>
            @endif 

            <div class="collapse-content">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField{{$background->id}}" aria-expanded="false" aria-controls="collapseField{{$background->id}}">
              Click here for more information
              </button>
              <div class="collapse" id="collapseField{{$background->id}}">
                <div class="card card-body">
                  {!! $background->work_description !!}

                  {{-- @if ($background->status) --}}
                    <h4 class="section-subtitle-small mt-2">{{$background->reference_title}}</h4>
                    {!! $background->reference_description !!}
                  {{-- @endif --}}
                  
                </div>
              </div>
            </div>
            @endforeach


          </section>

          @if(Auth::check() && Auth::user()->is_paid)
            <section class="contact-form mt-7 mb-4">
              <div class="card card-jobs flex-row justify-content-between align-items-center flex-wrap text-center text-md-start">
                <div class="card-jobs__content">
                  <h2 class="card-jobs__content__heading">Contact details</h2>

                  @if(Auth::user()->status=='approved')
                  <p class="mt--20">
                      Full name:
                      <b>
                          {{$nanny->first_name.' '.$nanny->family_name}}
                      </b>
                      <br />
                      Phone number:
                      <b>
                          {{$nanny->phone_number}}
                      </b>
                  </p>
                  @else
                  <p class="mt--20">
                      Phone number:
                      <b>
                          +971 52 982 8176
                      </b>
                  </p>
                  @endif
                </div>
              </div>
            </section>
          @else
            
            @if(Auth::check())
            <section class="contact-form mt-7 mb-4">
              <div class="card card-jobs flex-row justify-content-between align-items-center flex-wrap text-center text-md-start">
                <div class="card-jobs__content">
                  <h2 class="card-jobs__content__heading">Contact details</h2>
                  <ul class="card-jobs__content__details list-unstyled d-flex align-items-center flex-wrap justify-content-center justify-md-content-start">
                    <li>
                      <a href="#">
                        <i class="fa fa-clock text-electric-violet-2"></i>
                        Contact details are only visible to paid customers
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-job__btn mx-auto mx-md-0 mt-2 mt-md-0">
                  <button class="btn btn-primary shadow--primary-6 rounded-50 text-white d-block my-2" onclick="window.location='/pricing'">Go to payment</button>
                </div>
              </div>
            </section>
            @else
            <section class="contact-form mt-7 mb-4">
              <div class="card card-jobs flex-row justify-content-between align-items-center flex-wrap text-center text-md-start">
                <div class="card-jobs__content">
                  <h2 class="card-jobs__content__heading">Contact details</h2>
                  <ul class="card-jobs__content__details list-unstyled d-flex align-items-center flex-wrap justify-content-center justify-md-content-start">
                    <li>
                      <a href="#">
                        <i class="fa fa-clock text-electric-violet-2"></i>
                        Contact details are only visible to paid customers
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-job__btn mx-auto mx-md-0 mt-2 mt-md-0">
                  <button class="btn btn-primary shadow--primary-6 rounded-50 text-white d-block my-2" onclick="window.location='/register'">Create account</button>
                  <button class="btn btn-outline-primary rounded-50 d-block my-2" onclick="window.location='/login'">Login</button>
                </div>
              </div>
            </section>
            @endif
          @endif



          <section class="psychometric-report mt-7 mb--40 mb-lg--65">
            <h2 class="section-title mb--20">Psychometric Report</h2>
            <p class="blog-content__text mt--20 mb-0">
                This psychometric report is designed to provide insight into {{$nanny->first_name}}'s abilities and psychometric values in relation to her suitability for a nanny or childminder role. The report is based on a series of standardized psychometric tests that {{$nanny->first_name}} completed.
            </p>

            <div class="collapse-content mt-2 mb-5">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField3" aria-expanded="false" aria-controls="collapseField3">
              Key Results
              </button>
              <div class="collapse" id="collapseField3">
                <div class="card card-body para-styles blog-content__text">
                  {!! $nanny->psychometric_key_result !!}
                </div>
              </div>
            </div>
            <div class="para-styles blog-content__text">
              {!! $nanny->psychometric_conclusion !!}
            </div>
          </section>

          <section class="personality-report mt-7 mb--40 mb-lg--65">
            <h2 class="section-title mb--20">Personality Report</h2>
            <div class="para-styles blog-content__text">
              {!! $nanny->personality_introduction !!}
            </div>

            <div class="collapse-content">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField4" aria-expanded="false" aria-controls="collapseField4">
              Strengths
              </button>
              <div class="collapse" id="collapseField4">
                <div class="card card-body para-styles blog-content__text">
                  {!! ($nanny->personality_strength) !!}
                </div>
              </div>
            </div>

            <div class="collapse-content">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField5" aria-expanded="false" aria-controls="collapseField5">
              Weaknesses
              </button>
              <div class="collapse" id="collapseField5">
                <div class="card card-body para-styles blog-content__text">
                  {!! $nanny->personality_weekness !!}
                </div>
              </div>
            </div>

            <div class="collapse-content">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField6" aria-expanded="false" aria-controls="collapseField6">
              Opportunities with this personality type
              </button>
              <div class="collapse" id="collapseField6">
                <div class="card card-body para-styles blog-content__text">
                  {!! $nanny->personality_opportunity !!}
                </div>
              </div>
            </div>

            <div class="collapse-content">
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField7" aria-expanded="false" aria-controls="collapseField7">
              Potential Risks
              </button>
              <div class="collapse" id="collapseField7">
                <div class="card card-body para-styles blog-content__text">
                  {!! $nanny->personality_potential_risk !!}
                </div>
              </div>
            </div>

            

            <h2 class="section-title recommendation-title mt-7 mb--20">Recommendation</h2>
            <div class="para-styles blog-content__text">
              {!! $nanny->personality_recommendation !!}
            </div>
          </section>
          @php $skills = collect(array_filter(explode(',', $nanny->skills))); @endphp
          @if($skills->count()>0)
          <section class="post-tags-section pt-4">
            <h5 class="post-tags-section__title mb-0 mt-0">
              Abilities:
            </h5>
            <ul class="post-tags list-unstyled mb-1">
              
              @foreach ($skills as $skill)
               <li><a href="javacript:;">{{config('nanny.skills')[$skill]}}</a></li>
              @endforeach
            </ul>
          </section>
          @endif

          @php $supports = collect(array_filter(explode(',', $nanny->needs_support_with))) @endphp
          @if($supports->count()>0)
          <section class="post-tags-section pt-4">
            <h5 class="post-tags-section__title mb-0 mt-0">
              Things I enjoy:
            </h5>
            <ul class="post-tags list-unstyled mb-2">
              @foreach ($supports as $support)
               <li><a href="javacript:;">{{config('nanny.needs_support_with')[$support]}}</a></li>
              @endforeach
            </ul>
          </section>
          @endif

          <section class="post-social-share d-flex align-items-center flex-wrap pt-4">
            {{-- <h5 class="post-social-share__title mb-0">Share:</h5> --}}
            <ul class="social-share list-unstyled mb-0">
              <li><a href="https://web.whatsapp.com/send?text=Hey, I found a nanny on NannyGenie - {{ route('nanny.profile', $nanny->id) }}" target="_blank"><h5 class="post-social-share__title mb-0">Share this on Whatsapp:</h5> <i class="fab fa-whatsapp"></i></a></li>
              {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
            </ul>
            {{-- <a href="https://web.whatsapp.com/send?text=Hey, I found a nanny on NannyGenie - $theURLComesHere" target="_blank"> --}}
          </section>
        </div>
      </div>

      <div class="col-xl-4 offset-xl-1 col-lg-5 mt-5 mt-lg-0">
        <div class="sidebar-area">
          <section class="widget">
            <h3 class="widget__title">Quick facts</h3>
            <div class="widget__category">
              <ul class="list-unstyled">
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">Age</h4>
                    <span>{{calculateAge($nanny->date_of_birth)}} years</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">Experience</h4>
                    <span>{{$nanny->experience_years}} years</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">Nationality</h4>
                    <span>{{$nanny->country->nicename}}</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">City</h4>
                    <span>{{$nanny->city->name}}</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">Driving license</h4>
                    <span>{{($nanny->driving_license)? 'Yes' : 'No'}}</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                    <h4 class="mb-0">Ready to start</h4>
                    <span>{{date('d M', strtotime($nanny->start_work))}}</span>
                  </a>
                </li>
              </ul>
            </div>
          </section>

          @if((Auth::check() && Auth::user()->is_paid))
          <section class="widget">
            <h3 class="widget__title">Contact details</h3>
            <p class="">Contact details are only visible to paid customers</p>
            <div class="welcome-btn-group--l3">
                <div class="welcome-btn-group--l3">
                    @if(Auth::user()->status=='approved')
                    <p class="mt--20">
                        Full name:
                        <b>
                            {{$nanny->first_name.' '.$nanny->family_name}}
                        </b>
                        <br />
                        Phone number:
                        <b>
                            {{$nanny->phone_number}}
                        </b>
                    </p>
                    @else
                    <p class="mt--20">
                        Phone number:
                        <b>
                            +971 52 982 8176
                        </b>
                    </p>
                    @endif
                </div>
            </div>
          </section>
          @else
            @if(Auth::check())
              <section class="widget">
                <h3 class="widget__title">Contact details</h3>
                <p class="">Contact details are only visible to paid customers</p>
                <div class="welcome-btn-group--l3">
                  <a class="btn btn--lg-2 btn-primary shadow--primary text-white rounded-50 me-2 me-sm-3 aos-init aos-animate" href="{{ route('pricing') }}" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                    Go to payment page
                  </a>
                </div>
              </section>
            @else
              <section class="widget">
                <h3 class="widget__title">Contact details</h3>
                <p class="">Contact details are only visible to paid customers</p>
                <div class="welcome-btn-group--l3">
                  <a class="btn btn--lg-2 btn-primary shadow--primary text-white rounded-50 me-2 me-sm-3 aos-init aos-animate" href="{{route('register')}}" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                    Create an account
                  </a>
                </div>
                <p class="welcome-content__terms-text">
                  Existing customer?
                  <a class="btn btn-link" href="{{ route('login') }}">Click here to login
                  </a>
                </p>
              </section>
            @endif
          @endif


          



          <!-- Single Widgets -->
          <section class="widget">
            <h3 class="widget__title">In-depth profile</h3>
            <ul class="widget__recent-post list-unstyled mb-0 pb-0">
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Open to work</h4>
                @if($nanny->open_to_work=='both')
                  <p class="widget__recent-post__date">Live in / Live out</p>
                @else
                  <p class="widget__recent-post__date">{{config('nanny.open_to_work')[$nanny->open_to_work]}}</p>
                @endif
                
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Salary expectation</h4>
                <p class="widget__recent-post__date">
                  {{$nanny->salary_live_in}} (Live in)
                  <br />
                  {{$nanny->salary_live_out}} (Live out)
                </p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Languages</h4>
                <p class="widget__recent-post__date">{{GetNannyLanguagesHtml($nanny->languages)}}</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Visa status</h4>
                <p class="widget__recent-post__date">{{config('nanny.visa_status')[$nanny->visa_status]}} @if($nanny->visa_status_info) - {{$nanny->visa_status_info}} @endif</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Education level</h4>
                <p class="widget__recent-post__date">{{config('nanny.education_level')[$nanny->education_level]}}</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Ok with Pet Friendly homes</h4>
                <p class="widget__recent-post__date">{{($nanny->pet_friendly)? 'Yes' : 'No'}}</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Age groups experience</h4>
                <p class="widget__recent-post__date">{{str_replace(',', ', ', $nanny->age_group_experience)}}</p>
              </li>
            </ul>
          </section>

          <!--/ .Single Widgets -->
        </div>
        <!--/ .Single Widgets -->
      </div>
    </div>
  </div>
</div>
<!--/ .Blog Details Area -->
@endsection

@section('footer')
    @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection