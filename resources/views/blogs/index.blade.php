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
      <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
          <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog </li>
          </ol>
        </nav>
        <!-- Page title + filters-->
        <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
          <div class="col-lg-5">
            <h1 class="mb-lg-0">Brain Storming </h1>
          </div>
          <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-5">
            <select class="form-select">
              <option>All categories</option>
              <option>Inspiration</option>
              <option>Brand strategy</option>
              <option>Advertisement</option>
              <option>Ecommerce</option>
              <option>Travel &amp; Vacation</option>
            </select>
          </div>
          <div class="col-lg-4 col-sm-7">
            <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control ps-5" type="search" placeholder="Enter keyword">
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
            <div class="card border-0 bg-secondary">
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">13 hours ago</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Fashion</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v3.html">The fashion for eco bags with vintage prints</a></h3>
                <p class="card-text">Non purus odio venenatis velit sed tellus sed ultrices neque adipiscing sit turpis vel nisl lacus, aenean sed luctus adipiscing ut orci molestie arcu, sapien sed felis...</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/11.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Lillia Black</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary">
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">July 16, 2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Inspiration</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v1.html">How to look for inspiration for new goals</a></h3>
                <p class="card-text">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/12.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Guy Hawkins</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary">
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">May 12, 2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Ecommerce</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v2.html">Promotion of an online store from scratch, first sales</a></h3>
                <p class="card-text">Sapien ultrices egestas at faucibus eu diam velit diam id amet nibh quam rutrum diam fermentum diam natoque scelerisque viverra molestie fames...</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">David Bocous</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary">
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">June 10, 2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Inspiration</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v3.html">Sales on social networks for the eco cosmetics</a></h3>
                <p class="card-text">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus et massa fames ac scelerisque sit commodo dignissim...</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/11.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Lillia Black</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary"><a href="blog-single-v1.html"><img class="card-img-top" src="assets/img/blog/grid/02.jpg" alt="Post image"></a>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">January 9, 2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Travel</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v1.html">Ways to travel in 2022</a></h3>
                <p class="card-text">Duis consectetur quis enim iaculis eu sagittis posuere imperdiet scelerisque</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/05.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Darlene Robertson</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary"><a href="blog-single-v2.html"><img class="card-img-top" src="assets/img/blog/grid/03.jpg" alt="Post image"></a>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">October 10, 2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Inspiration</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v2.html">Inspiration in quarantine</a></h3>
                <p class="card-text">Nec in est vel ac et odio interdum risus maecenas pulvinar potenti gravida sed</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/12.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Guy Hawkins</h6></a></div>
            </div>
          </article>
          <!-- Blog item-->
          <article class="masonry-grid-item">
            <div class="card border-0 bg-secondary">
              <div class="card-body pb-4">
                <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">December 15,  2022</span><span class="fs-xs opacity-20 mx-3">|</span><a class="badge text-nav fs-xs border" href="#">Inspiration</a></div>
                <h3 class="h4 card-title"><a href="blog-single-v3.html">Destinations to inspire and restore resources</a></h3>
                <p class="card-text">Non purus odio venenatis velit sed tellus sed ultrices neque adipiscing sit turpis vel nisl lacus, aenean sed luctus adipiscing ut orci molestie arcu, sapien sed felis...</p>
              </div>
              <div class="card-footer pt-3"><a class="d-flex align-items-center text-decoration-none pb-2" href="#"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Post author">
                  <h6 class="ps-3 mb-0">Jenny Wilson</h6></a></div>
            </div>
          </article>
        </div>
        <!-- Pagination-->
        <div class="row gy-3 align-items-center mb-md-2 mb-xl-4">
          <div class="col col-md-4 col-6 order-md-1 order-1">
            <div class="d-flex align-items-center"><span class="text-muted fs-sm">Show</span>
              <select class="form-select form-select-flush w-auto">
                <option value="6">6</option>
                <option value="9" selected>9</option>
                <option value="12">12</option>
                <option value="24">24</option>
              </select>
            </div>
          </div>
          <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
            <button class="btn btn-primary w-md-auto w-100" type="button">Load more posts</button>
          </div>
          <div class="col col-md-4 col-6 order-md-3 order-2">
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
    </main>

    <!-- Footer-->
    @include('components/footer')
