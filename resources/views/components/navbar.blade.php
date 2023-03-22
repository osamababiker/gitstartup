<header class="navbar navbar-expand-lg fixed-top bg-light"> 
  <div class="container">
    <a class="navbar-brand ps-sm-3" href="/">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Git Startup Logo">
    </a>
    <div class="form-check form-switch mode-switch order-lg-2 {{ (App::isLocale('ar') ? ' ms-3 ms-lg-4 me-auto' : ' me-3 me-lg-4 ms-auto') }}" data-bs-toggle="mode">
      <form action="{{ route('changeLang') }}" method="post" class="mx-2" id="changeLangForm">
        @csrf
        @if(session()->get('locale') == 'en' || app()->getLocale() == 'en')
          <input type="hidden" name="lang" value="ar">
          <a onclick="changeLang()" class="nav-link" href="javascript:void()">
            <img src="{{ asset('assets/img/saudi-arabia.png') }}" class="pt-1" width="20" height="20" alt="العربية">
          </a>
        @else
          <input type="hidden" name="lang" value="en">
          <a onclick="changeLang()" class="nav-link" href="javascript:void()">
            <img src="{{ asset('assets/img/united-kingdom.png') }}" class="pt-1" width="20" height="20" alt="english">
          </a>
        @endif 
      </form>
      <input class="form-check-input" type="checkbox" id="theme-mode">
      <label class="form-check-label {{ (App::isLocale('ar') ? 'form-check-label-right' : '') }}" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
      <label class="form-check-label {{ (App::isLocale('ar') ? 'form-check-label-right' : '') }}" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
    </div>
    <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
    <nav class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav navbar-nav-scroll {{ (App::isLocale('ar') ?  'ms-auto' : 'me-auto' ) }}" style="--ar-scroll-height: 520px;">
        <li class="nav-item {{ (session()->get('current_page') == 'home' ? ' active' : '') }}">
          <a class="nav-link" href="{{ route('home') }}">{{ __('navbar.home_link') }}</a>
        </li>
        <li class="nav-item {{ (session()->get('current_page') == 'about' ? ' active' : '') }}">
          <a class="nav-link" href="{{ route('about') }}">{{ __('navbar.about_link') }}</a>
        </li>
        <li class="nav-item {{ (session()->get('current_page') == 'projects' ? ' active' : '') }}">
          <a class="nav-link" href="{{ route('projects.index') }}">{{ __('navbar.projects_link') }}</a>
        </li>
        <li class="nav-item {{ (session()->get('current_page') == 'blogs' ? ' active' : '') }}">
          <a class="nav-link" href="{{ route('blogs.index') }}">{{ __('navbar.blogs_link') }}</a>
        </li>
        <li class="nav-item {{ (session()->get('current_page') == 'partnership' ? ' active' : '') }}">
          <a class="nav-link" href="{{ route('partnership') }}">{{ __('navbar.partnership_link') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#contact-us">{{ __('navbar.contact_link') }}</a>
        </li>
      </ul>
    </nav>
  </div>
</header>