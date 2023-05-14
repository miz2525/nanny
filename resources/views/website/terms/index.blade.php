@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
  @include('layouts._include._header')
@endsection

@section('content')
<div class="terms-area bg-default-7">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-11">
        <div class="section-title text-center">
          <h2 class="section-title__heading">Terms &amp;
            Conditions</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xxl-8 col-xl-9 col-lg-10">
        <div class="terms-content">
          <p class="terms-content__text">By accessing and placing an order with
            UXTheme, you confirm that you are in agreement with and bound by the terms and conditions
            contained in the Terms Of Use outlined below. These terms apply to the entire website and
            any email or other type of communication between you and UXTheme. Under no circumstances
            shall UXTheme team be liable for any direct, indirect, special, incidental or consequential
            damages, including, but not limited to, loss of data or profit, arising out of the use, or
            the inability to use, the materials on this site, even if UXTheme team or an authorized
            representative has been advised of the possibility of such damages. If your use of materials
            from this site results in the need for servicing, repair or correction of equipment or data,
            you assume any costs thereof. UXTheme will not be responsible for any outcome that may occur
            during the course of usage of our resources.We reserve the rights to change prices and
            revise the resources usage policy in any moment.</p>
          <div class="terms-content__box">
            <h5 class="terms-content__heading">License</h5>
            <p class="terms-content__text">By purchasing or downloading
              resource (“item” or “file”) you are being granted a license to use these
              files for specific uses under certain conditions. Ownership remains with UXTheme,
              and you are required to abide by the following licensing terms.</p>
          </div>
          <div class="terms-content__box">
            <h5 class="terms-content__heading">Security</h5>
            <p class="terms-content__text">By purchasing or downloading resource (“item” or “file”) you are being granted a license to use these files for specific uses under certain conditions. Ownership remains with UXTheme, and you are required to abide by the following licensing terms.</p>
            <ul class="terms-list">
              <li>You have rights for royalty free use of our resources for any or all of your personal and commercial projects.</li>
              <li>You are not required to attribute or link to UXTheme in any of projects.</li>
              <li>We reserve the rights to change prices and revise the resources usage policy in any moment.</li>
            </ul>
          </div>
          <div class="terms-content__box">
            <h5 class="terms-content__heading">Embedded content from other websites</h5>
            <p class="terms-content__text">Articles on this site may
              include
              embedded content (e.g. videos, images, articles, etc.). Embedded content from other
              websites behaves in the exact same way as if the visitor has visited the other
              website.</p>
            <p class="terms-content__text"> These websites may collect
              data
              about you, use cookies, embed additional third-party tracking, and monitor your
              interaction with that embedded content, including tracking your interaction with the
              embedded content if you have an account and are logged in to that website.</p>
          </div>
          <div class="terms-content__box">
            <h5 class="terms-content__heading">Changes about terms</h5>
            <p class="terms-content__text">If we change our terms of
              use we
              will post those changes on this page. Registered users will be sent an email that
              outlines changes made to the terms of use.</p>
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