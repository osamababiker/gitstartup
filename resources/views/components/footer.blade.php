<footer class="footer bg-secondary pt-4 pb-2 pb-md-5 pt-sm-5">
      <div class="container-fluid pb-1 pb-md-0 px-md-5">
        <div class="dark-mode bg-dark rounded-5 position-relative overflow-hidden w-100 py-5 px-3 px-sm-4 px-xl-5 mx-auto" style="max-width: 1660px;">
          <div class="position-absolute top-50 start-50 translate-middle" style="width: 1664px;">
            <img src="{{ asset('assets/img/pexels-bg.jpg') }}" alt="footer background">
          </div>
          <div class="bg-black position-absolute top-0 start-0 w-100 h-100" style="opacity: 50%;"></div>
          <div class="container position-relative zindex-2 pt-md-3 pt-lg-4 pt-xl-5 pb-2">
            <div class="row pb-2">
              <div class="col-lg-4 col-xxl-3 pb-2 pb-lg-0 mb-4 mb-lg-0">
                <div class="navbar-brand text-light py-0 me-0 pb-1 mb-3">
                   Git Startup
                  </div>
                <p class="fs-sm mb-4">Tellus non diam morbi quam vel venenatis proin sed dolor elementum nunc</p>
                <div class="input-group input-group-sm rounded-pill">
                  <input class="form-control" type="text" placeholder="Email address">
                  <button class="btn btn-primary rounded-pill" type="button">Subscribe</button>
                </div> 
              </div>
              <div class="col-sm-4 col-lg-2 offset-lg-1 offset-xl-2 offset-xxl-3 mb-4 mb-sm-0">
                <h6 class="fw-bold">Useful links</h6>
                <ul class="nav flex-column fs-sm">
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">About us</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">our Projects</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Brain Storming</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
                <h6 class="fw-bold">Others links</h6>
                <ul class="nav flex-column fs-sm">
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Terms of service</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="#">Privacy policy</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-lg-3 col-xl-2">
                <h6 class="fw-bold">Contact us</h6>
                <ul class="nav flex-column fs-sm">
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="tel:+15262200459">+ 1 526 220 0459</a></li>
                  <li class="nav-item"><a class="nav-link fw-normal px-0 py-1" href="tel:+15262200444">+ 1 526 220 0444</a></li>
                </ul>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between pt-4 pt-md-5 mt-2 mt-md-0 mt-lg-2 mt-xl-4">
              <div class="d-flex justify-content-center order-sm-2 me-md-n2"><a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
              <p class="fs-sm order-sm-1 text-center text-sm-start pt-4 pt-sm-0 mb-0 me-4"><span class="opacity-70">&copy; All rights reserved Git Startup</span></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
  

      <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
      <!-- Main theme script-->
      <script src="{{ asset('assets/js/theme.min.js') }}"></script>
      <script defer src="{{ asset('assets/js/scripts.js') }}"></script>
   
      <script src="https://cdn.tiny.cloud/1/z1g10ihgk5hqdo3ihtmvjy681awr1j6qlzv2g5j60rqzvhvc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ]
        });
      </script>
    
  </body>
</html>