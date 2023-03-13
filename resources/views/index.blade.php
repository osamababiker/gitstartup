@extends('components/layout')
@section('title', __('general.home_page') )
@section('description', "Git Startup home page")
@section('keywords', "Git startup ") 

@section('content')
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
            <div class="col-lg-6 col-xxl-5 pb-lg-5 mb-xl-5 {{ (App::isLocale('ar') ?  ' offset-lg-1 offset-xxl-2' :  '') }}">
              <h1 class="display-3 text-center mb-xxl-5 {{ (App::isLocale('ar') ? ' text-lg-end' : ' text-lg-start' ) }}"> {{ __('home.hero_slogan') }} </h1>
            </div>
            <div class="col-lg-5 col-xl-4 d-flex flex-column pt-2 pt-md-4 {{ (App::isLocale('ar') ?  '' :  ' offset-lg-1 offset-xxl-2') }}">
              <p class="fs-xl text-center pb-2 pb-md-0 mb-4 mb-md-5 {{ (App::isLocale('ar') ?  ' text-lg-end' :  ' text-lg-start') }}">{{ __('home.hero_bio') }} </p>
              <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start pb-3 pb-sm-5">
                <a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto me-sm-3 me-xl-4 mb-2 mb-sm-0" href="#contact-us">{{ __('home.hero_button') }}</a>
                <a class="btn btn-lg btn-link text-white w-100 w-sm-auto px-2" href="/#our-projects">{{ __('home.hero_project_link') }}<i class="{{ (App::isLocale('ar') ? 'ai-arrow-left me-2' : 'ai-arrow-right ms-2') }}"></i></a></div>
                <ul class="list-inline d-xl-flex text-center mt-auto mb-0 mb-sm-2 {{ (App::isLocale('ar') ? ' text-lg-end' : ' text-lg-start') }}">
                <li class="d-inline-flex align-items-center text-nowrap pt-1"><i class="ai-heart-filled text-secondary  fs-xl {{ (App::isLocale('ar') ? ' ms-2' : ' me-2') }}"></i> {{ __('home.hero_footer_text') }} </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services (Carousel on screns < 992px)-->
    <section class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5 mt-xxl-4 pb-lg-2 pb-xl-4 pb-xxl-5">
      <h2 class="h1 text-center"> {{ __('home.our_services_title') }} </h2>
      <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center"> {{ __('home.our_services_bio') }} </p>
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
                <h3>{{ __('home.services_one_title') }}</h3>
                <p class="card-text">{{ __('home.services_one_bio') }}</p>
              </div>
              <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link"><i class="ai-arrow-right"></i></div>
              </div></a></div>
          <!-- Item-->
          <div class="swiper-slide h-auto"><a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
              <div class="card-body">
                <i class="ai-headphone text-primary display-6 mb-3"></i>
                <h3>{{ __('home.services_two_title') }}</h3>
                <p class="card-text">{{ __('home.services_two_bio') }}</p>
              </div>
              <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link"><i class="ai-arrow-right"></i></div>
              </div></a></div>
          <!-- Item-->
          <div class="swiper-slide h-auto"><a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
              <div class="card-body">
                <i class="ai-cafe text-primary display-6 mb-3"></i>
                <h3> {{ __('home.services_three_title') }}</h3>
                <p class="card-text">{{ __('home.services_three_bio') }}</p>
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
      <h2 class="h1 text-center pt-lg-3">{{ __('home.our_industries_title') }}</h2>
      <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center">{{ __('home.our_industries_bio') }} </p>
      <div class="row align-items-lg-center">
        <!-- Accordion-->
        <div class="col-md-6 col-lg-5 pb-2 pb-lg-0 mb-4 mb-md-0">
          <div class="accordion accordion-alt" id="industries">
            <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
              <h3 class="accordion-header"> 
                <button class="accordion-button {{ (App::isLocale('ar') ? ' accordion-button-right' : '') }}" type="button" data-bs-toggle="collapse" data-binded-content="#startups-img" data-bs-target="#startups" aria-expanded="true" aria-controls="startups">{{ __('home.industre_one_title') }}</button>
              </h3>
              <div class="accordion-collapse collapse show" id="startups" data-bs-parent="#industries">
                <div class="accordion-body">{{ __('home.industre_one_bio') }}</div>
              </div>
            </div>
            <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
              <h3 class="accordion-header">
                <button class="accordion-button {{ (App::isLocale('ar') ? ' accordion-button-right' : '') }} collapsed" type="button" data-bs-toggle="collapse" data-binded-content="#jobs-img" data-bs-target="#jobs" aria-expanded="false" aria-controls="jobs">{{ __('home.industre_two_title') }} </button>
              </h3>
              <div class="accordion-collapse collapse" id="jobs" data-bs-parent="#industries">
                <div class="accordion-body">{{ __('home.industre_two_bio') }}</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Binded images-->
        <div class="col-md-6 col-lg-7 col-xl-6 {{ (App::isLocale('ar') ? ' offset-xr-1' : ' offset-xl-1') }}">
          <div class="ps-lg-4 ps-xl-0">
            <div class="binded-content">
              <div class="binded-item active" id="startups-img">
                <img class="rounded-5" src="{{ asset('assets/img/industries/01.jpg') }}" alt="Startups ">
              </div>
              <div class="binded-item" id="jobs-img">
                <img class="rounded-5" src="{{ asset('assets/img/industries/02.jpg') }}" alt="Job creation">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- technologies (Carousel)-->
    <section class="pt-2 py-md-4 py-lg-5 mt-2 mt-xl-4 mt-xxl-5">
      <div class="container d-flex align-items-center justify-content-between pb-4 mb-sm-2 mb-md-3">
        <h2 class="h1 mb-0">{{ __('home.our_technologies_title') }}</h2>
        <div class="d-flex">
          <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle" type="button" id="prev-skill"><i class="{{ (App::isLocale('ar') ? 'ai-arrow-right' : 'ai-arrow-left' )}}"></i></button>
          <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle {{ (App::isLocale('ar') ? ' me-3' :  ' ms-3' ) }}" type="button" id="next-skill"><i class="{{ (App::isLocale('ar') ?  'ai-arrow-left' : 'ai-arrow-right' ) }}"></i></button>
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
            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
              <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                <div class="card-flip-front p-0">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                    <img src="{{ asset('assets/img/figma.svg') }}" width="72" alt="Figma">
                  </div>
                </div>
                <div class="card-flip-back p-0 bg-transparent">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/img/figma.svg') }}" width="52" alt="Figma">
                    <p class="fs-sm pt-3 mb-0">{{ __('home.figma_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card border-0 bg-secondary h-100">
              <div class="card-body mx-auto" style="max-width: 416px;">
                <p class="fs-lg mb-1">{{ __('home.nextjs_bio') }}</p>
                <img class="d-dark-mode-none" src="{{ asset('assets/img/nextjs.svg') }}" width="150" alt="Nextjs">
                <img class="d-none d-dark-mode-inline-block" src="{{ asset('assets/img/nextjs.svg') }}" width="150" alt="Nextjs">
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
              <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                <div class="card-flip-front p-0">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                    <img src="{{ asset('assets/img/css3.svg') }}" width="72" alt="CSS3"></div>
                </div>
                <div class="card-flip-back p-0 bg-transparent">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/img/css3.svg') }}" width="52" alt="CSS3">
                    <p class="fs-sm pt-3 mb-0">{{ __('home.css3_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card border-0 bg-secondary h-100">
              <div class="card-body mx-auto" style="max-width: 416px;">
                <p class="fs-lg mb-1">{{ __('home.react_bio') }}</p>
                <img src="{{ asset('assets/img/react.svg') }}" width="150" alt="Reactjs">
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
              <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                <div class="card-flip-front p-0">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                    <img src="{{ asset('assets/img/bootstrap.svg') }}" width="72" alt="Bootstrap"></div>
                </div>
                <div class="card-flip-back p-0 bg-transparent">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/img/bootstrap.svg') }}" width="52" alt="Bootstrap">
                    <p class="fs-sm pt-3 mb-0">{{ __('home.bootstrap_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card border-0 bg-secondary h-100">
              <div class="card-body mx-auto" style="max-width: 416px;">
                <p class="fs-lg mb-1">{{ __('home.laravel_bio') }}</p>
                <img src="{{ asset('assets/img/laravel.svg') }}" width="150" alt="Laravel">
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
              <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                <div class="card-flip-front p-0">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                    <img src="{{ asset('assets/img/nodejs.svg') }}" width="72" alt="Nodejs">
                  </div>
                </div>
                <div class="card-flip-back p-0 bg-transparent">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                    <img src="{{ asset('assets/img/nodejs.svg') }}" width="52" alt="Nodejs">
                    <p class="fs-sm pt-3 mb-0">{{ __('home.nodejs_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="swiper-slide w-sm-auto h-auto">
            <div class="card border-0 bg-secondary h-100">
              <div class="card-body mx-auto" style="max-width: 416px;">
                <p class="fs-lg mb-1">{{ __('home.tailwindcss_bio') }}</p>
                <img class="d-dark-mode-none" src="{{ asset('assets/img/tailwindcss.svg') }}" width="150" alt="tailwindcss">
                <img class="d-none d-dark-mode-inline-block" src="{{ asset('assets/img/tailwindcss.svg') }}" width="150" alt="tailwindcss">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- Our projects-->
    <section class="container pt-5 pb-sm-3 mt-2 mt-sm-4 mb-2 mb-md-3 mb-lg-4 mb-xxl-5" id="our-projects">
      <h2 class="h1 text-center">{{ __('home.our_projects_title') }}</h2>
      <p class="pb-4 mb-md-2 mb-lg-3 text-center">{{ __('home.our_projects_bio') }} </p>
      <!-- Item-->
      @foreach($projects as $project)
      <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
        <div class="col-md-7 col-lg-6 mb-4 mb-md-0  {{ (App::isLocale('ar') ? ' offset-lg-1' :  '' ) }}">
          <a class="d-block position-relative" href="{{ route('projects.show', ['project' => $project->id]) }}">
            <img class="d-block position-relative zindex-2 mx-auto" src="{{ asset('upload/projects/'. $project->image) }}" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
          </a>
        </div>
        <div class="col-md-5 col-xl-4 {{ (App::isLocale('ar') ? '' :  ' offset-lg-1' ) }}" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
          <div class="ps-md-3 ps-lg-0">
            <h2 class="h4">{{ (App::isLocale('ar') ? $project->ar_name :  $project->en_name ) }}</h2>
            <p class="fs-sm pb-3 pb-lg-4 mb-3"> {!!  Str::substr((App::isLocale('ar') ? $project->ar_description :  $project->en_description ), 0, 150) !!} </p>
            <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('projects.show', ['project' => $project->id]) }}">{{ __('home.our_projects_btn') }}</a>
          </div>
        </div>
      </div>
      @endforeach

    </section>

@endsection