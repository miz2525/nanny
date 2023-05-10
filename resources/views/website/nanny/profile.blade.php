@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - Nanny Profile @endsection

@section('styles') <!-- Style Section --> @endsection

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
          <h1 class="blog-title__heading">Katy P.</h1>
          <div class="blog__metainfo">
            <a href="javascript:;" class="blog__metainfo__author-name">Added 14 days ago</a>
          </div>
        </div>
        <div class="blog-content">
          <section class="intro">
            <div class="blog-content-video">
              <iframe class="blog-content-video__iframe" src="https://www.youtube.com/embed/F3isfEIMjxI" title="Video about nannie genie" width="756" height="567" webkitallowfullscreen mozallowfullscreen allow="fullscreen">               
              </iframe>
            </div>              

            <p class="blog-content__text">
                I am an energetic Nanny who can quickly create a bond with children whilst at the same time respecting the family’s privacy.
            </p>
            <p class="blog-content__text">
                I have a nurturing personality and I consider myself a loyal individual. I am committed to supporting children's physical, mental, and emotional development.
            </p>
            <p class="blog-content__text">
                In addition to this I am CPR certified, First Aid trained, and outstanding verifiable references. I am used to work independently but I can easily follow instructions and manage to keep a clean and tidy environment.
            </p>
          </section>

          <section class="work-background mb--40 mb-lg--65">
            <h2 class="section-title mb--40">Work background</h2>
            <p class="blog-content__text">
                Katy has experience with 2 different families, and we were able to get reference from 1 family.
            </p>
            <h3 class="section-subtitle mt--20">Nanny / House Help | Dubai | Lebanese Family 2 kids, age 3, infant</h3>
            <h4 class='section-subtitle-small'>January 2017 - Present</h4>
            <h4 class='section-subtitle-small'>Reference: checked</h4>
            
            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField1" aria-expanded="false" aria-controls="collapseField1">
              Key information
              </button>                  
              <div class="collapse" id="collapseField1">
                <div class="card card-body">
                  <ul class="skill-list">
                    <li>Creating a safe and stimulating environment for the children.</li>
                    <li>Bathing and dressing</li>
                    <li>Changing diapers and potty-training.</li>
                    <li>Children's laundry.</li>
                    <li>Planning meals, preparing food, and/or feeding the children.</li>
                    <li>Educational activities and crafts.</li>
                    <li>Reading to the children</li>
                    <li>Help with homework</li>
                    <li>Organizing bedrooms/toys</li>
                    <li>Maintaining logs for the parents</li>
                    <li>Light housekeeping</li>
                  </ul>

                  <h4 class="section-subtitle-small mt--20">Reference Check Done With Fouad And Diana Bachir</h4>
                  <p>
                      Kathy has been an invaluable household member, and we have been pleased with her care and attention to our children. She has always been punctual and reliable, and we have never had any concerns about her ability to care for our children.
                      <br /><br />
                      Kathy is a warm and nurturing caregiver who has built strong relationships with both of our children. She is always patient, understanding, and has a knack for finding creative ways to keep our kids engaged and entertained.
                      <br /><br />
                      We have also been impressed with Kathy's ability to manage caring for young children. She has always kept our children's schedules organized and on track while ensuring that they are well-fed, well-rested, and safe.
                      <br /><br />
                      In addition to her caregiver skills, Kathy has been an excellent role model for our children. She has always been kind, respectful, and compassionate, and she has helped our kids to develop essential life skills and values.
                      <br /><br />
                      Overall, we cannot recommend Kathy highly enough. She has been an incredible caregiver to our children, and we are deeply grateful for the years she has spent with our family.
                  </p>
                </div>
              </div>
            </div>                                

            <h3 class="section-subtitle mt--20">Nanny / House Help | Dubai | Lebanese Family 2 kids, age 3, infant</h3>
            <h4 class='section-subtitle-small'>January 2017 - Present</h4>                      
            <h4 class='section-subtitle-small'>Reference: not checked</h4>

            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField2" aria-expanded="false" aria-controls="collapseField2">
              Key information
              </button> 
              <div class="collapse" id="collapseField2">
                <div class="card card-body">
                  <ul class="skill-list">
                    <li>Creating a safe and stimulating environment for the children.</li>
                    <li>Bathing and dressing</li>
                    <li>Changing diapers and potty-training.</li>
                    <li>Children's laundry.</li>
                    <li>Planning meals, preparing food, and/or feeding the children.</li>
                    <li>Educational activities and crafts.</li>
                    <li>Reading to the children</li>
                    <li>Help with homework</li>
                    <li>Organizing bedrooms/toys</li>
                    <li>Maintaining logs for the parents</li>
                    <li>Light housekeeping</li>
                  </ul>

                  <h4 class="section-subtitle-small mt--20">Reference Check Not Completed - Family Not Reachable</h4>
                  <p>
                      In Kathy's case, her previous employer who moved to the UK was not reachable for a reference verification.
                      <br /><br />
                      The employer's contact information had changed, and Kathy was unable to locate or reach them.
                      <br /><br />
                      It's important to note that a lack of a reference verification from a previous employer does not necessarily reflect poorly on Kathy's work performance or character. There may be legitimate reasons why a reference verification cannot be obtained, and it's crucial to consider other factors such as Kathy's qualifications, experience, and personal references.
                      <br /><br />
                      This employment was only verified via visa and visa cancelation confirmation.
                  </p>
                </div>
              </div>
          </section>

          <section class="contact-form  mb-4">
            <div class="card card-jobs flex-row justify-content-between align-items-center flex-wrap text-center text-md-start">
              <div class="card-jobs__content">
                <h2 class="card-jobs__content__heading">Contact details</h2>
                <ul class="card-jobs__content__details list-unstyled d-flex align-items-center flex-wrap justify-content-center justify-md-content-start">
                  <li>
                    <a href="javascript:;">
                      <i class="fa fa-clock text-electric-violet-2"></i>
                      Contact details are only visible to paid customers
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-job__btn mx-auto mx-md-0 mt-2 mt-md-0">
                <button class="btn btn-primary shadow--primary-6 rounded-50 text-white d-block my-2" onclick="window.location = '/register'">Create account</button>
                <button onclick="window.location = '/login'" class="btn btn-outline-primary rounded-50 d-block my-2">Login</button>
              </div>
            </div>
          </section>

          <section class="psychometric-report mb--40 mb-lg--65">
            <h2 class="section-title mb--20">Psychometric Report</h2>
            <p class="blog-content__text mt--20">
                This psychometric report is designed to provide insight into Kathy's abilities and psychometric values in relation to her suitability for a nanny or childminder role. The report is based on a series of standardized psychometric tests that Kathy completed.
            </p>

            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField3" aria-expanded="false" aria-controls="collapseField3">
              Key Results
              </button>                  
              <div class="collapse" id="collapseField3">
                <div class="card card-body">
                  <ol class="skill-list">
                    <li>Verbal Reasoning: Kathy demonstrated excellent verbal reasoning skills, scoring in the 95th percentile. This suggests that she has a strong ability to understand, interpret and communicate oral information effectively.</li>
                    <li>Numerical Reasoning: Kathy scored in the 80th percentile for numerical reasoning, indicating that she has strong numerical skills and is able to solve basic arithmetic problems with ease.</li>
                    <li>Attention to Detail: Kathy demonstrated high attention to detail, scoring in the 90th percentile. This suggests that she can notice and identify small information accurately and consistently.</li>
                    <li>Interpersonal Skills: Kathy demonstrated strong interpersonal skills, scoring in the 85th percentile. This suggests that she is able to communicate effectively with others, build relationships and work well in a team.</li>
                    <li>Emotional Intelligence: Kathy scored in the 90th percentile for emotional intelligence, indicating that she has a strong ability to recognize, understand and manage her own emotions, as well as those of others.</li>
                    <li>Safety Awareness: Kathy demonstrated a high level of safety awareness, scoring in the 95th percentile. This suggests that she is able to identify potential hazards and take appropriate measures to ensure the safety of the children in her care.</li>
                  </ol>
                </div>
              </div>
            </div>                 

            <p class="blog-content__text">
                Kathy's psychometric results suggest she has the skills and attributes needed to be a successful nanny or childminder. Her strong verbal reasoning, attention to detail, interpersonal skills, emotional intelligence, and safety awareness are all highly relevant to the role.
            </p>
            <p class="blog-content__text">
                Based on her psychometric results and references, Kathy appears to be a highly competent and qualified nanny or childminder. Her skills and attributes suggest that she would be an excellent addition to any family seeking a caregiver for their children.
            </p>
          </section>

          <section class="personality-report mb--40 mb-lg--65">
            <h2 class="section-title mb--20">Personality Report</h2>
            <p class='blog-content__text'>
                Your Myers-Briggs personality type is ISFJ, or the "Defender" type. This personality type is known for its strong sense of responsibility and dedication to helping others, making it an ideal fit for a nanny role.
            </p>

            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField4" aria-expanded="false" aria-controls="collapseField4">
              Strengths
              </button>                  
              <div class="collapse" id="collapseField4">
                <div class="card card-body">
                  <ol class="skill-list">
                    <li>Highly dependable and responsible, always striving to meet expectations and fulfill commitments.</li>
                    <li>Warm and nurturing, with a natural ability to connect with children on an emotional level.</li>
                    <li>Detail-oriented and organized, able to keep track of schedules, activities, and essential information related to the children's care. Patient and calm, able to handle stress and challenging situations with grace.</li>
                    <li>Excellent listeners, able to communicate effectively with both children and parents.</li>
                  </ol>
                </div>
              </div>
            </div>  
            
            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField5" aria-expanded="false" aria-controls="collapseField5">
              Weaknesses
              </button>                  
              <div class="collapse" id="collapseField5">
                <div class="card card-body">
                  <ol class="skill-list">
                    <li>May be overly critical of themselves and others, leading to feelings of stress and anxiety.</li>
                    <li>May need help with adapting to sudden changes or unexpected situations.</li>
                    <li>May have difficulty asserting themselves or expressing their own needs and desires.</li>
                  </ol>
                </div>
              </div>
            </div>     
         
            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField6" aria-expanded="false" aria-controls="collapseField6">
              Opportunities when hiring an ISFJ
              </button>                  
              <div class="collapse" id="collapseField6">
                <div class="card card-body">
                  <ul class="details-list">
                    <li>Dependability: ISFJs are known for their strong sense of responsibility and dedication to fulfilling their commitments. As a result, parents can trust that their nanny will consistently show up on time and fulfill their duties with care and attention to detail. </li>
                    <li>Warmth and Nurturing: ISFJs naturally connect with others on an emotional level, making them well-suited for caring for children. Parents can feel confident that their children will be treated with kindness and empathy.</li>
                    <li>Organizational Skills: ISFJs tend to be detail-oriented and organized, which can be a valuable asset when it comes to managing schedules, activities, and important information related to children's care. Parents can feel reassured that their nanny will keep things running smoothly.</li>
                    <li>Patience and Calmness: ISFJs are known for their patience and ability to remain calm under stress. This can be particularly important when caring for young children who may be prone to tantrums or emotional outbursts. Parents can trust that their nanny will be able to handle challenging situations with grace.</li>
                    <li>Communication Skills: ISFJs are excellent listeners and tend to communicate effectively with others. This can be especially important when it comes to communication between the nanny and the parents and between the nanny and the children. Parents can feel confident that their nanny will be able to understand and respond to their needs and concerns.</li>
                  </ul>
                </div>
              </div>
            </div>      
            
            <div class="collapse-content">                  
              <button class="btn collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField7" aria-expanded="false" aria-controls="collapseField7">
              While there are many benefits to hiring an ISFJ as a nanny, there are also a few potential risks that parents should be aware of:
              </button>                  
              <div class="collapse" id="collapseField7">
                <div class="card card-body">
                  <ol class="skill-list">
                    <li>Difficulty with Flexibility: ISFJs tend to be very structured and prefer routine, making adapting to sudden changes or unexpected situations challenging. This could be problematic if, for example, the parents need to change the nanny's schedule at the last minute.</li>
                    <li>Overly Critical of Themselves and Others: ISFJs tend to be highly self-critical, which could lead to stress if not managed properly. Additionally, they may have high expectations of others, including the children they care for and the parents who employ them.</li>
                  </ol>
                </div>
              </div>
            </div>  

            <h2 class="section-title recommendation-title mb--20">Recommendation</h2>
            <p class="mt--20">
                This profile is highly suitable for a family with a predictable routine or expectations of last minute changes and adaptability should be discussed during the interview.
            </p>
          </section>

          <section class="post-tags-section">
            <h5 class="post-tags-section__title mb-0">
              Abilities:
            </h5>
            <ul class="post-tags list-unstyled mt-3">
              <li><a href="javascript:;">Drivings</a></li>
              <li><a href="javascript:;">support2</a></li>
              <li><a href="javascript:;">Marketing</a></li>
              <li><a href="javascript:;">Job</a></li>
              <li><a href="javascript:;">Freelance</a></li>
            </ul>
          </section>

          <section class="post-tags-section">
            <h5 class="post-tags-section__title mb-0">
              Things I enjoy:
            </h5>
            <ul class="post-tags list-unstyled mt-3">
              <li><a href="javascript:;">Driving</a></li>
              <li><a href="javascript:;">support2</a></li>
              <li><a href="javascript:;">Marketing</a></li>
              <li><a href="javascript:;">Job</a></li>
              <li><a href="javascript:;">Freelance</a></li>
            </ul>
          </section>

          <section class="post-social-share d-flex align-items-center flex-wrap">
            <h5 class="post-social-share__title mb-0">Share:</h5>
            <ul class="social-share list-unstyled mb-0">
              <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
            </ul>
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
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">Age</h4>
                    <span>34 years</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">Experience</h4>
                    <span>7 years</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">Nationality</h4>
                    <span>Filipino</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">City</h4>
                    <span>Dubai</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">Driving license</h4>
                    <span>No</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center justify-content-between flex-wrap" href="javascript:;">
                    <h4 class="mb-0">Ready to start</h4>
                    <span>4 April</span>
                  </a>
                </li>
              </ul>
            </div>
          </section>

          <section class="widget">
            <h3 class="widget__title">Contact details</h3>
            <p class="">Contact details are only visible to paid customers</p>
            <div class="welcome-btn-group--l3">
              <a class="btn btn--lg-2 btn-primary shadow--primary text-white rounded-50 me-2 me-sm-3 aos-init aos-animate" href="{{ route('register') }}" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                Create an account
              </a>
            </div>
            <p class="welcome-content__terms-text">
              Existing customer?
              <a class="btn btn-link" href="{{ route('login') }}">Click here to login
              </a>
            </p>
          </section>

          <!-- Single Widgets -->
          <section class="widget">
            <h3 class="widget__title">In-depth profile</h3>
            <ul class="widget__recent-post list-unstyled mb-0 pb-0">
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Open to work</h4>
                <p class="widget__recent-post__date">Live in / Live out</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Salary expectation</h4>
                <p class="widget__recent-post__date">
                  3,500 AED (Live in)
                  <br />
                  3,800 AED (Live out)
                </p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Languages</h4>
                <p class="widget__recent-post__date">Filipino (native), English (advanced)</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Visa status</h4>
                <p class="widget__recent-post__date">Employment visa</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Education level</h4>
                <p class="widget__recent-post__date">High school</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Ok with Pet Friendly homes</h4>
                <p class="widget__recent-post__date">Yes</p>
              </li>
              <li class="widget__recent-post__single">
                <h4 class="widget__recent-post__title">Age groups experience</h4>
                <p class="widget__recent-post__date">newborn, toddlers, preschoolers, twins, teenagers</p>
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