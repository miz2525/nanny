@extends('layouts.app')

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
      <div class="row justify-content-center">

        @foreach ($nannies as $nanny)
            <!-- Start profile -->
            <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{ URL('/').'/'.env('STORAGE_PATH').'/'.$nanny->images->first()->file_name }}" alt="">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    <a href="{{ route('nanny.profile', $nanny->id) }}" class="hover-content__badge badge bg-primary">
                      View profile
                    </a>
                    <a href="/blog-details.html" class="hover-content__date">
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
                      <a href="{{ route('nanny.profile', $nanny->id) }}">
                        {{config('nanny.visa_status')[$nanny->visa_status]}}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End profile -->
        @endforeach
      </div>
      {!! $nannies->withQueryString()->links('pagination::bootstrap-5') !!}
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

@section('scripts') <!-- Script Section --> @endsection