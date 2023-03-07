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
        <li class="breadcrumb-item"><a href="/">{{ __('navbar.home_link') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('navbar.blogs_link') }} </li>
      </ol>
    </nav> 
    <!-- Page title + filters-->
    <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
      <div class="col-lg-5">
        <h1 class="mb-lg-0"> {{ __('blogs.page_title') }} </h1>
      </div>
      <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-5">
        <select class="form-select">
          <option>{{ __('blogs.filter_all_categories') }}</option>
          <option>Inspiration</option>
          <option>Brand strategy</option>
          <option>Advertisement</option>
          <option>Ecommerce</option>
          <option>Travel &amp; Vacation</option>
        </select>
      </div>
      <div class="col-lg-4 col-sm-7">
        <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
          <input class="form-control ps-5" type="search" placeholder="{{ __('blogs.filter_search_placeholder') }}">
        </div>
      </div>
    </div>
    <!-- Blog grid (masonry)-->
    <div class="masonry-grid mb-2 mb-md-4 pb-lg-3" data-columns="3">
      <!-- Blog item-->
      <article class="masonry-grid-item">
        <div class="card border-0 bg-secondary">
          <div class="card-body pb-4">
            <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">9 hours ago</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Brand strategy</a></div>
            <h3 class="h4 card-title"><a href="blog-single-v1.html">Business strategy for a brand of vintage bags</a></h3>
            <p class="card-text">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...</p>
          </div>
          <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/05.jpg" width="48" alt="Post author">
              <h6 class="ps-3 mb-0">Darlene Robertson</h6></a></div>
        </div>
      </article>
      <!-- Blog item-->
      <article class="masonry-grid-item">
        <div class="card border-0 bg-secondary"><a href="blog-single-v2.html"><img class="card-img-top" src="assets/img/blog/grid/01.jpg" alt="Post image"></a>
          <div class="card-body pb-4">
            <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">12 hours ago</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Books</a></div>
            <h3 class="h4 card-title"><a href="blog-single-v2.html">Top books for inspiration</a></h3>
            <p class="card-text">Vulputate auctor lacus imperdiet facilisi tristique nisl pulvinar porta diam duis odio</p>
          </div>
          <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Post author">
              <h6 class="ps-3 mb-0">Jenny Wilson</h6></a></div>
        </div>
      </article>
      <!-- Blog item-->
      <article class="masonry-grid-item">
        <div class="card border-0 bg-secondary"><a href="blog-single-v2.html"><img class="card-img-top" src="assets/img/blog/grid/01.jpg" alt="Post image"></a>
          <div class="card-body pb-4">
            <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">12 hours ago</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Books</a></div>
            <h3 class="h4 card-title"><a href="blog-single-v2.html">Top books for inspiration</a></h3>
            <p class="card-text">Vulputate auctor lacus imperdiet facilisi tristique nisl pulvinar porta diam duis odio</p>
          </div>
          <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Post author">
              <h6 class="ps-3 mb-0">Jenny Wilson</h6></a></div>
        </div>
      </article>
    </div>
    <!-- Pagination-->
    <div class="row gy-3 align-items-center mb-md-2 mb-xl-4">
      <div class="col col-md-12 col-12 order-md-3 order-2">
        <nav aria-label="Page navigation">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item active" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@endsection
