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
      <div class="container py-5 mt-5 mb-2 mb-sm-3 mb-lg-4 mb-xxl-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
          <ol class="pt-lg-2 pb-lg-3 pb-1 breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="portfolio-list-v1.html">Projects</a></li>
            <li class="breadcrumb-item active" aria-current="page">Single project</li>
          </ol>
        </nav>
        <!-- Page title-->
        <div class="row">
          <div class="col-lg-11 col-xl-10"><img class="d-block d-dark-mode-none mb-2 mb-sm-3" src="assets/img/portfolio/brands/vintage-dark.svg" alt="Vintage"><img class="d-none d-dark-mode-block mb-2 mb-sm-3" src="assets/img/portfolio/brands/vintage-light.svg" alt="Vintage">
            <h1 class="display-2 pb-3 pb-md-4 pb-lg-5">Business strategy for a brand of vintage bags</h1>
          </div>
        </div>
        <!-- Main image--><img class="d-block rounded-5 mb-3 mb-xl-4 mb-xxl-5" src="assets/img/portfolio/single/v1/01.jpg" alt="Image">
        <!-- Project overview-->
        <div class="border-bottom py-4 py-lg-5">
          <div class="row">
            <div class="col-lg-11 col-xl-10">
              <p class="text-dark lead mb-2 mb-lg-3-0 mb-xl-4 mb-xxl-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 g-sm-4 pt-4 pt-xxl-5 mb-2 mb-sm-3 pb-xxl-4">
                <div class="col">
                  <h2 class="fs-base fw-normal text-muted mb-2 mb-sm-3">Company</h2>
                  <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">Vintage</li>
                    <li class="d-block py-1">12-18 employees</li>
                    <li class="d-block py-1">Dublin, Ireland</li>
                  </ul>
                </div>
                <div class="col">
                  <h2 class="fs-base fw-normal text-muted mb-2 mb-sm-3">Indusrty</h2>
                  <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">E-commerce</li>
                  </ul>
                </div>
                <div class="col">
                  <h2 class="fs-base fw-normal text-muted mb-2 mb-sm-3">Services</h2>
                  <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">Email marketing</li>
                    <li class="d-block py-1">Content marketing</li>
                    <li class="d-block py-1">Social networks</li>
                  </ul>
                </div>
                <div class="col">
                  <h2 class="fs-base fw-normal text-muted mb-2 mb-sm-3">Time spent</h2>
                  <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">2021, 3 months</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Project description-->
        <div class="border-bottom py-md-2 py-lg-3 py-xl-4 py-xxl-5">
          <div class="row my-5">
            <div class="col-md-10 col-lg-8 col-xl-7">
              <h2 class="h1 pb-2">About the client</h2>
              <p class="fs-lg">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur. Vel magna sit aliquet viverra morbi massa mattis urna, feugiat egestas tincidunt ipsum diam quam massa amet odio nisi duis dolor. Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
              <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The challenge</h2>
              <p class="fs-lg">Sit diam nunc, et pellentesque ornare elit, ut. Interdum feugiat id ut egestas tellus congue faucibus habitant semper nunc et etiam ultrices id nisi urna amet, odio mauris risus nam aliquam pharetra amet nunc, enim aliquet egestas purus penatibus ac, elit ultricies proin adipiscing suspendisse sit proin.</p>
              <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The solution</h2>
              <p class="fs-lg mb-0">Est enim mollis morbi vulputate egestas commodo vitae quis sed sit ultrices nulla habitant sit faucibus orci. Eu etiam ipsum porttitor morbi urna eget aliquet aenean tristique amet tempus, vestibulum vel montes, pellentesque sit. Cursus nulla viverra elit accumsan, vitae. Phasellus sed hac at pharetra urna. Imperdiet egestas ac eget porttitor ultrices morbi ornare. Libero, lectus eget adipiscing odio ornare non maecenas non vitae libero, at feugiat urna, risus augue fringilla. Venenatis quam.</p>
            </div>
          </div>
        </div>
        <!-- Results-->
        <div class="row mt-5 pt-sm-2 pt-lg-3 pt-xl-4 pt-xxl-5">
          <div class="col-md-10 col-lg-8 col-xl-7 pt-md-3 pt-lg-4">
            <h2 class="pb-sm-2">Results</h2>
            <p class="fs-lg mb-2 mb-sm-3 mb-lg-2">Facilisi morbi habitant massa euismod. Vehicula viverra vestibulum at quis orci morbi nullam in. Etiam sit in platea faucibus venenatis. Morbi cursus vehicula nam pellentesque lacus neque aenean non. Feugiat feugiat nullam feugiat cras volutpat.</p>
          </div>
        </div>
        <div class="row pt-4 pt-lg-5">
          <div class="col-md-9 col-lg-7 col-xl-6">
            <div class="row row-cols-1 row-cols-sm-3">
              <div class="col mb-4 mb-sm-0">
                <div class="h1 mb-0">1200+</div>
                <p class="fs-sm mb-0">leads for $ 2.1</p>
              </div>
              <div class="col mb-4 mb-sm-0">
                <div class="h1 mb-0">130%</div>
                <p class="fs-sm mb-0">revenue increase</p>
              </div>
              <div class="col mb-4 mb-sm-0">
                <div class="h1 mb-0">124+</div>
                <p class="fs-sm mb-0">new posts</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial-->
        <div class="py-5 my-lg-2 my-xl-4 my-xxl-5">
          <h2 class="h1 pb-2 pb-lg-4 pt-sm-4 pt-lg-5 mt-n3 mt-sm-0">Achievements</h2>
          <div class="card border-0 bg-secondary mb-2 mb-sm-3 mb-md-4 mb-lg-5">
            <div class="card-body px-lg-0 py-lg-5">
              <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0"><img class="d-block rounded-circle mb-3" src="assets/img/avatar/21.jpg" width="86" alt="Lilian Bocouse">
                  <h4 class="mb-0">Lilian Bocouse</h4>
                  <p class="fs-lg text-muted mb-0">Head of Marketing</p>
                </div>
                <div class="col-md-8 col-lg-7">
                  <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- More projects carousel-->
        <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
          <h2 class="h1 mb-0">More Projects</h2>
          <div class="d-flex ms-auto">
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="prev-project"><i class="ai-arrow-left"></i></button>
            <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="next-project"><i class="ai-arrow-right"></i></button>
          </div>
        </div>
        <div class="swiper pb-md-4 pb-xl-5" data-swiper-options="{
            &quot;spaceBetween&quot;: 24,
            &quot;loop&quot;: true,
            &quot;navigation&quot;: {
              &quot;prevEl&quot;: &quot;#prev-project&quot;,
              &quot;nextEl&quot;: &quot;#next-project&quot;
            },
            &quot;breakpoints&quot;: {
              &quot;576&quot;: { &quot;slidesPerView&quot;: 2 }
            }
          }">
          <div class="swiper-wrapper">
            <!-- Item-->
            <div class="swiper-slide"><a class="d-block position-relative" href="#">
                <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/06.png" width="636" alt="Image"></a>
              <div class="pt-4 mt-sm-2">
                <h4><a href="#">Development of an application for a national bank</a></h4>
                <p class="mb-0">Non purus odio venenatis velit sed tellus sed ultrices neque adipiscing sit turpis lacus, aenean sed luctus adipiscing ut orci molestie arcu, sapien sed.</p>
              </div>
            </div>
            <!-- Item-->
            <div class="swiper-slide"><a class="d-block position-relative" href="#">
                <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/08.png" width="636" alt="Image"></a>
              <div class="pt-4 mt-sm-2">
                <h4><a href="#">Landing page for a marketing agency Boost</a></h4>
                <p class="mb-0">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur vel magna sit aliquet viverra morbi massa mattis urna, feugiat egestas tincidunt.</p>
              </div>
            </div>
            <!-- Item-->
            <div class="swiper-slide"><a class="d-block position-relative" href="#">
                <div class="rounded-5 position-absolute top-0 start-0 w-100 h-100" style="background-color: #d7e4f4"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/09.png" width="636" alt="Image"></a>
              <div class="pt-4 mt-sm-2">
                <h4><a href="#">Development of an application for a task tracker</a></h4>
                <p class="mb-0">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('components/footer')