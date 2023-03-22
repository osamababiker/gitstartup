@extends('components/layout')
@section('title', __('general.partnership_page') )
@section('description', __('general.general_page_description'))
@section('keywords', __('general.general_page_keywords'))

@section('content') 
      <!-- Page content-->
      <!-- Hero--> 
      <section class="position-relative overflow-hidden pt-5">
        <div class="container position-relative zindex-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
          <div class="row justify-content-center py-4">
            <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
              <h1 class="display-2 fw-normal mb-0">{{ __('partnership.hero_title') }}</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- partnership form -->
      <section class="container dark-mode" id="partnership-form">
        <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">
          <!-- Decorative shapes-->
          <svg class="position-absolute end-0 mt-n2" width="242" height="331" viewBox="0 0 242 331" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M172.014 250.127C137.236 227.74 112.349 192.144 144.586 153.591C157.686 137.932 176.759 127.973 196.524 122.046C234.647 110.639 277.027 113.361 313.349 129.576C338.19 140.666 361.129 159.183 369.934 184.502C383.476 223.496 359.75 260.161 321.569 273.118C288.832 284.223 247.685 279.513 214.885 269.837C201.003 265.743 185.745 258.966 172.014 250.127Z" fill="#121519" fill-opacity=".07"></path>
            <path d="M20.3265 69.264C19.7064 43.0736 29.8071 17.1878 62.3851 19.8622C75.6229 20.9505 87.9525 27.2066 98.3563 35.3132C118.426 50.9253 132.424 73.896 136.952 98.6413C140.044 115.562 138.424 134.218 127.978 148C111.901 169.236 83.4531 170.283 62.5246 155.209C44.5807 142.281 32.0983 119.217 25.3391 98.6799C22.4836 89.9885 20.5616 79.6021 20.3265 69.264Z" fill="#121519" fill-opacity=".07"></path>
          </svg>
          <svg class="position-absolute start-0 bottom-0 ms-3" width="169" height="217" viewBox="0 0 169 217" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M34.2574 90.0177C29.666 97.6253 26.6254 106.591 24.9502 114.96C19.9522 140.043 26.4112 168.792 49.6162 181.885C66.0705 191.17 91.0017 189.904 108.062 183.692C125.725 177.266 135.045 168.04 142.29 150.389C151.409 128.174 150.912 99.6904 125.93 91.6429C115.423 88.254 104.723 86.5065 94.2249 82.5889C84.6622 79.0248 74.8545 72.1766 64.4411 71.6149C50.8011 70.8777 40.9122 79.0146 34.2574 90.0177Z" fill="#121519" fill-opacity="0.07"></path>
            <path d="M147.005 75.6331C152.135 70.7783 156.106 64.2374 159.153 57.9073C166.014 43.6372 174.127 22.1368 160.207 9.68505C152.924 3.17188 139.243 3.86644 130.324 5.29774C118.428 7.20428 107.295 8.85077 96.5031 14.783C85.8056 20.6599 79.0155 33.6997 77.0014 45.6686C75.4978 54.5776 79.63 63.6672 84.7391 70.7453C91.8208 80.5571 103.503 84.2003 114.817 84.3975C121.101 84.5081 127.716 84.0527 133.89 82.8121C138.932 81.7962 143.273 79.1597 147.005 75.6331Z" fill="#121519" fill-opacity="0.07"></path>
          </svg>
          <div class="card-body position-relative zindex-2 py-5">
            @if(session()->has('partnership_feedback'))
              <div class="alert alert-light alert-dismissible fade show" role="alert">
                  {{session()->get('partnership_feedback')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form class="mx-auto" style="max-width: 800px;" method="post" action="{{ route('postPartnership') }}">
              @csrf
              <h2 class="h1 card-title text-center pb-4">{{ __('partnership.form_title') }}</h2>
              <div class="row g-4">
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="name">{{ __('partnership.form_name_label') }}</label>
                  <input class="form-control form-control-lg" name="name" type="text" placeholder="{{ __('partnership.form_name_placeholder') }}" required id="name">
                </div>
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="company">{{ __('partnership.form_company_label') }}</label>
                  <input class="form-control form-control-lg" name="company" type="text" placeholder="{{ __('partnership.form_company_placeholder') }}" id="company">
                </div>
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="email">{{ __('partnership.form_email_label') }}</label>
                  <input class="form-control form-control-lg" name="email" type="email" placeholder="{{ __('partnership.form_email_placeholder') }}" required id="email">
                </div>
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="phone">{{ __('partnership.form_phone_label') }}</label>
                  <input class="form-control form-control-lg" name="phone" type="text" placeholder="{{ __('partnership.form_phone_placeholder') }}" id="phone">
                </div>
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="address">{{ __('partnership.form_address_label') }}</label>
                  <input class="form-control form-control-lg" name="address" type="text" placeholder="{{ __('partnership.form_address_placeholder') }}" id="address">
                </div>
                <div class="col-sm-6">
                  <label class="form-label fs-base" for="project_id">{{ __('partnership.form_project_label') }}</label>
                  <select name="project_id" id="project_id" class="form-control form-control-lg">
                    @foreach($projects as $project)
                      <option value="{{ $project->id }}">{{ (App::isLocale('ar') ? $project->ar_name : $project->en_name) }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-12">
                  <label class="form-label fs-base" for="requirements">{{ __('partnership.form_requirements_label') }}</label>
                  <textarea class="form-control form-control-lg" name="requirements" rows="6" placeholder="{{ __('partnership.form_requirements_placeholder') }}" required id="requirements"></textarea>
                </div>
                <div class="col-sm-12 text-center pt-4">
                  <button class="btn btn-lg btn-light" type="submit">{{ __('partnership.form_button') }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- Clients-->
      <!-- <section class="container pt-5 mt-xl-3 mt-xxl-4">
        <h2 class="h4 text-center pb-3 pb-md-4 mb-lg-4"> {{ __('partnership.partners_slide_title') }} </h2>
        <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4">
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/foster-color.svg" width="145" alt="Foster">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/foster-gray.svg" width="145" alt="Foster"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/foster-light.svg" width="145" alt="Foster"></div></a></div>
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/klinos-color.svg" width="140" alt="Klinos">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/klinos-gray.svg" width="140" alt="Klinos"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/klinos-light.svg" width="140" alt="Klinos"></div></a></div>
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/champion-color.svg" width="160" alt="Champion">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/champion-gray.svg" width="160" alt="Champion"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/champion-light.svg" width="160" alt="Champion"></div></a></div>
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/airbnb-color.svg" width="130" alt="Airbnb">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/airbnb-gray.svg" width="130" alt="Airbnb"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/airbnb-light.svg" width="130" alt="Airbnb"></div></a></div>
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/starcraft-color.svg" width="160" alt="Starcraft">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/starcraft-gray.svg" width="160" alt="Starcraft"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/starcraft-light.svg" width="160" alt="Starcraft"></div></a></div>
          <div class="col text-center"><a class="swap-image my-1 my-sm-2" href="#"><img class="swap-to" src="assets/img/landing/saas-1/brands/alpine-color.svg" width="150" alt="Alpine">
              <div class="swap-from"><img class="d-dark-mode-none" src="assets/img/landing/saas-1/brands/alpine-gray.svg" width="150" alt="Alpine"><img class="d-none d-dark-mode-block" src="assets/img/landing/saas-1/brands/alpine-light.svg" width="150" alt="Alpine"></div></a></div>
        </div>
      </section> -->
      <!-- How it works (Steps)-->
      <section class="overflow-hidden py-5 my-md-2 my-xl-4 my-xxl-5">
        <div class="container py-2 py-sm-4 py-lg-5">
          <h2 class="h1 text-center pb-3 mb-3 mb-lg-4 mt-xxl-2"> {{ __('partnership.steps_section_title') }} </h2>
          <!-- Step-->
          <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
            <div class="col-md-6 col-xl-5  order-md-2 pb-2 pb-md-0 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <img class="" src="{{ asset('assets/img/undraw_freelancer.svg') }}" width="525" alt="Image">
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 order-md-1" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <div class="pe-md-4 pe-lg-0">
                <span class="badge fs-sm bg-faded-primary text-primary mb-3 mb-lg-4"> {{ __('partnership.step_one_label') }} </span>
                <h3 class="h2 mb-3 mb-lg-4"> {{ __('partnership.step_one_title') }} </h3>
                <p class="pb-1 pb-lg-0 mb-4 mb-lg-5"> {{ __('partnership.step_one_bio') }}   </p>
                <a class="btn btn-outline-primary rounded-pill" href="#partnership-form">{{ __('partnership.steps_section_button') }}</a>
              </div>
            </div>
          </div>
          <!-- Arrow-->
          <div class="d-none d-lg-flex justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
            <svg class="d-block text-primary" width="339" height="365" viewBox="0 0 339 365" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: -150px; margin-top: -140px; margin-bottom: -108px;">
              <path d="M324 291.371C120.111 291.37 240.756 58.7225 1.00032 73.2606" stroke="url(#arrow1)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
              <path d="M337.375 290.62C338.074 290.998 338.074 292.001 337.375 292.379L328.476 297.196C327.81 297.557 327 297.074 327 296.317L327 286.683C327 285.925 327.81 285.443 328.476 285.803L337.375 290.62Z" fill="currentColor"></path>
              <defs>
                <linearGradient id="arrow1" x1="324" y1="291.5" x2="-2.99974" y2="72.4997" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="currentColor"></stop>
                  <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <!-- Step-->
          <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
            <div class="col-md-6 col-xl-5  pb-2 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <img class="" src="{{ asset('assets/img/undraw_agreement.svg') }}" width="473" alt="Image">
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <div class="ps-md-4 ps-lg-0">
                <span class="badge fs-sm bg-faded-primary text-primary mb-3 mb-lg-4">{{ __('partnership.step_two_label') }}</span>
                <h3 class="h2 mb-3 mb-lg-4">{{ __('partnership.step_two_title') }}  </h3>
                <p class="pb-1 pb-lg-0 mb-4 mb-lg-5"> {{ __('partnership.step_two_bio') }} </p>
                <a class="btn btn-outline-primary rounded-pill" href="#partnership-form">{{ __('partnership.steps_section_button') }}</a>
              </div>
            </div>
          </div>
          <!-- Arrow-->
          <div class="d-none d-lg-flex justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
            <svg class="d-block text-primary" width="263" height="275" viewBox="0 0 263 275" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -60px; margin-left: -120px; margin-bottom: -80px;">
              <path d="M8.13678 249.647C7.47108 250.081 6.59001 249.602 6.59106 248.808L6.60444 238.689C6.60544 237.931 7.4158 237.45 8.08162 237.811L16.5478 242.408C17.2136 242.77 17.2512 243.712 16.6163 244.125L8.13678 249.647Z" fill="currentColor"></path>
              <path d="M261.961 37.8891C216.908 65.6243 128.226 135.486 133.916 193.05C141.029 265.005 265.134 173.468 173.666 148.634C89.2542 125.715 30.9125 210.547 13.9796 236.702" stroke="url(#arrow2)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
              <defs>
                <linearGradient id="arrow2" x1="13.9797" y1="234.5" x2="276.704" y2="60.1939" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="currentColor"></stop>
                  <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <!-- Step-->
          <div class="row align-items-center position-relative">
            <div class="col-md-6 col-xl-5 order-md-2 d-md-flex justify-content-end pb-2 pb-md-0 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <img class="" src="{{ asset('assets/img/undraw_fingerprint.svg') }}" width="473" alt="Image">
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 order-md-1" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
              <div class="pe-md-4 pe-lg-0"><span class="badge fs-sm bg-faded-primary text-primary mb-3 mb-lg-4">{{ __('partnership.step_three_label') }}</span>
                <h3 class="h2 mb-3 mb-lg-4"> {{ __('partnership.step_three_title') }} </h3>
                <p class="pb-1 pb-lg-0 mb-4 mb-lg-5"> {{ __('partnership.step_three_bio') }}   </p>
                <a class="btn btn-outline-primary rounded-pill" href="#partnership-form">{{ __('partnership.steps_section_button') }}</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Benefits-->
      <section class="container pt-5 mt-md-3 mt-lg-2 mt-xl-4 mt-xxl-5 mb-5">
        <h2 class="h1 text-center pt-3 pt-sm-4 pt-lg-5 pb-3 mb-3 mb-lg-4 mt-xl-3"> {{ __('partnership.benefits_section_title') }} </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <!-- Item-->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-primary mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.805 15.6567L34.6717 15.2583C34.4133 14.4633 34.095 13.6967 33.7233 12.9683L35.6583 10.4767C36.4417 9.46833 36.35 8.045 35.455 7.17833L32.83 4.55333C31.955 3.65 30.5317 3.56 29.5217 4.34167L27.0333 6.27667C26.305 5.905 25.5383 5.58667 24.7417 5.32833L24.3433 2.2C24.1933 0.945 23.1283 0 21.8667 0H18.1333C16.8717 0 15.8067 0.945 15.6567 2.195L15.2583 5.32833C14.4617 5.58667 13.695 5.90333 12.9667 6.27667L10.4767 4.34167C9.47 3.56 8.04667 3.65 7.17833 4.545L4.55333 7.16833C3.65 8.045 3.55833 9.46833 4.34167 10.4783L6.27667 12.9683C5.90333 13.6967 5.58667 14.4633 5.32833 15.2583L2.2 15.6567C0.945 15.8067 0 16.8717 0 18.1333V21.8667C0 23.1283 0.945 24.1933 2.195 24.3433L5.32833 24.7417C5.58667 25.5367 5.905 26.3033 6.27667 27.0317L4.34167 29.5233C3.55833 30.5317 3.65 31.955 4.545 32.8217L7.17 35.4467C8.04667 36.3483 9.46833 36.4383 10.4783 35.6567L12.9683 33.7217C13.6967 34.095 14.4633 34.4133 15.2583 34.67L15.6567 37.7967C15.8067 39.055 16.8717 40 18.1333 40H21.8667C23.1283 40 24.1933 39.055 24.3433 37.805L24.7417 34.6717C25.5367 34.4133 26.3033 34.095 27.0317 33.7233L29.5233 35.6583C30.5317 36.4417 31.955 36.35 32.8217 35.455L35.4467 32.83C36.35 31.9533 36.4417 30.5317 35.6583 29.5217L33.7233 27.0317C34.0967 26.3033 34.415 25.5367 34.6717 24.7417L37.7983 24.3433C39.0533 24.1933 39.9983 23.1283 39.9983 21.8667V18.1333C40 16.8717 39.055 15.8067 37.805 15.6567ZM20 28.3333C15.405 28.3333 11.6667 24.595 11.6667 20C11.6667 15.405 15.405 11.6667 20 11.6667C24.595 11.6667 28.3333 15.405 28.3333 20C28.3333 24.595 24.595 28.3333 20 28.3333Z"></path>
                    </svg>
                    <h3>{{ __('partnership.benefit_one_title') }} </h3>
                    <p class="card-text">{{ __('partnership.benefit_one_bio') }} </p>
                  </div>
                </div>
                <div class="card-flip-back bg-primary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M30.244 12.5253L27.7373 12.2067C27.5307 11.5707 27.276 10.9573 26.9787 10.3747L28.5267 8.38133C29.1533 7.57467 29.08 6.436 28.364 5.74267L26.264 3.64267C25.564 2.92 24.4253 2.848 23.6173 3.47333L21.6267 5.02133C21.044 4.724 20.4307 4.46933 19.7933 4.26267L19.4747 1.76C19.3547 0.756 18.5027 0 17.4933 0H14.5067C13.4973 0 12.6453 0.756 12.5253 1.756L12.2067 4.26267C11.5693 4.46933 10.956 4.72267 10.3733 5.02133L8.38133 3.47333C7.576 2.848 6.43733 2.92 5.74267 3.636L3.64267 5.73467C2.92 6.436 2.84667 7.57467 3.47333 8.38267L5.02133 10.3747C4.72267 10.9573 4.46933 11.5707 4.26267 12.2067L1.76 12.5253C0.756 12.6453 0 13.4973 0 14.5067V17.4933C0 18.5027 0.756 19.3547 1.756 19.4747L4.26267 19.7933C4.46933 20.4293 4.724 21.0427 5.02133 21.6253L3.47333 23.6187C2.84667 24.4253 2.92 25.564 3.636 26.2573L5.736 28.3573C6.43733 29.0787 7.57467 29.1507 8.38267 28.5253L10.3747 26.9773C10.9573 27.276 11.5707 27.5307 12.2067 27.736L12.5253 30.2373C12.6453 31.244 13.4973 32 14.5067 32H17.4933C18.5027 32 19.3547 31.244 19.4747 30.244L19.7933 27.7373C20.4293 27.5307 21.0427 27.276 21.6253 26.9787L23.6187 28.5267C24.4253 29.1533 25.564 29.08 26.2573 28.364L28.3573 26.264C29.08 25.5627 29.1533 24.4253 28.5267 23.6173L26.9787 21.6253C27.2773 21.0427 27.532 20.4293 27.7373 19.7933L30.2387 19.4747C31.2427 19.3547 31.9987 18.5027 31.9987 17.4933V14.5067C32 13.4973 31.244 12.6453 30.244 12.5253ZM16 22.6667C12.324 22.6667 9.33333 19.676 9.33333 16C9.33333 12.324 12.324 9.33333 16 9.33333C19.676 9.33333 22.6667 12.324 22.6667 16C22.6667 19.676 19.676 22.6667 16 22.6667Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">{{ __('partnership.benefit_one_flip_title') }} </div>
                    <p class="card-text text-white opacity-70">{{ __('partnership.benefit_one_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-danger mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.0833 13.3335H2.91669C1.31669 13.3335 0 14.6502 0 16.2502V37.0835C0 38.6835 1.31669 40.0002 2.91669 40.0002H37.0834C38.6834 40.0002 40.0001 38.6835 40.0001 37.0835V16.2502C40 14.6502 38.6833 13.3335 37.0833 13.3335ZM35 21.2502V32.0835C35 33.6835 33.7 35.0002 32.0833 35.0002H22.9167C21.3 35.0002 20 33.6835 20 32.0835V21.2502C20 19.6502 21.3 18.3335 22.9167 18.3335H32.0834C33.7 18.3335 35 19.6502 35 21.2502ZM15.4167 27.5002H6.25C5.56669 27.5002 5 26.9335 5 26.2502C5 25.5669 5.56669 25.0002 6.25 25.0002H15.4167C16.1 25.0002 16.6667 25.5669 16.6667 26.2502C16.6667 26.9335 16.1 27.5002 15.4167 27.5002ZM16.6667 31.2502C16.6667 31.9335 16.1 32.5002 15.4167 32.5002H6.25C5.56669 32.5002 5 31.9335 5 31.2502C5 30.5669 5.56669 30.0002 6.25 30.0002H15.4167C16.1 30.0002 16.6667 30.5669 16.6667 31.2502ZM15.4167 22.5002H6.25C5.56669 22.5002 5 21.9335 5 21.2502C5 20.5669 5.56669 20.0002 6.25 20.0002H15.4167C16.1 20.0002 16.6667 20.5669 16.6667 21.2502C16.6667 21.9335 16.1 22.5002 15.4167 22.5002Z"></path>
                      <path d="M37.0859 0H16.2526C14.6443 0 13.3359 1.30835 13.3359 2.91669V7.08339C13.3359 8.69173 14.6443 10.0001 16.2526 10.0001H37.0859C38.6943 10 40.0026 8.69165 40.0026 7.08331V2.91669C40.0026 1.30835 38.6943 0 37.0859 0Z"></path>
                      <path d="M5 10C7.76142 10 10 7.76142 10 5C10 2.23858 7.76142 0 5 0C2.23858 0 0 2.23858 0 5C0 7.76142 2.23858 10 5 10Z"></path>
                    </svg>
                    <h3>{{ __('partnership.benefit_two_title') }}</h3>
                    <p class="card-text">{{ __('partnership.benefit_two_bio') }}</p>
                  </div>
                </div>
                <div class="card-flip-back bg-danger rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M29.6664 10.667H2.33334C1.05335 10.667 0 11.7203 0 13.0003V29.6669C0 30.9468 1.05335 32.0002 2.33334 32.0002H29.6665C30.9465 32.0002 31.9998 30.9468 31.9998 29.6669V13.0003C31.9998 11.7203 30.9464 10.667 29.6664 10.667ZM27.9998 17.0003V25.6669C27.9998 26.9469 26.9598 28.0002 25.6665 28.0002H18.3332C17.0399 28.0002 15.9999 26.9469 15.9999 25.6669V17.0003C15.9999 15.7203 17.0399 14.667 18.3332 14.667H25.6665C26.9598 14.667 27.9998 15.7203 27.9998 17.0003ZM12.3333 22.0003H4.99997C4.45332 22.0003 3.99997 21.5469 3.99997 21.0003C3.99997 20.4536 4.45332 20.0003 4.99997 20.0003H12.3333C12.8799 20.0003 13.3333 20.4536 13.3333 21.0003C13.3333 21.5469 12.8799 22.0003 12.3333 22.0003ZM13.3333 25.0002C13.3333 25.5469 12.8799 26.0002 12.3333 26.0002H4.99997C4.45332 26.0002 3.99997 25.5469 3.99997 25.0002C3.99997 24.4536 4.45332 24.0003 4.99997 24.0003H12.3333C12.8799 24.0003 13.3333 24.4536 13.3333 25.0002ZM12.3333 18.0003H4.99997C4.45332 18.0003 3.99997 17.5469 3.99997 17.0003C3.99997 16.4537 4.45332 16.0003 4.99997 16.0003H12.3333C12.8799 16.0003 13.3333 16.4537 13.3333 17.0003C13.3333 17.5469 12.8799 18.0003 12.3333 18.0003Z"></path>
                      <path d="M29.6639 0H12.9974C11.7107 0 10.6641 1.04667 10.6641 2.33334V5.66667C10.6641 6.95334 11.7107 8.00001 12.9974 8.00001H29.6639C30.9506 7.99994 31.9973 6.95327 31.9973 5.66661V2.33334C31.9973 1.04667 30.9506 0 29.6639 0Z"></path>
                      <path d="M3.99997 7.99994C6.2091 7.99994 7.99994 6.2091 7.99994 3.99997C7.99994 1.79085 6.2091 0 3.99997 0C1.79085 0 0 1.79085 0 3.99997C0 6.2091 1.79085 7.99994 3.99997 7.99994Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">{{ __('partnership.benefit_two_flip_title') }} </div>
                    <p class="card-text text-white opacity-70">{{ __('partnership.benefit_two_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-info mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.11125 25.5903H5.55542C6.16903 25.5903 6.66667 26.0876 6.66667 26.7012V37.8124C6.66667 38.426 6.16903 38.9237 5.55542 38.9237H1.11125C0.49764 38.9237 0 38.426 0 37.8124V26.7012C0 26.0876 0.49764 25.5903 1.11125 25.5903Z"></path>
                      <path d="M12.2202 16.7012H16.6648C17.2784 16.7012 17.776 17.1988 17.776 17.8124V37.8124C17.776 38.426 17.2784 38.9237 16.6648 38.9237H12.2202C11.6066 38.9237 11.1094 38.426 11.1094 37.8124V17.8124C11.1094 17.1988 11.6066 16.7012 12.2202 16.7012Z"></path>
                      <path d="M23.33 21.146H27.7746C28.3882 21.146 28.8854 21.6436 28.8854 22.2572V37.8127C28.8854 38.4263 28.3882 38.9239 27.7746 38.9239H23.33C22.7164 38.9239 22.2188 38.4263 22.2188 37.8127V22.2572C22.2188 21.6436 22.7164 21.146 23.33 21.146Z"></path>
                      <path d="M34.4472 14.479H38.8914C39.505 14.479 40.0026 14.9766 40.0026 15.5903V37.8123C40.0026 38.4259 39.505 38.9236 38.8914 38.9236H34.4472C33.8336 38.9236 33.3359 38.4259 33.3359 37.8123V15.5903C33.3359 14.9766 33.8336 14.479 34.4472 14.479Z"></path>
                      <path d="M36.6667 1.146C34.8267 1.14803 33.3354 2.63932 33.3333 4.47933C33.3378 4.84228 33.4021 5.20199 33.5238 5.54378L27.9614 8.85026C27.2314 8.07593 26.1731 7.70076 25.1184 7.84196C24.0633 7.98315 23.1413 8.62362 22.6404 9.56274L17.7344 7.13273C17.7584 6.98991 17.7726 6.84587 17.7779 6.70142C17.7804 5.35213 16.9694 4.13468 15.7235 3.6167C14.4775 3.09912 13.0424 3.38354 12.0882 4.33732C11.1336 5.2911 10.8484 6.72583 11.3656 7.97217L5.00163 12.7215C4.49707 12.4208 3.9209 12.2605 3.33333 12.2572C1.49251 12.2572 0 13.7493 0 15.5906C0 17.4314 1.49251 18.9239 3.33333 18.9239C5.17415 18.9239 6.66667 17.4314 6.66667 15.5906C6.66382 15.1894 6.58813 14.7926 6.44328 14.4187L12.8707 9.62174C14.128 10.3228 15.6962 10.1173 16.7301 9.11556L22.3092 11.8788C22.6811 13.5353 24.2399 14.647 25.9273 14.459C27.6147 14.271 28.8908 12.844 28.8888 11.146C28.8888 11.0614 28.87 10.9816 28.8639 10.8986L34.9137 7.302C35.4382 7.63363 36.0457 7.81063 36.6667 7.81266C38.5075 7.81266 40 6.32015 40 4.47933C40 2.63851 38.5075 1.146 36.6667 1.146Z"></path>
                    </svg>
                    <h3>{{ __('partnership.benefit_three_title') }}</h3>
                    <p class="card-text">{{ __('partnership.benefit_three_bio') }}</p>
                  </div>
                </div>
                <div class="card-flip-back bg-info rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.888997 20.4722H4.44434C4.93522 20.4722 5.33333 20.87 5.33333 21.3608V30.2498C5.33333 30.7407 4.93522 31.1388 4.44434 31.1388H0.888997C0.398112 31.1388 0 30.7407 0 30.2498V21.3608C0 20.87 0.398112 20.4722 0.888997 20.4722Z"></path>
                      <path d="M9.7793 13.3608H13.335C13.8258 13.3608 14.224 13.759 14.224 14.2498V30.2498C14.224 30.7407 13.8258 31.1388 13.335 31.1388H9.7793C9.28841 31.1388 8.89062 30.7407 8.89062 30.2498V14.2498C8.89062 13.759 9.28841 13.3608 9.7793 13.3608Z"></path>
                      <path d="M18.6702 16.9165H22.2259C22.7168 16.9165 23.1146 17.3146 23.1146 17.8055V30.2498C23.1146 30.7407 22.7168 31.1388 22.2259 31.1388H18.6702C18.1794 31.1388 17.7812 30.7407 17.7812 30.2498V17.8055C17.7812 17.3146 18.1794 16.9165 18.6702 16.9165V16.9165Z"></path>
                      <path d="M27.5531 11.5835H31.1084C31.5993 11.5835 31.9974 11.9816 31.9974 12.4725V30.2502C31.9974 30.7411 31.5993 31.1392 31.1084 31.1392H27.5531C27.0622 31.1392 26.6641 30.7411 26.6641 30.2502V12.4725C26.6641 11.9816 27.0622 11.5835 27.5531 11.5835V11.5835Z"></path>
                      <path d="M29.3333 0.916504C27.8613 0.918132 26.6683 2.11117 26.6667 3.58317C26.6702 3.87353 26.7217 4.1613 26.819 4.43473L22.3691 7.07991C21.7852 6.46045 20.9385 6.16032 20.0947 6.27327C19.2507 6.38623 18.513 6.8986 18.1123 7.6499L14.1875 5.70589C14.2067 5.59163 14.2181 5.4764 14.2223 5.36084C14.2243 4.28141 13.5755 3.30745 12.5788 2.89307C11.582 2.479 10.4339 2.70654 9.67057 3.46956C8.9069 4.23258 8.67871 5.38037 9.09245 6.37744L4.0013 10.1769C3.59766 9.93636 3.13672 9.8081 2.66667 9.8055C1.19401 9.8055 0 10.9992 0 12.4722C0 13.9448 1.19401 15.1388 2.66667 15.1388C4.13932 15.1388 5.33333 13.9448 5.33333 12.4722C5.33105 12.1512 5.27051 11.8338 5.15462 11.5347L10.2965 7.6971C11.3024 8.25797 12.557 8.09359 13.3841 7.29215L17.8473 9.50277C18.1449 10.828 19.3919 11.7173 20.7419 11.5669C22.0918 11.4165 23.1126 10.2749 23.111 8.9165C23.111 8.84879 23.096 8.78499 23.0911 8.71859L27.931 5.84131C28.3506 6.10661 28.8366 6.24821 29.3333 6.24984C30.806 6.24984 32 5.05583 32 3.58317C32 2.11051 30.806 0.916504 29.3333 0.916504V0.916504Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">{{ __('partnership.benefit_three_flip_title') }} </div>
                    <p class="card-text text-white opacity-70">{{ __('partnership.benefit_three_bio') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection