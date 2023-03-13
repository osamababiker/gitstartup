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
    @foreach($projects as $project)
    <!-- Item-->
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
      <div class="col-md-7 col-lg-6 mb-4 mb-md-0 {{ (App::isLocale('ar') ? ' offset-lg-1' :  '' ) }}">
        <a class="d-block position-relative" href="{{ route('projects.show', ['project' => $project->id]) }}">
          <img class="d-block position-relative zindex-2 ms-auto" src="{{ asset('upload/projects/' . $project->image) }}" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
        </a>
      </div>
      <div class="col-md-5 col-xl-4 {{ (App::isLocale('ar') ? '' :  ' offset-lg-1' ) }}" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
        <div class="ps-md-3 ps-lg-0"><img class="d-block" src="{{ asset('upload/projects/' . $project->logo) }}" alt="project logo">
          <h2 class="h4 mb-lg-4"> {{ (App::isLocale('ar') ? $project->ar_name :  $project->en_name ) }} </h2>
          <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('projects.show', ['project' => $project->id]) }}">{{ __('general.read_more') }}</a>
        </div>
      </div>
    </div>
    @endforeach
  </section>
@endsection