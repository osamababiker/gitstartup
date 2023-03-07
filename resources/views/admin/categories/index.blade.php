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
                <!-- Feedback -->
                @include('admin/components/feedback')
                <!-- Orders accordion-->
                <section class="card border-0 mb-4" id="tables-color-borders">
                  <div class="card-body pb-0 d-flex justify-content-between ">
                    <h2 class="h4 mb-n2">Categories list</h2>
                    <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#addProjectModal"> <i class="ai-plus text-primary"></i> </button>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="preview8" role="tabpanel">
                      <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category name</th>
                          <th>Sub of</th>
                          <th>Created at</th>
                          <th>Settings</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <th scope="row">{{ $category->id }}</th>
                          <td>{{ $category->en_name }}</td>
                          <td> 
                            @if($category->subOf)
                              {{ $category->subOf->en_name }}
                            @else
                              -
                            @endif
                          </td>
                          <td>{{ $category->created_at->diffForHumans() }}</td>
                          <td>
                            <a  type="button" data-bs-toggle="modal" data-bs-target="#editModal_{{ $category->id }}" href="#"> <i class="ai-edit-alt text-primary"></i> </a>
                            &nbsp;&nbsp;
                            <a  type="button" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $category->id }}" href="#"> <i class="ai-trash text-primary"></i> </a>
                          </td>
                        </tr>
                        <!-- Delete modal -->
                        <div id="deleteModal_{{ $category->id }}" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> Delete Bskliat </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <h3> Are you sure you want to delete this category ? </h3>
                                <form autocomplete="off" id="deleteForm_{{ $category->id }}" method="post" action="{{ route('admin.categories.destroy') }}">
                                  @csrf
                                  <input type="hidden" name="category_id" value="{{ $category->id }}">
                                  <button type="submit" form="deleteForm_{{ $category->id }}" class="btn btn-primary">Yes sure</button>
                                  <button type="button" data-bs-dismiss="modal"  class="btn btn-dark"> No thanks </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End delete modal -->
                        <!-- Edit modal -->
                        <div id="editModal_{{ $category->id }}" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> {{ $category->en_name }} details </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <form autocomplete="off" id="editForm_{{ $category->id }}" method="post" action="{{ route('admin.categories.update') }}">
                                  @csrf
                                  <input type="hidden" name="category_id" value="{{ $category->id }}">
                                  <div class="mb-3 mb-sm-4">
                                    <label for="en_name" class="form-label">Category name (english)</label>
                                    <input type="text" class="form-control" value="{{ $category->en_name }}" name="en_name" id="en_name" placeholder="Enter project name in english">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="ar_name" class="form-label">Category name (arabic)</label>
                                    <input type="text" class="form-control" value="{{ $category->ar_name }}" name="ar_name" id="ar_name" placeholder="Enter project name in arabic">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="sub_of" class="form-label">Sub of</label>
                                    <select name="sub_of" id="sub_of" class="form-control">
                                      <option value=""></option>
                                      @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->en_name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <button type="submit" form="editForm_{{ $category->id }}" class="btn btn-primary w-100">Edit Details</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End edit modal -->
                        @endforeach
                      </div>
                      </tbody>
                    </table>
                    </div>
                      </div>
                    </div>
                  </div>
                </section>
                </div>

                <!-- Add project modal -->
                <div id="addProjectModal" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-lg"  role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4> Project details </h4>
                        <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body tab-content">
                        <form autocomplete="off" method="post" action="{{ route('admin.categories.store') }}">
                          @csrf
                          <div class="mb-3 mb-sm-4">
                            <label for="en_name" class="form-label">Category name (english)</label>
                            <input type="text" class="form-control" name="en_name" id="en_name" placeholder="Enter category name in english">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="ar_name" class="form-label">Category name (arabic)</label>
                            <input type="text" class="form-control" name="ar_name" id="ar_name" placeholder="Enter category name in arabic">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="sub_of" class="form-label">Sub of</label>
                            <select name="sub_of" id="sub_of" class="form-control">
                              <option value=""></option>
                              @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->en_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary w-100">Save Details</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End add project modal -->
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