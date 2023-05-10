<div class="footer-area footer-inner-1 position-relative bg-default-3">
  <div class="container">
    <footer class="footer-top">
      <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="footer-widgets footer-widgets--l7">
            <!-- Brand Logo-->
            <div class="brand-logo mt-1">
              <a href="{{ route('home') }}">
                <!-- light version logo (logo must be black)-->
                <img src="{{ asset('website/image/png/logo-dark.png') }}" alt="" class="light-version-logo">
                <!-- Dark version logo (logo must be White)-->
                <img src="{{ asset('website/image/png/logo-white.png') }}" alt="" class="dark-version-logo">
              </a>
            </div>
            <p class="footer-widgets__text mt-5">
              We’re the digital agency to create<br class="d-none d-xl-block"> your digital presence for better<br class="d-none d-xl-block"> conversion and sales.</p>
            <ul class="footer-social-share footer-social-share--rounded mt-4">
              <li>
                <a href="javascript:;">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="footer-widgets footer-widgets--l7 mb-10 mb-md-0">
            <h4 class="footer-widgets__title">Nanny Genie</h4>
            <ul class="footer-widgets__list">
              <li>
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('all-nannies') }}">All nannies</a>
              </li>
              <li>
                <a href="{{ route('pricing') }}">Pricing</a>
              </li>
              <li>
                <a href="javascript:;">Our story</a>
              </li>
              <li>
                <a href="{{ route('contact-us') }}">Contact</a>
              </li>
              <li>
                <a href="javascript:;">Terms & conditions</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="footer-widgets footer-widgets--l7">
            <h4 class="footer-widgets__title">Contact Details</h4>
            <ul class="footer-widgets__list footer-widgets--address">
              <li>
                <i class="fa fa-map-marker-alt text-electric-violet-2"></i>
                <span>Address: <br class="d-block">
                                    4401 Waldeck Street,<br class="d-block">
                                    Grapevine Nashville, Tx 76051</span>
              </li>
              <li>
                <i class="fa fa-phone-alt text-electric-violet-2"></i>
                <div class="list-content">
                  <span class="d-block gr-text-hover-decoration-none"> Phone: </span>
                  <a href="javascript:;">+99 (0) 101 0000 888</a>
                </div>
              </li>
              <li>
                <i class="fa fa-envelope text-electric-violet-2"></i>
                <a class="heading-default-color gr-text-hover-underline text-break" href="mailto:info@medcartel.com">
                  <span class="d-block gr-text-hover-decoration-none"> Phone:
                                    </span>info@medcartel.com</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </footer>
    <div class="copyright text-center border-top border-default-color-3">
      <p class="mb-0">
        © {{ date('Y') }} All Rights Reserved
      </p>
    </div>
  </div>
</div>
