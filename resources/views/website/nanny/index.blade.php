@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - All Nannies @endsection

@section('styles') <!-- Style Section --> @endsection

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

        <!-- Start profile -->
        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-2.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="{{ route('nanny.profile', 1) }}" class="hover-content__badge badge bg-primary">
                  View profile
                </a>
                <a href="/blog-details.html" class="hover-content__date">
                  Available from 4 April
                </a>
              </div>
              <a href="{{ route('nanny.profile', 1) }}" class="hover-content__title">
                Katty (34 years)
              </a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Live in
                  </a>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Filipina
                  </a>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Grace period
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End profile -->


        <!-- Start profile -->
        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-2.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="{{ route('nanny.profile', 1) }}" class="hover-content__badge badge bg-primary">
                  View profile
                </a>
                <a href="/blog-details.html" class="hover-content__date">
                  Available from 10 April
                </a>
              </div>
              <a href="{{ route('nanny.profile', 1) }}" class="hover-content__title">
                Genie (33 years)
              </a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Live in/out
                  </a>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Indian
                  </a>
                  <a href="{{ route('nanny.profile', 1) }}">
                    Overstay
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End profile -->


        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-4.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
              </div>
              <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="/blog-details.html">
                    <i class="fa fa-user"></i>George Lee</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-heart"></i>21K</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-comments"></i>305</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-5.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
              </div>
              <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="/blog-details.html">
                    <i class="fa fa-user"></i>George Lee</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-heart"></i>21K</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-comments"></i>305</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-6.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
              </div>
              <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="/blog-details.html">
                    <i class="fa fa-user"></i>George Lee</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-heart"></i>21K</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-comments"></i>305</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-9 col-md-7 col-xs-10">
          <div class="blogs-post blogs-post--small">
            <img class="w-100" src="{{ asset('website/image/png/blog-post-7.png') }}" alt="">
            <div class="hover-content">
              <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
              </div>
              <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
              <ul class="hover-content__post-meta list-unstyled">
                <li>
                  <a href="/blog-details.html">
                    <i class="fa fa-user"></i>George Lee</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-heart"></i>21K</a>
                  <a href="/blog-details.html">
                    <i class="fa fa-comments"></i>305</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-7">
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
      </div>
    </div>
  </div>
@endsection

@section('footer')
    @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection