<div class="sidebar-area">

    <!-- Single Widgets -->
    <div class="widget">
      <h3 class="widget__title">Latest nannies</h3>
      <ul class="widget__recent-post list-unstyled mb-0 pb-0">
        @foreach ($nannies as $nanny)
            <li class="widget__recent-post__single">
                <a href="{{ route('nanny.profile', $nanny->id) }}">
                <h4 class="widget__recent-post__title">
                    {{ $nanny->short_name }} ({{calculateAge($nanny->date_of_birth)}} years)
                </h4>
                <p class="widget__recent-post__date">
                    From {{$nanny->country->nicename}}
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    Availalbe from {{date('d M', strtotime($nanny->start_work))}}
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    Experienced with {{str_replace(',', ', ', $nanny->age_group_experience)}}
                </p>
                </a>
            </li>
        @endforeach
        
        {{-- <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with twins, toddlers
              </p>
            </a>
        </li>
        <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with teenagers
              </p>
            </a>
        </li>
        <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with preschoolers
              </p>
            </a>
        </li>
        <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with newborn, twins, toddlers
              </p>
            </a>
        </li>
        <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with newborn, twins, toddlers
              </p>
            </a>
        </li>
        <li class="widget__recent-post__single">
            <a href="#">
              <h4 class="widget__recent-post__title">
                  Lony Q. (42 years)
              </h4>
              <p class="widget__recent-post__date">
                  From Philippines
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Availalbe from 15 June
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                  Experienced with newborn, twins, toddlers
              </p>
            </a>
        </li> --}}
      </ul>
    </div>
    <!--/ .Single Widgets -->


    <!-- Single Widgets -->
    <div class="sidebar__ads">
      <a href="{{ route('all-nannies') }}"><img class="w-100" src="{{ asset('website/image/nanny-genie-uae.jpg') }}" alt="nanny genie uae"></a>
    </div>
  </div>