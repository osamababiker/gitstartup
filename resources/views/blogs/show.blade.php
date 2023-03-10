@extends('components/layout')
@section('title', $blog->en_title )
@section('description', $blog->page_description)
@section('keywords', $blog->page_key_words)

@section('content')
  <!-- Page content-->
  <!-- Container-->
  <section class="container pt-5 mt-5">
    <!-- Breadcrumb-->
    <nav aria-label="breadcrumb">
      <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
        <li class="breadcrumb-item {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' :  ' breadcrumb-left-divider') }}"><a href="/">{{ __('navbar.home_link') }}</a></li>
        <li class="breadcrumb-item active {{ (App::isLocale('ar') ?  ' breadcrumb-right-divider' :  ' breadcrumb-left-divider') }}" aria-current="page"><a href="{{ route('blogs.index') }}">{{ __('navbar.blogs_link') }}</a></li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
        <!-- Post title + post meta-->
        <h1 class="pb-2 pb-lg-3"> {{ (App::isLocale('ar') ? $blog->ar_title :  $blog->en_title ) }} </h1>
        <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
          <div class="d-flex align-items-center mb-4 me-4">
            <span class="fs-sm me-2"> {{ __('blogs.author') }} : </span>
            <a class="nav-link position-relative fw-semibold p-0" href="#author" data-scroll data-scroll-offset="80">{{ __('general.company_name') }}
              <span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span>
            </a>
          </div>
          <div class="d-flex align-items-center mb-4"><span class="fs-sm me-2">{{ __('blogs.share_links') }}:</span>
            <div class="d-flex">
              <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="ai-instagram"></i></a>
              <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="ai-facebook"></i></a>
              <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram"><i class="ai-telegram fs-sm"></i></a>
              <a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="ai-twitter"></i></a>
            </div>
          </div>
        </div>
        <!-- Post content-->
        <p class="fs-lg pt-2 pt-sm-3"> {!! (App::isLocale('ar') ? $blog->ar_content :  $blog->en_content ) !!} </p>

        <!-- Comments-->
        <div class="pt-4 pt-xl-5 mt-4" id="comments">
          <h2 class="h1 py-lg-1 py-xl-3"> {{ $comments->count() }} {{ __('blogs.comments_title') }} </h2>
          <!-- Comment-->
          @foreach($comments as $comment)
          <div class="border-bottom py-4 mt-2 mb-4">
            <div class="d-flex align-items-center pb-1 mb-3">
              <img class="rounded-circle" src="{{ asset('assets/img/user.png') }}" width="48" alt="Comment author">
              <div class="{{ (App::isLocale('ar') ? ' pe-3' :  ' ps-3' ) }}">
                <h6 class="mb-0">{{ $comment->name }}</h6>
                <span class="fs-sm text-muted">{{ $comment->created_at->diffForHumans() }}</span>
              </div>
            </div>
            <p class="pb-2 mb-0">{!! $comment->comment !!}</p>
          </div>
          @endforeach
          <!-- Comment form-->
          <div class="card border-0 bg-secondary pt-2 p-md-2 p-xl-3 p-xxl-4 mt-n3 mt-md-0 mb-5">
            <div class="card-body">
              @if(session()->has('feedback'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                   {{session()->get('feedback')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <h2 class="pb-2 pb-lg-3 pb-xl-4">{{ __('blogs.comments_form_title') }}</h2>
              <form class="row needs-validation g-4" novalidate method="post" action="{{ route('blogs.postComments') }}">
                @csrf
                <input type="hidden" name="blog_id" value="{{ $blog->id }}" />
                <div class="col-sm-6">
                  <label class="form-label" for="c-name">{{ __('blogs.comments_form_name_label') }}</label>
                  <input class="form-control" name="name" type="text" placeholder="{{ __('blogs.comments_form_name_placeholder') }}" required id="c-name">
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="c-email">{{ __('blogs.comments_form_email_label') }}</label>
                  <input class="form-control" name="email" type="email" placeholder="{{ __('blogs.comments_form_email_placeholder') }}" required id="c-email">
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
                <div class="col-12">
                  <label class="form-label" for="c-comment">{{ __('blogs.comments_form_comment_label') }}</label>
                  <textarea class="form-control" name="comment" rows="4" placeholder="{{ __('blogs.comments_form_comment_placeholder') }}" required id="c-comment"></textarea>
                  <div class="invalid-feedback">Please enter a comment message!</div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">{{ __('blogs.comments_form_submit_button') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Sidebar (offcanvas on sreens < 992px)-->
      <aside class="col-lg-3 offset-xl-1">
        <div class="offcanvas-lg offcanvas-end" id="sidebar">
          <div class="offcanvas-header">
            <h4 class="offcanvas-title">{{ __('blogs.sidebar') }}</h4> 
            <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
          </div>
          <div class="offcanvas-body">
            <!-- Search box-->
            <div class="position-relative mb-4 mb-lg-5"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control ps-5" type="search" placeholder="{{ __('blogs.filter_search_placeholder') }}">
            </div>
            <!-- Popular posts-->
            <h4 class="pt-1 pt-lg-0 mt-lg-n2"> {{ __('blogs.more_articals') }} :</h4>
            <div class="mb-lg-5 mb-4">
              @foreach($blogs as $blog)
                <article class="position-relative pb-2 mb-3 mb-lg-4">
                  <img class="rounded-5" src="{{ asset('upload/blogs/' . $blog->image) }}" alt="Post image">
                  <h5 class="h6 mt-3 mb-0">
                    <a class="stretched-link" href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
                      {{ (App::isLocale('ar') ? $blog->ar_title :  $blog->en_title ) }}
                    </a>
                  </h5>
                </article>
              @endforeach
            </div>
          </div>
        </div>
      </aside>
    </div>
  </section>
  <!-- Sidebar toggle button-->
  <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><i class="ai-layout-column me-2"></i>Sidebar</button>
@endsection
