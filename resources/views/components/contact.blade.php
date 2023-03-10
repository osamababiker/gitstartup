<!-- contact us section -->
<section class="bg-secondary pt-5 pb-4" id="contact-us"> 
  <div class="container py-lg-2 py-xl-4 py-xxl-5">
    @if(session()->has('feedback'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
          {{session()->get('feedback')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
      <div class="col-lg-5 mb-5 mb-lg-0">
        <h2 class="h1">{{ __('contact.contact_us_title') }}</h2>
        <p class="pb-1 pb-md-0 mb-4 mb-md-5">{{ __('contact.contact_us_bio') }}</p>
        <form class="needs-validation row g-4" novalidate method="post" action="{{ route('postContactMessage') }}">
          @csrf
          <div class="col-lg-10">
            <label class="form-label fs-base" for="name">{{ __('contact.input_name_label') }}</label>
            <input class="form-control form-control-lg" name="name" type="text" placeholder="{{ __('contact.input_name_placeholder') }}" required id="name">
            <div class="invalid-feedback">Please enter your name!</div>
          </div>
          <div class="col-lg-10">
            <label class="form-label fs-base" for="email">{{ __('contact.input_email_label') }}</label>
            <input class="form-control form-control-lg" name="email" type="email" placeholder="{{ __('contact.input_email_placeholder') }}" required id="email">
            <div class="invalid-feedback">Please provide a valid email address!</div>
          </div>
          <div class="col-lg-10">
            <label class="form-label fs-base" for="message">{{ __('contact.input_message_label') }}</label>
            <textarea class="form-control form-control-lg" name="message" placeholder="{{ __('contact.input_message_placeholder') }}" rows="4" required id="message"></textarea>
            <div class="invalid-feedback">Please write your message!</div>
          </div>
          <div class="col-lg-10">
            <button class="btn btn-lg btn-dark rounded-pill mt-2" type="submit">{{ __('contact.submit_button') }}</button>
          </div>
        </form>
      </div>
      <div class="col-lg-7 col-xl-6 offset-xl-1 d-991-none">
        <img src="{{ asset('assets/img/undraw_voice_control_ofo1.svg') }}" alt="contact us">
      </div>
    </div>
  </div>
</section>