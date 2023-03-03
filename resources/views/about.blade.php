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
      <section class="bg-dark position-relative py-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .02);"></div>
        <div class="container dark-mode position-relative zindex-2 py-5 mb-4 mb-sm-5">
          <div class="row pb-5 mb-2 mb-sm-0 mb-lg-3">
            <div class="col-lg-10 col-xl-9">
              <!-- Breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
              </nav>
              <h1 class="display-2 pb-2 pb-sm-3">We Build People-centered soluations</h1>
              <ul class="list-unstyled d-flex flex-wrap mb-0">
                <li class="d-flex py-1 me-4"><i class="ai-check-alt text-primary lead me-2"></i>Forecasting and recommendations</li>
                <li class="d-flex py-1 me-4"><i class="ai-check-alt text-primary lead me-2"></i>Identification of patterns, analysis</li>
                <li class="d-flex py-1"><i class="ai-check-alt text-primary lead me-2"></i>Segmentation by various methods</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- About-->
      <section class="container position-relative zindex-3" style="margin-top: -135px;">
        <div class="rounded-5 overflow-hidden"> 
          <div class="jarallax ratio ratio-16x9" data-jarallax data-speed="0.6">
            <div class="jarallax-img" style="background-image: url({{ asset('assets/img/about.jpg') }});"></div>
          </div>
        </div>
        <div class="row pt-5 mt-n2 mt-sm-0 mt-md-2 mt-lg-4 mt-xl-5">
          <div class="col-md-6 col-lg-5">
            <div class="fs-sm text-uppercase mb-3">What we do</div>
            <h2 class="display-6">We are a team of developer who want to make the world a better place</h2>
          </div>
          <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
            <p class="fs-xl">Morbi et massa fames ac scelerisque sit commodo dignissim <strong>faucibus quisque proin</strong> lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
            <p class="fs-xl">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur. <strong>Vel magna sit aliquet viverra morbi massa mattis urna,</strong> feugiat egestas tincidunt ipsum diam quam massa amet odio nisi duis dolor.</p>
            <p class="fs-xl mb-0">Ac facilisis eros sem faucibus aliquet venenatis amet fermentum nisi. Mauris consectetur sem malesuada. viverra a non sapien odio id risus volutpat at.</p>
          </div>
        </div>
      </section>
      <!-- Approach-->
      <section class="pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
          <div class="fs-sm text-uppercase mb-3">Our Mission</div>
          <h2 class="display-6 pb-3 mb-lg-4">Mission and Objective </h2>
        </div>
      </section>
      <!-- How we work (Steps)-->
      <section class="container pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
          <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
            <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto" style="max-width: 530px; background-image: url({{ asset('assets/img/about.jpg') }});">
              <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
              <div class="dark-mode position-relative zindex-2 p-4">
                <div class="text-center mx-auto" style="max-width: 275px;"><span class="d-block fs-sm text-uppercase mb-3">How we work</span>
                  <h2 class="display-6 mb-0">The key to success</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="ps-md-4 ps-xl-0">
              <div class="steps steps-hoverable">
                <div class="step py-3 py-xl-4">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h3 class="h5 pb-1 mb-2">Formulation of the problem</h3>
                    <p class="mb-0">Find aute irure dolor in reprehenderi voluptate velit esse cillum dolore eu fugiat nulla pariatur am luctus.</p>
                  </div>
                </div>
                <div class="step py-3 py-xl-4">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h3 class="h5 pb-1 mb-2">Assessment of the current state</h3>
                    <p class="mb-0">Risus quam quis at euismod vitae dui elementu eu in diam malesuada mattis ut urna integer erat nisi nibh.</p>
                  </div>
                </div>
                <div class="step py-3 py-xl-4">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h3 class="h5 pb-1 mb-2">Business plan creation</h3>
                    <p class="mb-0">A sagittis morbi massa venenatis, egestas viverra ac elit nibh tellus nisi in nec tellus mauris feugiat gravida.</p>
                  </div>
                </div>
                <div class="step py-3 py-xl-4">
                  <div class="step-number">
                    <div class="step-number-inner">04</div>
                  </div>
                  <div class="step-body">
                    <h3 class="h5 pb-1 mb-2">Strategy implementation</h3>
                    <p class="mb-0">Elementum purus, nisl ipsum sit. Amet sit praesent proin sit cras. Leo sed praesent nunc  vel nec risus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Team-->
      <section class="pt-5 mt-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-3 pt-sm-4 pt-lg-5 mt-xl-2 mt-xxl-3">
          <div class="fs-sm text-uppercase mb-3">Our team</div>
          <h2 class="display-6 pb-3 mb-lg-4">Team of professionals</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <!-- Item-->
            <div class="col">
              <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="{{ asset('assets/img/user.png') }}" alt="Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                  <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                    <h3 class="h5 mb-1">Jane Cooper</h3>
                    <p class="mb-3">Head of PR department</p>
                    <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col">
              <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="{{ asset('assets/img/user.png') }}" alt="Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                  <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                    <h3 class="h5 mb-1">Guy Hawkins</h3>
                    <p class="mb-3">Head of marketing</p>
                    <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-twitter rounded-circle mx-2" href="#"><i class="ai-twitter"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="col">
              <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="{{ asset('assets/img/user.png') }}" alt="Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                  <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                    <h3 class="h5 mb-1">Martha Winter</h3>
                    <p class="mb-3">Data analyst</p>
                    <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section class="pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
          <div class="fs-sm text-uppercase mb-3">Achievements</div>
          <h2 class="display-6 pb-3 mb-lg-4">Our Achievements</h2>
          <div class="card border-0 bg-secondary overflow-hidden">
            <div class="card-body position-relative zindex-2 px-lg-0 py-lg-5">
              <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                  <!-- Binded items-->
                  <div class="binded-content">
                    <!-- Item-->
                    <div class="binded-item active" id="author1"><img class="d-block rounded-circle mb-3" src="{{ asset('assets/img/user.png') }}" width="86" alt="Lilianna Bocouse">
                      <h4 class="mb-0">Lilianna Bocouse</h4>
                      <p class="fs-lg text-muted mb-0">Head of Marketing</p>
                    </div>
                    <!-- Item-->
                    <div class="binded-item" id="author2"><img class="d-block rounded-circle mb-3" src="{{ asset('assets/img/user.png') }}" width="86" alt="Darell Steward">
                      <h4 class="mb-0">Darell Steward</h4>
                      <p class="fs-lg text-muted mb-0">Project Manager</p>
                    </div>
                    <!-- Item-->
                    <div class="binded-item" id="author3"><img class="d-block rounded-circle mb-3" src="{{ asset('assets/img/user.png') }}" width="86" alt="Annette Black">
                      <h4 class="mb-0">Annette Black</h4>
                      <p class="fs-lg text-muted mb-0">Lead Designer</p>
                    </div>
                    <!-- Item-->
                    <div class="binded-item" id="author4"><img class="d-block rounded-circle mb-3" src="{{ asset('assets/img/user.png') }}" width="86" alt="Ralph Edwards">
                      <h4 class="mb-0">Ralph Edwards</h4>
                      <p class="fs-lg text-muted mb-0">CEO, Co-Founder</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 col-lg-7">
                  <!-- Swiper slider-->
                  <div class="swiper" data-swiper-options="{
                  &quot;spaceBetween&quot;: 40,
                  &quot;loop&quot;: true,
                  &quot;autoHeight&quot;: true,
                  &quot;bindedContent&quot;: true,
                  &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;#testimonials-bullets&quot;,
                    &quot;clickable&quot;: true
                  }
                }">
                    <div class="swiper-wrapper">
                      <!-- Item-->
                      <div class="swiper-slide" data-swiper-binded="#author1">
                        <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                      </div>
                      <!-- Item-->
                      <div class="swiper-slide" data-swiper-binded="#author2">
                        <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut ante.”</p>
                      </div>
                      <!-- Item-->
                      <div class="swiper-slide" data-swiper-binded="#author3">
                        <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                      </div>
                      <!-- Item-->
                      <div class="swiper-slide" data-swiper-binded="#author4">
                        <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra, quis semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci. Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus placerat fringilla.”</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper pagination (bullets)-->
          <div class="swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3" id="testimonials-bullets"></div>
        </div>
      </section>


    </main>
    <!-- Footer-->
    @include('components/footer')