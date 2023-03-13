@extends('components/layout')
@section('title', __('general.blogs_page') )
@section('description', "Git Startup About page")
@section('keywords', "Git startup ")

@section('content')
  <!-- Page content-->
  <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}"><a href="/">{{ __('navbar.home_link') }}</a></li>
        <li class="breadcrumb-item active {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' : ' breadcrumb-left-divider') }}" aria-current="page">{{ __('navbar.blogs_link') }} </li>
      </ol>
    </nav> 
    <!-- Page title + filters-->
    
    <form action="{{ route('blogs.index') }}" method="get">
      <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
        <div class="col-lg-5">
          <h1 class="mb-lg-0"> {{ __('blogs.page_title') }} </h1>
        </div>
        <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-5">
          <select name="category" class="form-select">
            <option value="">{{ __('blogs.filter_all_categories') }}</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ (App::isLocale('ar') ? $category->ar_name : $category->en_name ) }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-lg-4 col-sm-7">
          <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input class="form-control ps-5" name="title" type="search" placeholder="{{ __('blogs.filter_search_placeholder') }}">
          </div>
        </div>
        </div>
    </form>
    
    <!-- Blog grid (masonry)-->
    <div class="masonry-grid mb-2 mb-md-4 pb-lg-3" data-columns="3">
      <!-- Blog item-->
      @foreach($blogs as $blog)
      <article class="masonry-grid-item">
        <div class="card border-0 bg-secondary">
          <a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
            <img class="card-img-top" src="{{ asset('upload/blogs/' . $blog->image) }}" alt="Post image">
          </a>
          <div class="card-body pb-4">
            <div class="d-flex align-items-center mb-4 mt-n1">
              <span class="fs-sm text-muted">{{ $blog->created_at->diffForHumans() }}</span>
              <span class="fs-xs opacity-20 mx-3">|</span>
              <a class="badge text-nav fs-xs border" href="#">{{ (App::isLocale('ar') ? $blog->category->ar_name :  $blog->category->en_name ) }}</a>
            </div>
            <h3 class="h4 card-title"><a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">{{ (App::isLocale('ar') ? $blog->ar_title :  $blog->en_title ) }}</a></h3>
            <p class="card-text">
              {!!  Str::substr((App::isLocale('ar') ? $blog->ar_content :  $blog->en_content ), 0, 150) !!}
            </p>
          </div>
        </div>
      </article>
      @endforeach
    </div>
    <!-- Pagination-->
    {{ $blogs->links() }}
  </div>
@endsection
