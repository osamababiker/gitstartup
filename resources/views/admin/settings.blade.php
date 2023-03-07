@include('../components/head')
  <!-- Body-->
  <body class="bg-secondary">
    <!-- Page loading spinner-->
    @include('../components/loading')
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      @include('../components/navbar')
      <!-- Page content-->
      <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">
          <!-- Sidebar (offcanvas on sreens < 992px)-->
          @include('admin/components/sidebar')
          <!-- Page content-->
          <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <!-- Basic info-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown"><a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="width: 80px; height: 80px; background-image: url({{ asset('assets/img/user.png') }});"><span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)"><i class="ai-camera"></i></span></a>
                    <div class="dropdown-menu my-1"><a class="dropdown-item fw-normal" href="#"><i class="ai-camera fs-base opacity-70 me-2"></i>Upload new photo</a><a class="dropdown-item text-danger fw-normal" href="#"><i class="ai-trash fs-base me-2"></i>Delete photo</a></div>
                  </div>
                  <div class="ps-3">
                    <h3 class="h6 mb-1">Profile picture</h3>
                    <p class="fs-sm text-muted mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                  </div>
                </div>
                <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                  <div class="col-sm-6">
                    <label class="form-label" for="fn">First name</label>
                    <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}" id="fn">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" id="email">
                  </div>
                  <div class="col-12 d-flex justify-content-end pt-3">
                    <button class="btn btn-secondary" type="button">Cancel</button>
                    <button class="btn btn-primary ms-3" type="submit">Save changes</button>
                  </div>
                </div>
              </div>
            </section>
            <!-- Password-->
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i class="ai-lock-closed text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Password change</h2>
                </div>
                <div class="row align-items-center g-3 g-sm-4 pb-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="current-pass">Current password</label>
                    <div class="password-toggle">
                      <input class="form-control" type="password" value="hidden@password" id="current-pass">
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6"><a class="d-inline-block fs-sm fw-semibold text-decoration-none mt-sm-4" href="account-password-recovery.html">Forgot password?</a></div>
                  <div class="col-sm-6">
                    <label class="form-label" for="new-pass">New password</label>
                    <div class="password-toggle">
                      <input class="form-control" type="password" id="new-pass">
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="confirm-pass">Confirm new password</label>
                    <div class="password-toggle">
                      <input class="form-control" type="password" id="confirm-pass">
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="alert alert-info d-flex my-3 my-sm-4"><i class="ai-circle-info fs-xl me-2"></i>
                  <p class="mb-0">Password must be minimum 8 characters long - the more, the better.</p>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button class="btn btn-secondary" type="button">Cancel</button>
                  <button class="btn btn-primary ms-3" type="button">Save changes</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <!-- Divider for dark mode only-->
      <hr class="d-none d-dark-mode-block">
      <!-- Sidebar toggle button-->
      <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
    </main>
    <!-- Footer-->
    @include('../components/footer')