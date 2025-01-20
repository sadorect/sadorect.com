<head>
    <meta charset="utf-8">
    <title>Sadorect Systems</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Software Development, Web Development, Mobile Apps" name="keywords">
    <meta content="Professional Software Development Services" name="description">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Core CSS -->
    
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet">
   
    
    <!-- Fonts and Icons -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    
    <!-- Conditional CSS -->
    @if(request()->is('login'))
    <link href="{{ asset('css/login-form.css') }}" rel="stylesheet">
@endif


    <!-- Scripts -->
    
   
    
    @stack('scripts')
</head>

<!-- Topbar -->
<div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                @auth
                    
                    @if(auth()->user()->isAdmin())
        <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link">Admin Dashboard</a>
    @endif
                    <form method="POST" action="{{ route('logout')}}">
                        @csrf
                        <button class="text-body py-2 px-3 border-end"><small>Logout</small></button>
                    </form>
                @else
                    <a class="text-white py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-white py-2 px-3 border-end" href="{{ route('login')}}"><small>Login</small></a>
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
<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Brand -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('/')}}" class="text-primary text-2xl font-bold uppercase">
                    <i class="far fa-smile text-primary mr-2"></i>Sadorect
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop menu -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="flex space-x-4">
                    <a href="{{ route('/')}}" class="nav-link {{ request()->is('/') ? 'text-primary' : 'text-gray-600' }} hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ route('service')}}" class="nav-link {{ request()->is('service') ? 'text-primary' : 'text-gray-600' }} hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Service</a>
                    <a href="{{ route('portfolio')}}" class="nav-link {{ request()->is('portfolio') ? 'text-primary' : 'text-gray-600' }} hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Portfolio</a>
                    <a href="contact" class="nav-link {{ request()->is('contact') ? 'text-primary' : 'text-gray-600' }} hover:text-primary px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('/')}}" class="nav-link {{ request()->is('/') ? 'text-primary' : 'text-gray-600' }} hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{ route('service')}}" class="nav-link {{ request()->is('service') ? 'text-primary' : 'text-gray-600' }} hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Service</a>
            <a href="{{ route('portfolio')}}" class="nav-link {{ request()->is('portfolio') ? 'text-primary' : 'text-gray-600' }} hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Portfolio</a>
            <a href="contact" class="nav-link {{ request()->is('contact') ? 'text-primary' : 'text-gray-600' }} hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>
</nav>


