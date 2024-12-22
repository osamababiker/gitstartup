@extends('components/layout')
@section('title', 'Admin Panel' )
@section('content')
  <!-- Page content-->
  <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
      <!-- Sidebar (offcanvas on sreens < 992px)-->
      @include('admin/components/sidebar')
      <!-- Page content-->
      <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
          <div class="card-body pb-4">
            <!-- Feedback -->
            @include('admin/components/feedback')
            <!-- Orders accordion-->
            <section class="card border-0 mb-4" id="tables-color-borders">
              <div class="card-body pb-0 d-flex justify-content-between ">
                <h2 class="h4 mb-n2">projects list</h2>
                <a class="btn btn-light" href="{{ route('admin.projects.create') }}" > <i class="ai-plus text-primary"></i> </a>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="preview8" role="tabpanel">
                  <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>name</th>
                      <th>link</th>
                      <th>progress</th>
                      <th>logo</th>
                      <th>video url</th>
                      <th>Settings</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($projects as $project)
                    <tr>
                      <th scope="row">{{ $project->id }}</th>
                      <td>{{ $project->en_name }}</td>
                      <td>
                        <a href="{{ $project->link }}">{{ $project->link }}</a>
                      </td>
                      <td>{{ $project->progress }}</td>
                      <td> <img src="{{ asset('upload/projects/' . $project->logo) }}" width="50" height="50" alt=""> </td>
                      <td> {{ $project->video_url }} </td>
                      <td>
                        <a  href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"> <i class="ai-edit-alt text-primary"></i> </a>
                        &nbsp;&nbsp;
                        <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $project->id }}" href="#"> <i class="ai-trash text-primary"></i> </a>
                      </td>
                    </tr>
                    <!-- Delete modal -->
                    <div id="deleteModal_{{ $project->id }}" class="modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-lg"  role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4> Delete Post </h4>
                            <button class="btn-close text-primary" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body tab-content">
                            <h3> Are you sure you want to delete this Project ? </h3>
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

            <!-- Pagination-->
            {{ $projects->links() }}

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Divider for dark mode only-->
  <hr class="d-none d-dark-mode-block">
  <!-- Sidebar toggle button-->
  <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
@endsection