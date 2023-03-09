@extends('components/layout')
@section('title', $project->en_name )
@section('description', $project->page_description)
@section('keywords', $project->page_key_words)

@section('content')
  <!-- Page content-->
  <div class="container py-5 mt-5 mb-2 mb-sm-3 mb-lg-4 mb-xxl-5">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-2 pb-lg-3 pb-1 breadcrumb">
        <li class="breadcrumb-item {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}"><a href="/">{{ __('navbar.home_link') }}</a></li>
        <li class="breadcrumb-item active {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}" aria-current="page"><a href="{{ route('projects.index') }}">{{ __('navbar.projects_link') }}</a></li>
      </ol>
    </nav>
    <!-- Page title-->
    <div class="row">
      <div class="col-lg-11 col-xl-10"><img class="d-block d-dark-mode-none mb-2 mb-sm-3" src="{{ asset('upload/projects/' . $project->logo) }}" alt="project logo">
        <h1 class="display-2 pb-3 pb-md-4 pb-lg-5">{{ (App::isLocale('ar') ? $project->ar_name :  $project->en_name ) }}</h1>
      </div>
    </div>
    <!-- Main image-->
    <img class="d-block rounded-5 mb-3 mb-xl-4 mb-xxl-5" src="{{ asset('upload/projects/' . $project->image) }}" alt="project main Image">
    <!-- Project overview-->
    <div class="border-bottom py-4 py-lg-5">
      <div class="row">
        <div class="col-lg-11 col-xl-10">
          <p class="text-dark lead mb-2 mb-lg-3-0 mb-xl-4 mb-xxl-3"> {!!  (App::isLocale('ar') ? $project->ar_description :  $project->en_description ) !!} </p>
        </div>
      </div>
    </div>

    @if($projects->count() > 0)
    <!-- More projects carousel-->
    <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
      <h2 class="h1 mb-0">{{ __('projects.more_projects') }}</h2>
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
        @foreach($projects as $project)
        <div class="swiper-slide">
          <a class="d-block position-relative" href="{{ route('projects.show', ['project' => $project->id]) }}">
            <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100"></div>
            <img class="d-block position-relative zindex-2 mx-auto" src="assets/img/portfolio/list/06.png" width="636" alt="Image">
          </a>
          <div class="pt-4 mt-sm-2">
            <h4><a href="#">{{ (App::isLocale('ar') ? $project->ar_name :  $project->en_name ) }} </a></h4>
            <p class="mb-0">{!!  Str::substr((App::isLocale('ar') ? $project->ar_description :  $project->en_description ), 0, 150) !!}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

  </div>
@endsection