<x-layout>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Business Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">We Provide Solution On Your Business</h1>
                            <a href="{{route('contact')}}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Business Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Take Our Help To Reach The Top Level</h1>
                            <a href="{{route('contact')}}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    @include('about-brief')
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">I.T. Consulting</h3>
                    <p class="mb-0">We provide advice and guidance to businesses on how to use information technology in order to meet their business objectives.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Software Support</h3>
                    <p class="mb-0">You are welcome to explore our technical support to assist with issues you might be facing with your softwares</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Cybersecurity</h3>
                    <p class="mb-0">In a world of increasing persistent threats to technological infrastructures, you are rest-assured that your digital assets are well protected.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Network Setup Services</h3>
                    <p class="mb-0">We are available to help with your network setup and eliminate connectivity problems within your local and remote work environments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3">App Development</h3>
                    <p class="mb-0">You can count on us to create the apps you need to meet specific business requirements and multiply your productivity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item  text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Web Hosting</h3>
                    <p class="mb-0">We help you manage your online presence to ensure you are visible and always available when your clients need you online.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
</x-layout>
