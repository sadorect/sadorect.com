

<!-- Footer Start -->
<div class="container-fluid bg-primary text-secondary p-5">
    <div class="row g-5">
        <div class="col-12 text-center">
            <h1 class="display-5 mb-4">Stay Updated!</h1>
            <form class="mx-auto" style="max-width: 600px;" method="POST" action="">
                @csrf
                <div class="input-group">
                    <input type="email" class="form-control border-white p-3" placeholder="Your Email" required>
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
                <a class="text-secondary mb-2" href="service"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                <a class="text-secondary" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">Get In Touch</h3>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>11b, Fatai Arobieke Street, Off Admiralty Road, Lekki Phase 1, Lagos</p>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>47A, King George Road, Onikan, Lagos</p>
            <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@sadorect.com</p>
            <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+234 703 453 1814</p>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <p class="m-0">&copy; <?php echo date('Y'); ?> <a class="text-secondary border-bottom" href="/">Sadorect Systems</a>. All Rights Reserved.</p>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- Ad Component placed after main footer content -->
