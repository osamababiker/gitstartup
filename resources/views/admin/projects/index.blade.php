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
                    <h2 class="h4 mb-n2">Projects list</h2>
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
                          <th>Project name</th>
                          <th>Project Logo</th>
                          <th>Created at</th>
                          <th>Settings</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($projects as $project)
                        <tr>
                          <th scope="row">{{ $project->id }}</th>
                          <td>{{ $project->en_name }}</td>
                          <td> <img src="{{ asset('upload/projects/' . $project->logo) }}" width="50" height="50" alt=""> </td>
                          <td>{{ $project->created_at->diffForHumans() }}</td>
                          <td>
                            <a  type="button" data-bs-toggle="modal" data-bs-target="#editModal_{{ $project->id }}" href="#"> <i class="ai-edit-alt text-primary"></i> </a>
                            &nbsp;&nbsp;
                            <a  type="button" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $project->id }}" href="#"> <i class="ai-trash text-primary"></i> </a>
                          </td>
                        </tr>
                        <!-- Delete modal -->
                        <div id="deleteModal_{{ $project->id }}" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> Delete {{ $project->en_name }} </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <h3> Are you sure you want to delete this project ? </h3>
                                <form autocomplete="off" id="deleteForm_{{ $project->id }}" method="post" action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" form="deleteForm_{{ $project->id }}" class="btn btn-primary">Yes sure</button>
                                  <button type="button" data-bs-dismiss="modal"  class="btn btn-dark"> No thanks </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End delete modal -->
                        <!-- Edit modal -->
                        <div id="editModal_{{ $project->id }}" class="modal" tabindex="-1" role="dialog">
                          <div class="modal-dialog modal-lg"  role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4> {{ $project->en_name }} details </h4>
                                <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body tab-content">
                                <form autocomplete="off" method="post" id="editForm_{{ $project->id }}" action="{{ route('admin.projects.update', ['project' => $project->id]) }}" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3 mb-sm-4">
                                    <label for="en_name" class="form-label">Project name (english)</label>
                                    <input type="text" value="{{ $project->en_name }}" class="form-control" id="en_name" name="en_name" placeholder="Enter project name in english">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="ar_name" class="form-label">Project name (arabic)</label>
                                    <input type="text" value="{{ $project->ar_name }}" class="form-control" id="ar_name" name="ar_name" placeholder="Enter project name in arabic">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="sub_of" class="form-label">Project Category</label>
                                    <select name="sub_of" id="sub_of" class="form-control">
                                      <option value="{{ $project->category->id }}">{{ $project->category->en_name }}</option>
                                      @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->en_name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="logo" class="form-label">Project Logo</label>
                                    <input type="file" name="logo" class="form-control" id="logo">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="image" class="form-label">Project Main Image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="en_description" class="form-label">Project description (english)</label>
                                    <textarea name="en_description" id="en_description" cols="8" rows="8" class="form-control tiny-editor">{{ $project->en_description }}</textarea>
                                  </div>
                                  <div class="mb-3 mb-sm-4">
                                    <label for="ar_description" class="form-label">Project description (arabic)</label>
                                    <textarea name="ar_description" id="ar_description" cols="8" rows="8" class="form-control tiny-editor">{{ $project->ar_description }}</textarea>
                                  </div>
                                  <button type="submit" form="editForm_{{ $project->id }}" class="btn btn-primary w-100">Edit Details</button>
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
                        <form autocomplete="off" method="post" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3 mb-sm-4">
                            <label for="en_name" class="form-label">Project name (english)</label>
                            <input type="text" class="form-control" name="en_name" id="en_name" placeholder="Enter project name in english">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="ar_name" class="form-label">Project name (arabic)</label>
                            <input type="text" class="form-control" name="ar_name" id="ar_name" placeholder="Enter project name in arabic">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="sub_of" class="form-label">Project Category</label>
                            <select name="sub_of" id="sub_of" class="form-control">
                              @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->en_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="logo" class="form-label">Project Logo</label>
                            <input type="file" name="logo" class="form-control" id="logo">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="image" class="form-label">Project Main Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="en_description" class="form-label">Project description (english)</label>
                            <textarea name="en_description" id="en_description" cols="8" rows="8" class="form-control tiny-editor"></textarea>
                          </div>
                          <div class="mb-3 mb-sm-4">
                            <label for="ar_description" class="form-label">Project description (arabic)</label>
                            <textarea name="ar_description" id="ar_description" cols="8" rows="8" class="form-control tiny-editor"></textarea>
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