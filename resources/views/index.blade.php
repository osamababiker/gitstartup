@include('components/head')
  <!-- Body--> 
  <body>
    <!-- Page loading spinner-->
    @include('components/loading')
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      @include('components/navbar')
      <!-- Page content-->
      <!-- Hero-->
      <section class="container-fluid py-5 mt-4 px-sm-4 px-md-5">
        <div class="dark-mode bg-dark rounded-5 position-relative overflow-hidden py-5 px-3 px-sm-4 px-xl-5 mt-2 mx-md-n3 mx-lg-auto" style="max-width: 1660px;">
          <div class="jarallax position-absolute top-0 start-0 w-100 h-100" data-jarallax data-speed="0.6">
            <div class="jarallax-img position-absolute w-100" style="background-image: url({{ asset('assets/img/pexels-bg.jpg') }});"></div>
          </div>
          <div class="bg-black position-absolute top-0 start-0 w-100 h-100" style="opacity: 60%;"></div>
          <div class="container position-relative zindex-2 pt-xl-4 pt-xxl-5 pb-sm-2">
            <div class="row pt-md-3 pt-lg-5">
              <div class="col-lg-6 col-xxl-5 pb-lg-5 mb-xl-5">
                <h1 class="display-3 text-center text-lg-start mb-xxl-5">Let's make the world a better place </h1>
              </div>
              <div class="col-lg-5 col-xl-4 offset-lg-1 offset-xxl-2 d-flex flex-column pt-2 pt-md-4">
                <p class="fs-xl text-center text-lg-start pb-2 pb-md-0 mb-4 mb-md-5">We use technology, innovations and business concepts to build solutions for real-world problems.</p>
                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start pb-3 pb-sm-5">
                  <a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto me-sm-3 me-xl-4 mb-2 mb-sm-0" href="#">Let's partner</a>
                  <a class="btn btn-lg btn-link text-white w-100 w-sm-auto px-2" href="portfolio-list-v2.html">View Our Projects<i class="ai-arrow-right ms-2"></i></a></div>
                <ul class="list-inline d-xl-flex text-center text-lg-start mt-auto mb-0 mb-sm-2">
                  <li class="d-inline-flex align-items-center text-nowrap pt-1"><i class="ai-heart-filled text-secondary  fs-xl me-2"></i> People-centered innovation </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services (Carousel on screns < 992px)-->
      <section class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5 mt-xxl-4 pb-lg-2 pb-xl-4 pb-xxl-5">
        <h2 class="h1 text-center"> What We Do </h2>
        <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center"> We build software and business that solve real-world problems </p>
        <div class="swiper" data-swiper-options="
          {
            &quot;spaceBetween&quot;: 24,
            &quot;pagination&quot;: {
              &quot;el&quot;: &quot;.swiper-pagination&quot;,
              &quot;clickable&quot;: true
            },
            &quot;breakpoints&quot;: {
              &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
              &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }
            }
          }">
          <div class="swiper-wrapper">
            <!-- Item-->
            <div class="swiper-slide h-auto"><a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                <div class="card-body">
                  <i class="ai-code-curly text-primary display-6 mb-3"></i>
                  <h3>Software as Service</h3>
                  <p class="card-text">we build high-quality ready to use software solutions in the field of education and job creation.</p>
                </div>
                <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                  <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link"><i class="ai-arrow-right"></i></div>
                </div></a></div>
            <!-- Item-->
            <div class="swiper-slide h-auto"><a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                <div class="card-body">
                  <i class="ai-headphone text-primary display-6 mb-3"></i>
                  <h3>Technical Support</h3>
                  <p class="card-text">We provide technical support for any startups that operate in the field of education or job creation.</p>
                </div>
                <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                  <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link"><i class="ai-arrow-right"></i></div>
                </div></a></div>
            <!-- Item-->
            <div class="swiper-slide h-auto"><a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                <div class="card-body">
                  <i class="ai-cafe text-primary display-6 mb-3"></i>
                  <h3> Business Development </h3>
                  <p class="card-text">Our development team are working hard to build a business that has real-world impact.</p>
                </div>
                <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                  <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link"><i class="ai-arrow-right"></i></div>
                </div></a></div>
          </div>
          <!-- Pagination (bullets)-->
          <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
        </div>
      </section>

      <!-- Industries (Binded accordion)-->
      <section class="container py-5 mt-2 mt-sm-3 mt-md-4">
        <h2 class="h1 text-center pt-lg-3">The Impact We want to make</h2>
        <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center">We want to have an impact in these fields </p>
        <div class="row align-items-lg-center">
          <!-- Accordion-->
          <div class="col-md-6 col-lg-5 pb-2 pb-lg-0 mb-4 mb-md-0">
            <div class="accordion accordion-alt" id="industries">
              <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                <h3 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-binded-content="#education-img" data-bs-target="#education" aria-expanded="true" aria-controls="education">Free Height Quality Education</button>
                </h3>
                <div class="accordion-collapse collapse show" id="education" data-bs-parent="#industries">
                  <div class="accordion-body">We believe everyone should have access to free high-quality education regardless there gender or origin .</div>
                </div>
              </div>
              <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-binded-content="#jobs-img" data-bs-target="#jobs" aria-expanded="false" aria-controls="jobs">Zero Poverty & Job Creation </button>
                </h3>
                <div class="accordion-collapse collapse" id="jobs" data-bs-parent="#industries">
                  <div class="accordion-body">We believe everyone should be able to make living and have at least the minimum amount of income.</div>
                </div>
              </div>
            </div>
          </div>
          <!-- Binded images-->
          <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
            <div class="ps-lg-4 ps-xl-0">
              <div class="binded-content">
                <div class="binded-item active" id="education-img">
                  <img class="rounded-5" src="{{ asset('assets/img/industries/01.jpg') }}" alt="Free education ">
                </div>
                <div class="binded-item" id="jobs-img">
                  <img class="rounded-5" src="{{ asset('assets/img/industries/02.jpg') }}" alt="Job creation">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Skills (Carousel)-->
      <section class="pt-2 py-md-4 py-lg-5 mt-2 mt-xl-4 mt-xxl-5">
        <div class="container d-flex align-items-center justify-content-between pb-4 mb-sm-2 mb-md-3">
          <h2 class="h1 mb-0">Case Studies</h2>
          <div class="d-flex">
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle" type="button" id="prev-skill"><i class="ai-arrow-left"></i></button>
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="next-skill"><i class="ai-arrow-right"></i></button>
          </div>
        </div>
        <!-- Swiper slider-->
        <div class="container-start">
          <div class="swiper" data-swiper-options="{
              &quot;slidesPerView&quot;: &quot;auto&quot;,
              &quot;spaceBetween&quot;: 24,
              &quot;loop&quot;: true,
              &quot;navigation&quot;: {
                &quot;prevEl&quot;: &quot;#prev-skill&quot;,
                &quot;nextEl&quot;: &quot;#next-skill&quot;
              }
            }">
            <div class="swiper-wrapper text-center">
              <!-- Item-->
              <div class="swiper-slide w-sm-auto h-auto">
                <div class="card border-0 bg-secondary h-100">
                  <div class="card-body mx-auto" style="max-width: 416px;">
                    <p class="fs-lg mb-1">"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tincidunt imperdiet hendrerit. Fusce tortor turpis, facilisis ac efficitur eget, aliquet ut odio. Curabitur in vestibulum tellus."</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Portfolio-->
      <section class="container pt-5 pb-sm-3 mt-2 mt-sm-4 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">
        <h2 class="h1 text-center">Projects we work on</h2>
        <p class="pb-4 mb-md-2 mb-lg-3 text-center">here is a list of the projects that we work on </p>
        <!-- Item-->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
          <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
              <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
              <img class="d-block position-relative zindex-2 mx-auto" src="{{ asset('assets/img/06.png') }}" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
          <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
            <div class="ps-md-3 ps-lg-0">
              <h2 class="h4">Development of an application for a national bank</h2>
              <p class="fs-sm pb-3 pb-lg-4 mb-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo dignissim.</p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Become Partner</a>
            </div>
          </div>
        </div>

      </section>
      <!-- Benefits-->
      @include('components/contact')
    </main>
    
    @include('components/footer')