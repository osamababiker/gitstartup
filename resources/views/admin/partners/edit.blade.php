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
            <form autocomplete="off" method="post" action="{{ route('admin.partners.update', ['partner' => $partner->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mb-sm-4">
                <label for="name" class="form-label">partner name </label>
                <input type="text" value="{{ $partner->name }}" class="form-control" id="name" name="name" placeholder="Enter partner name ">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="link" class="form-label">partner link </label>
                <input type="text" value="{{ $partner->link }}" class="form-control" id="link" name="link" placeholder="Enter partner link ">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="address" class="form-label">partner address </label>
                <input type="text" value="{{ $partner->address }}" class="form-control" id="address" name="address" placeholder="Enter partner address ">
                </div>
                <div class="mb-3 mb-sm-4">
                <label for="logo" class="form-label">partner Logo</label>
                <input type="file" name="logo" class="form-control" id="logo">
                </div>
                <div class="mb-3 mb-sm-4">
                  <label for="feedback" class="form-label">partner feedback</label>
                  <textarea name="feedback" id="feedback" cols="8" rows="8" class="form-control">{{ $partner->feedback }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Edit Details</button>
            </form>
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