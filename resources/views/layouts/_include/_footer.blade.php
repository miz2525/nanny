<!-- Footer Area -->
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
              Nanny Genie aims to create happy families and happy nannies by providing a reliable and trustworthy platform.
              <br /><br />
              We understand the challenges of relying on social media groups and anonymous recommendations,
              which is why we offer a secure and transparent environment for finding the right nanny.
            </p>
            <ul class="footer-social-share footer-social-share--rounded mt-4">
              <li>
                <a target="_blank" href="https://www.facebook.com/Nanny-Genie-115112761575114/">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://www.instagram.com/nanny.genie/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://www.linkedin.com/company/nanny-genie/">
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
              {{-- <li>
                <a href="javascript:;">Our story</a>
              </li> --}}
              <li>
                <a href="{{ route('contact-us') }}">Contact</a>
              </li>
              <li>
                <a href="{{ route('terms') }}">Terms & conditions</a>
              </li>
              <li>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
              </li>
              <li>
                <a href="{{ route('ethical-considerations-for-hiring-a-nanny') }}">Ethical considerations for hiring a nanny</a>
              </li>
              <li>
                <a href="{{ route('eligibility-criteria-for-hiring-a-nanny') }}">Eligibility criteria for hiring a nanny</a>
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
                <span>
                    Address:
                    <br class="d-block">
                    The Binary by Omniyat (Marasi Dr)
                    <br class="d-block">
                    Business Bay - Dubai, UAE
                </span>
              </li>
              <li>
                <i class="fa fa-phone-alt text-electric-violet-2"></i>
                <div class="list-content">
                  <span class="d-block gr-text-hover-decoration-none"> Phone: </span>
                  <a href="tel:+971 52 982 8176">+971 52 982 8176</a>
                  {{-- <a href="te:+971 58 598 6373">+971 58 598 6373</a>
                  <br />
                  <a href="te:+971 50 922 0172">+971 50 922 0172</a> --}}
                </div>
              </li>
              {{-- <li>
                <i class="fa fa-envelope text-electric-violet-2"></i>
                  <span class="d-block gr-text-hover-decoration-none">
                      Email:
                  </span>
                  hello [at] nannygenie [dot] com
              </li> --}}
              <li>
                <i class="fa fa-envelope text-electric-violet-2"></i>
                  <span class="d-block gr-text-hover-decoration-none">
                      Email:
                      <br>
                      hello [at] nannygenie [dot] com
                  </span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </footer>
    <div class="copyright text-center border-top border-default-color-3">
      <p class="mb-0">
        © 2023 All Rights Reserved
      </p>
    </div>
  </div>
</div>
    <!--/ .Footer Area -->