@extends('components/layout')
@section('title', __('general.projects_page') )
@section('description', "Git Startup About page")
@section('keywords', "Git startup ")

@section('content')
  <!-- Page content-->
  <section class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}"><a href="/"> {{ __('navbar.home_link') }}</a></li>
        <li class="breadcrumb-item active {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}" aria-current="page"> {{ __('navbar.projects_link') }}</li>
      </ol>
    </nav>
    <!-- Page title-->
    <h1 class="pb-3">{{ __('projects.page_title') }}</h1>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
          <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/06.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block d-dark-mode-none mb-2 mb-lg-3" src="assets/img/portfolio/brands/champion-blue-dark.svg" alt="Champion"><img class="d-none d-dark-mode-block mb-2 mb-lg-3" src="assets/img/portfolio/brands/champion-blue-light.svg" alt="Champion">
          <h2 class="h4">Development of an application for a national bank</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo dignissim.</p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Read the full story</a>
          <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
            <h6 class="text-body mb-0 me-3">Awards:</h6><img class="d-block d-dark-mode-none me-4" src="assets/img/portfolio/brands/vuejs-dark.svg" width="90" alt="Vue.js"><img class="d-none d-dark-mode-block me-4" src="assets/img/portfolio/brands/vuejs-light.svg" width="90" alt="Vue.js"><img class="d-block d-dark-mode-none" src="assets/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte"><img class="d-none d-dark-mode-block" src="assets/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
          </div>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
          <div class="bg-primary rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/07.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block mb-2 mb-lg-3" src="assets/img/portfolio/brands/foster-green.svg" alt="Foster">
          <h2 class="h4">Design and development of a dashboard for data management</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">Feugiat elit tempor, malesuada rutrum amet quis duis facilisi viverra. Quam ut in gravida dignissim eget mauris pretium facilisi dui varius amet et quam massa auctor.</p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Read the full story</a>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
          <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div><img class="d-block position-relative zindex-2 ms-auto" src="assets/img/portfolio/list/08.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block mb-2 mb-lg-3" src="assets/img/portfolio/brands/boost.svg" alt="Boost">
          <h2 class="h4 mb-lg-4">Landing page for a marketing agency Boost</h2>
          <ul class="list-unstyled pb-1 pb-lg-2 mb-3">
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Faucibus sit est dui id gravida</li>
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Lectus in sem eu facilisis ornare</li>
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Massa maecenas cras vivamus</li>
          </ul><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Read the full story</a>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
          <div class="rounded-5 position-absolute top-0 start-0 w-100 h-100" style="background-color: #d7e4f4;" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div><img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/09.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block d-dark-mode-none mb-2 mb-lg-3" src="assets/img/portfolio/brands/champion-purple-dark.svg" alt="Champion"><img class="d-none d-dark-mode-block mb-2 mb-lg-3" src="assets/img/portfolio/brands/champion-purple-light.svg" alt="Champion">
          <h2 class="h4">Development of an application for a task tracker</h2>
          <p class="fs-sm pb-3 pb-lg-4 mb-3">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec.</p><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Read the full story</a>
          <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
            <h6 class="text-body mb-0 me-3">Awards:</h6><img class="d-block d-dark-mode-none me-4" src="assets/img/portfolio/brands/clutch-dark.svg" width="92" alt="Clutch"><img class="d-none d-dark-mode-block me-4" src="assets/img/portfolio/brands/clutch-light.svg" width="92" alt="Clutch"><img class="d-block d-dark-mode-none" src="assets/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte"><img class="d-none d-dark-mode-block" src="assets/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
          </div>
        </div>
      </div>
    </div>
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0"><a class="d-block position-relative" href="portfolio-single-v1.html">
          <div class="bg-warning rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div><img class="d-block position-relative zindex-2 ms-auto" src="assets/img/portfolio/list/10.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250"></a></div>
      <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block mb-2 mb-lg-3" src="assets/img/portfolio/brands/foster-yellow.svg" alt="Foster">
          <h2 class="h4 mb-lg-4">Landing page for company for audience analysis </h2>
          <ul class="list-unstyled pb-1 pb-lg-2 mb-3">
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Faucibus sit est dui id gravida</li>
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Lectus in sem eu facilisis ornare</li>
            <li class="d-flex pb-1 mb-2"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Massa maecenas cras vivamus</li>
          </ul><a class="btn btn-sm btn-outline-dark rounded-pill" href="portfolio-single-v1.html">Read the full story</a>
        </div>
      </div>
    </div>
  </section>
@endsection