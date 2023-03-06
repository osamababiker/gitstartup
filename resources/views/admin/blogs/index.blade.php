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
            <div class="d-flex align-items-center mb-4">
              <select class="form-select ms-auto" style="max-width: 200px;">
                <option value="All tme">For all time</option>
                <option value="Last week">Last week</option>
                <option value="Last month">Last month</option>
                <option value="Last month">Last month</option>
                <option value="In progress">In progress</option>
                <option value="Canceled">Canceled</option>
                <option value="Delivered">Delivered</option>
              </select>
            </div>
            <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
              <div class="card-body pb-4">
                <!-- Orders accordion-->
                <section class="card border-0 mb-4" id="tables-color-borders">
                  <div class="card-body pb-0 d-flex justify-content-between ">
                    <h2 class="h4 mb-n2">Blogs list</h2>
                    <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#addPostModal"> <i class="ai-plus text-primary"></i> </button>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="preview8" role="tabpanel">
                      <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Category</th>
                          <th>Settings</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Business strategy for a brand of vintage bags</td>
                          <td> <img src="{{ asset('assets/img/python.svg') }}" width="50" height="50" alt=""> </td>
                          <td>Post Category</td>
                          <td>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#editModalId" href="#"> <i class="ai-edit-alt text-primary"></i> </a>
                            &nbsp;&nbsp;
                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModalId" href="#"> <i class="ai-trash text-primary"></i> </a>
                          </td>
                        </tr>
                        <!-- Delete modal -->
                        <div id="deleteModalId" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> Delete Post </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <h3> Are you sure you want to delete this post ? </h3>
                                <form autocomplete="off">
                                  <input type="hidden" name="projectId">
                                  <button type="submit" class="btn btn-primary">Yes sure</button>
                                  <button type="button" data-bs-dismiss="modal"  class="btn btn-dark"> No thanks </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End delete modal -->
                        <!-- Edit modal -->
                        <div id="editModalId" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> Post details </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <form autocomplete="off">
                                  <div class="mb-3 mb-sm-4">
                                    <label for="en_title" class="form-label">Post title (english)</label>
                                    <input type="text" class="form-control" id="en_title" placeholder="Enter post title in english">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="ar_title" class="form-label">Post name (arabic)</label>
                                    <input type="text" class="form-control" id="ar_title" placeholder="Enter post title in arabic">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="sub_of" class="form-label">Post Category</label>
                                    <select name="sub_of" id="sub_of" class="form-control">
                                      <option value="education">education</option>
                                      <option value="job-creation">job creation</option>
                                    </select>
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="image" class="form-label">Post Cover Image</label>
                                    <input type="file" class="form-control" id="image">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="en_description" class="form-label">Post description (english)</label>
                                    <textarea name="en_description" id="en_description" cols="8" rows="8" class="form-control"></textarea>
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="ar_description" class="form-label">Post description (arabic)</label>
                                    <textarea name="ar_description" id="ar_description" cols="8" rows="8" class="form-control"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary w-100">Edit Details</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End edit modal -->
                      </div>
                      </tbody>
                      </table>
                      </div>
                      </div>
                    </div>
                  </div>
                </section>
                </div>

                <!-- Add new post modal -->
                <div id="addPostModal" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-lg"  role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4> Post details</h4>
                        <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body tab-content">
                        <form autocomplete="off">
                          <div class="mb-3 mb-sm-4">
                            <label for="en_title" class="form-label">Post title (english)</label>
                            <input type="text" class="form-control" id="en_title" placeholder="Enter post title in english">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="ar_title" class="form-label">Post name (arabic)</label>
                            <input type="text" class="form-control" id="ar_title" placeholder="Enter post title in arabic">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="sub_of" class="form-label">Post Category</label>
                            <select name="sub_of" id="sub_of" class="form-control">
                              <option value="education">education</option>
                              <option value="job-creation">job creation</option>
                            </select>
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="image" class="form-label">Post Cover Image</label>
                            <input type="file" class="form-control" id="image">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="en_description" class="form-label">Post description (english)</label>
                            <textarea name="en_description" id="en_description" cols="8" rows="8" class="form-control"></textarea>
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="ar_description" class="form-label">Post description (arabic)</label>
                            <textarea name="ar_description" id="ar_description" cols="8" rows="8" class="form-control"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary w-100">Save Details</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End add post modal -->

                <!-- Pagination-->
                <div class="d-sm-flex align-items-center pt-4 pt-sm-5">
                  <nav class="order-sm-2 ms-sm-auto mb-4 mb-sm-0" aria-label="Orders pagination">
                    <ul class="pagination pagination-sm justify-content-center">
                      <li class="page-item active" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
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