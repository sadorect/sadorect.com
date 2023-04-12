@include('google-ads');
    
    
    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-secondary p-5">
        <div class="row g-5">
            <div class="col-12 text-center">
                <h1 class="display-5 mb-4">Stay Updated!!!</h1>
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                  <a class="text-secondary mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                  <!--a class="text-secondary mb-2" href="about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a-->
                  <a class="text-secondary mb-2" href="service"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                  <!--a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a-->
                  <a class="text-secondary" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
              </div>
            </div>
            <!--div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="service"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                    <a class="text-secondary" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div-->
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>15 King George V Road, Onikan, lagos, Nigeria</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>webmaster@sadorect.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+234 703 453 1814</p>
            </div>
            <!--div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div-->
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <?php echo date('Y'); ?> <a class="text-secondary border-bottom" href="/">Sadorect Systems</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://sadorect.com">Sadorect</a></p>
    </div>
    <!-- Footer End -->
  
  
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>

     <!-- JAVASCRIPT -->
     <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
     <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
     <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

     <!--tinymce js-->
     <script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

     <!-- init js -->
     <script src="{{asset('assets/js/pages/form-editor.init.js')}}"></script>

     <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
  
  </html>