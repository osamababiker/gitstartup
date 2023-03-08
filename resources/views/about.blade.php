@extends('components/layout')
@section('title', __('general.about_page') )
@section('description', "Git Startup About page")
@section('keywords', "Git startup ")

@section('content')
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
              <li class="breadcrumb-item  {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}"><a href="/">{{ __('navbar.home_link') }}</a></li>
              <li class="breadcrumb-item active {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}" aria-current="page">{{ __('navbar.about_link') }}</li>
            </ol>
          </nav>
          <h1 class="display-2 pb-2 pb-sm-3">{{ __('about.hero_slogn') }}</h1>
          <ul class="list-unstyled d-flex flex-wrap mb-0">
            <li class="d-flex py-1 me-4"><i class="ai-check-alt text-primary lead me-2"></i>{{ __('about.hero_service_one') }}</li>
            <li class="d-flex py-1 me-4"><i class="ai-check-alt text-primary lead me-2"></i>{{ __('about.hero_service_two') }}</li>
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
        <div class="fs-sm text-uppercase mb-3">{{ __('about.who_we_are_label') }}</div>
        <h2 class="display-6">{{ __('about.who_we_are_title') }}</h2>
      </div>
      <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
        <p class="fs-xl">{{ __('about.who_we_are_bio') }}</p>
      </div>
    </div>
  </section>
  <!-- Mission-->
  <section class="pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
      <div class="fs-sm text-uppercase mb-3">{{ __('about.our_mission_label') }}</div>
      <h2 class="display-6 pb-3 mb-lg-4">{{ __('about.our_mission_title') }}</h2>
    </div>
  </section>
  <!-- How we work (Steps)-->
  <section class="container pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5 mb-5">
    <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
      <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
        <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto" style="max-width: 530px; background-image: url({{ asset('assets/img/about.jpg') }});">
          <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
          <div class="dark-mode position-relative zindex-2 p-4">
            <div class="text-center mx-auto" style="max-width: 275px;"><span class="d-block fs-sm text-uppercase mb-3"> {{ __('about.our_success_indicators_label') }} </span>
              <h2 class="display-6 mb-0">{{ __('about.our_success_indicators_title') }}</h2>
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
                <h3 class="h5 pb-1 mb-2">{{ __('about.success_indicators_title_one') }}</h3>
                <p class="mb-0">{{ __('about.success_indicators_bio_one') }}</p>
              </div>
            </div>
            <div class="step py-3 py-xl-4">
              <div class="step-number">
                <div class="step-number-inner">02</div>
              </div>
              <div class="step-body">
                <h3 class="h5 pb-1 mb-2">{{ __('about.success_indicators_title_two') }}</h3>
                <p class="mb-0">{{ __('about.success_indicators_bio_two') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team-->
@endsection