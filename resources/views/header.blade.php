<head>
    <meta charset="utf-8">
    <title>Sadorect Systems</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Software Development, Web Development, Mobile Apps" name="keywords">
    <meta content="Professional Software Development Services" name="description">

    <!-- Core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet">
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    
    <!-- Conditional CSS -->
    @if(request()->is('login'))
        <link href="css/login-form.css" rel="stylesheet">
    @endif

    <!-- Scripts -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4048280593346646" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/smart-ads/js/smart-banner.min.js') }}"></script>
    @stack('scripts')
</head>

<!-- Topbar -->
<div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                @auth
                    <a class="text-body py-2 pe-3 border-end" href="/create-post"><small>Create Post</small></a>
                    <form method="POST" action="{{ route('logout')}}">
                        @csrf
                        <button class="text-body py-2 px-3 border-end"><small>Logout</small></button>
                    </form>
                @else
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                @endauth
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@sadorect.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+234 703 453 1814</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{ route('/')}}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="far fa-smile text-primary me-2"></i>Sadorect</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="{{ route('/')}}" class="nav-item nav-link {{ request()->is('/') ? 'active' : ''}}">Home</a>
            <a href="{{ route('service')}}" class="nav-item nav-link {{ request()->is('service') ? 'active' : ''}}">Service</a>
            <a href="contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : ''}}">Contact</a>
        </div>
    </div>
</nav>
