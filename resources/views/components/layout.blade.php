@include('components/head')

    <!-- Page loading spinner-->
    @include('components/loading')

    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Navbar.-->
      @include('components/navbar')

      <!-- Page content.-->
      @yield('content')

      <!-- Contact us form.-->
      @include('components/contact')
    </main>

    <!-- Footer.-->
@include('components/footer')

