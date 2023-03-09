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
            <div class="">
            <form autocomplete="off" method="post" action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mb-sm-4">
                <label for="en_title" class="form-label">Post title (english)</label>
                <input type="text" value="{{ $blog->en_title }}" name="en_title" class="form-control" id="en_title" placeholder="Enter post title in english">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="ar_title" class="form-label">Post title (arabic)</label>
                <input type="text" value="{{ $blog->ar_title }}" name="ar_title" class="form-control" id="ar_title" placeholder="Enter post title in arabic">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="sub_of" class="form-label">Post Category</label>
                <select name="sub_of" id="sub_of" class="form-control">
                    <option value="{{ $blog->category->id }}">{{ $blog->category->en_name }}</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->en_name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="image" class="form-label">Post Cover Image</label>
                <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="en_description" class="form-label">Post description (english)</label>
                <textarea name="en_description" id="en_description" cols="8" rows="8" class="form-control tiny-editor">{{ $blog->en_description }}</textarea>
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="ar_description" class="form-label">Post description (arabic)</label>
                <textarea name="ar_description" id="ar_description" cols="8" rows="8" class="form-control tiny-editor">{{ $blog->ar_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Edit Details</button>
            </form>
                </div>
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
@endsection