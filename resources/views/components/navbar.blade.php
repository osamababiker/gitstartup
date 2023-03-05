<header class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
          <a class="navbar-brand pe-sm-3" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Git Startup Logo">
          </a>
          <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
            <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
            
            <form action="{{ route('changeLang') }}" method="post" class="mx-2" id="changeLangForm">
              @csrf 
              @if(session()->get('locale') == 'en')
                <input type="hidden" name="lang" value="ar">
              @else 
                <input type="hidden" name="lang" value="en">
              @endif
              <a onclick="changeLang()" class="nav-link" href="javascript:void()"> {{ session()->get('locale') == 'en' ? 'ع' : 'A' }} </a>
            </form>
          </div>
          <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">{{ __('home.nav_home') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">Our Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">Brain Storming</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#contact-us">Contact Us</a>
              </li> 
            </ul>
          </nav>
        </div>
      </header>