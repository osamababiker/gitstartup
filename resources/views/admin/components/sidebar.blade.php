<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
            <div class="position-lg-sticky top-0">
              <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
              <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
                <div class="offcanvas-body">
                  <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <img class="d-block rounded-circle mb-2" src="{{ asset('assets/img/user.png') }}" width="80" alt="Isabella Bocouse">
                    <h3 class="h5 mb-1">Osama M Babiker</h3>
                    <p class="fs-sm text-muted mb-0">osama@gitstartup.com</p>
                  </div>
                  <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Account</h4>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('admin.index') }}"><i class="ai-user-check fs-5 opacity-60 me-2"></i>Overview</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('admin.settings') }}"><i class="ai-settings fs-5 opacity-60 me-2"></i>Settings</a>
                  </nav>
                  <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Dashboard</h4>
                    <a class="nav-link fw-semibold py-2 px-0" href="account-favorites.html"><i class="ai-pen fs-5 opacity-60 me-2"></i>Stores</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="account-earnings.html"><i class="ai-code-curly fs-5 opacity-60 me-2"></i>Projects</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="account-orders.html"><i class="ai-clipboard fs-5 opacity-60 me-2"></i>Blog Posts</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="account-chat.html"><i class="ai-user-group fs-5 opacity-60 me-2"></i>Team Members</a>
                  </nav>
                  <nav class="nav flex-column"><a class="nav-link fw-semibold py-2 px-0" href="#"><i class="ai-logout fs-5 opacity-60 me-2"></i>Sign out</a></nav>
                </div>
              </div>
            </div>
          </aside>