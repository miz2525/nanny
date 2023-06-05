@extends('layouts.app')

@section('page-title') All Nannies - Find Your Perfect Caregiver at NannyGenie @endsection
@section('meta_description') Discover qualified nannies at Nanny Genie. Our rigorous process includes video interviews and reference checks, ensuring reliable and trustworthy caregivers for your family. @endsection

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles')
<style>
  .flex-sm-fill {
      flex: 0.4 1 auto !important;
  }
</style>
@endsection

@section('header')
    @include('layouts._include._header')
@endsection

@section('content')
<div class="blog-area blog-area--reguler bg-default-6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7">
          <div class="section-title section-title--innerpage text-center pb-7">
            <h5 class="section-title__sub-heading text-electric-violet-2">Browse here from</h5>
            <h2 class="section-title__heading">All nannies</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <form action="{{ route('all-nannies') }}" class="form__filters col d-flex justify-content-center align-items-center col" method="GET">
          <select class="form-select form__filter" aria-label="Filter by experience" style="" name="ex">
            <option value="" selected="">Experience:</option>
            <option value="<1" @if(isset(request()->ex) && request()->ex=='<1') selected="" @endif>Under 1 year</option>
            <option value="1-3" @if(isset(request()->ex) && request()->ex=='1-3') selected="" @endif>1 to 3 years</option>
            <option value="3-5" @if(isset(request()->ex) && request()->ex=='3-5') selected="" @endif>3 to 5 years</option>
            <option value="5>" @if(isset(request()->ex) && request()->ex=='5>') selected="" @endif>More than 5 years</option>
          </select>

          <select class="form-select form__filter" aria-label="Filter by languages" style="" name="la">
            <option value="" selected="">Languages:</option>
            <option value="english" @if(isset(request()->la) && request()->la=='english') selected="" @endif>English</option>
            <option value="french" @if(isset(request()->la) && request()->la=='french') selected="" @endif>French</option>
            <option value="tagalog" @if(isset(request()->la) && request()->la=='tagalog') selected="" @endif>Tagalog</option>
            <option value="haitian" @if(isset(request()->la) && request()->la=='haitian') selected="" @endif>Haitian</option> 
            <option value="arabic" @if(isset(request()->la) && request()->la=='arabic') selected="" @endif>Arabic</option>
          </select>

          <select class="form-select form__filter" aria-label="Filter by age group" style="" name="ag">
            <option value="" selected="">Age groups:</option>
            @foreach (config('nanny.age_group_experience') as $AGEK=>$AGEV)
              <option value="{{$AGEK}}" @if(isset(request()->ag) && request()->ag==$AGEK) selected="" @endif>{{ucfirst($AGEV)}}</option>
            @endforeach
          </select>

          <select class="form-select form__filter" aria-label="Filter by visa status" style="" name="visa">
            <option value="" selected="">Visa status:</option>
            @foreach (config('nanny.visa_status') as $VSK=>$VSV)
                <option value="{{$VSK}}" @if(isset(request()->visa) && request()->visa==$VSK) selected="" @endif>{{$VSV}}</option>
            @endforeach
          </select>

          <select class="form-select form__filter" aria-label="Filter by education level" style="" name="edu">
            <option value="" selected="">Education level:</option>
            @foreach (config('nanny.education_level') as $ELK=>$ELV)
                <option value="{{$ELK}}" @if(isset(request()->edu) && request()->edu==$ELK) selected="" @endif>{{$ELV}}</option>
            @endforeach
          </select>               
          
          <button type="submit" class="btn btn-primary shadow--primary-4 btn--lg-2 text-white">Search</button>
        </form>
    </div>
      <div class="row justify-content-center">
        @if($nannies->count()>0)
          @foreach ($nannies as $nanny)
              <!-- Start profile -->
              <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  @if($nanny->images->first())
                  <img class="w-100" src="{{ URL('/').'/'.env('STORAGE_PATH').'/'.$nanny->images->first()->file_name }}" alt="">
                  @else
                  <img class="w-100" src="http://nanny.local.com/storage/whatsapp_image_20230522_at_18.53.13_(1)1684849550.jpeg" alt="">
                  @endif
                  
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="{{ route('nanny.profile', $nanny->id) }}" class="hover-content__badge badge bg-primary">
                        View profile
                      </a>
                      <a href="{{ route('nanny.profile', $nanny->id) }}" class="hover-content__date">
                        Available from {{date('d M', strtotime($nanny->start_work))}}
                      </a>
                    </div>
                    <a href="{{ route('nanny.profile', $nanny->id) }}" class="hover-content__title">
                      {{$nanny->short_name}} ({{calculateAge($nanny->date_of_birth)}} years)
                    </a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="{{ route('nanny.profile', $nanny->id) }}">
                          {{config('nanny.open_to_work')[$nanny->open_to_work]}}
                        </a>
                        <a href="{{ route('nanny.profile', $nanny->id) }}">
                          {{$nanny->country->nicename}}
                        </a>
                        {{-- <a href="{{ route('nanny.profile', $nanny->id) }}">
                          {{config('nanny.visa_status')[$nanny->visa_status]}}
                        </a> --}}
                        <a class="link-video" href="{{$nanny->video_link_url}}" target="_blank">
                          <span class="link-video__icon"><img src="{{ asset('website/image/svg/icon-youtube.svg') }}" alt=""></span>
                          Video interview
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- End profile -->
          @endforeach
        @else
        <div class="row justify-content-center">
          <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 text-center">
            <p class="mt-5">Sorry, there are no results for your filters.</p>
            <h5 class="section-title__sub-heading text-electric-violet-2"><a href="{{ route('all-nannies') }}">See all nannies</a></h5>
          </div>
        </div>
        @endif
      </div>
      {{-- {{dd(request()->all())}} --}}
      {{-- {!! $nannies->withQueryString()->links('pagination::bootstrap-5') !!} --}}
      {{ $nannies->appends(request()->all())->links('pagination::bootstrap-5') }}
      {{-- <div class="row justify-content-center mt-7">
        <div class="col-xl-4">
          <div class="pagination">
            <ul class="list-unstyled text-center mx-auto">
              <li>
                <a href="#"><i class="fa fa-chevron-left"></i></a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#"><i class="fa fa-chevron-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection

@section('footer')
    @include('layouts._include._footer')
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
      $('select').niceSelect('destroy');
  });
</script>
@endsection