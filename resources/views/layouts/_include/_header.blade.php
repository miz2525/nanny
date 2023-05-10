<header class="site-header site-header--menu-left dynamic-sticky-bg px-3 site-header--absolute site-header--sticky">
  <div class="container-fluid">
    <nav class="navbar site-navbar">
      <!-- Brand Logo-->
      <div class="brand-logo">
        <a href="{{ route('home') }}">
          <!-- light version logo (logo must be black)-->
          <img src="{{ asset('website/image/png/logo-dark.png') }}" alt="" class="light-version-logo">
          <!-- Dark version logo (logo must be White)-->
          <img src="{{ asset('website/image/png/logo-white.png') }}" alt="" class="dark-version-logo">
        </a>
      </div>
      <div class="menu-block-wrapper  ms-lg-7">
        <div class="menu-overlay"></div>
        <nav class="menu-block" id="append-menu-header">
          <div class="mobile-menu-head">
            <div class="go-back">
              <i class="fa fa-angle-left"></i>
            </div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="site-menu-main">
            <li class="nav-item nav-item-has-children">
              <a href="{{ route('home') }}" class="nav-link-item drop-trigger">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('all-nannies') }}" class="nav-link-item drop-trigger">
                All nannies
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('pricing') }}" class="nav-link-item drop-trigger">
                Pricing
              </a>
            </li>
            <li class="nav-item nav-item-has-children">
              <a href="#" class="nav-link-item drop-trigger">About us <i class="fas fa-angle-down"></i>
              </a>
              <ul class="sub-menu" id="submenu-2">
                <li class="sub-menu--item">
                  <a href="javascript:;">
                    About Us
                  </a>
                </li>
                <li class="sub-menu--item">
                  <a href="{{ route('contact-us') }}" data-menu-get="h3" class="drop-trigger">
                    Contact
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      @if (Auth::check())
        <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center">
          <a class="btn btn-header-btns btn-link-water btn--medium-2 h-45 text-shark rounded-5 ms-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      @else
        <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center">
          <a class="btn-link heading-default-color-2 me-4" href="{{ route('login') }}">
            Login
          </a>
          <a class="btn btn-header-btns btn-link-water btn--medium-2 h-45 text-shark rounded-5 ms-1" href="{{ route('register') }}">
            Get Started
          </a>
        </div>
      @endif
      
      <!-- mobile menu trigger -->
      <div class="mobile-menu-trigger">
        <span></span>
      </div>
      <!--/.Mobile Menu Hamburger Ends-->
    </nav>
  </div>
</header>
