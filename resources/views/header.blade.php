<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sadorect Systems</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<!-- Bootstrap Css -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ request()->is('login') ? 'css/login-form.css' : ''}}" rel="stylesheet">
</head>
<div>
  <!-- Topbar Start -->
  <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
      <div class="row gx-0">

        @auth
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
              <a class="text-body py-2 pe-3 border-end" href="/create-post"><small>Create Post</small></a>
              <form method="POST" action="{{ route('logout')}}">
                @csrf
              <button class="text-body py-2 px-3 border-end"><small>Logout</small></button>
              </form>
              <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
              <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
              <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
          </div>
      </div>
        @else
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
              <!--a class="text-body py-2 pe-3 border-end" href="{{ route('login')}}"><small>Login</small></a-->
              <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
              <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
              <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
              <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
          </div>
      </div>
        @endauth

          
          <div class="col-md-6 text-center text-lg-end">
              <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                  <div class="me-3 pe-3 border-end py-2">
                      <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@sadorect.com</a></p>
                  </div>
                  <div class="py-2">
                      <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+234 703 453 1814</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
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
              <!--a href="{{ route('about')}}" class="nav-item nav-link {{ request()->is('about') ? 'active' : ''}}">About</a-->
              <a href="{{ route('service')}}" class="nav-item nav-link {{ request()->is('service') ? 'active' : ''}}">Service</a>
              <!--a href="{{ route('blog')}}" class="nav-item nav-link {{ request()->is('blog') ? 'active' : ''}}">Blog</a-->
              <!--div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle {{ request()->is('pages') ? 'active' : ''}}" data-bs-toggle="dropdown">Pages</a>
                  <div class="dropdown-menu m-0">
                      <a href="feature" class="dropdown-item">Features</a>
                      <a href="quote" class="dropdown-item">Quote Form</a>
                      <a href="team" class="dropdown-item">The Team</a>
                      <a href="testimonial" class="dropdown-item">Testimonial</a>
                  </div>
              </div-->
              <a href="contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : ''}}">Contact</a>
          </div>
      </div>
  </nav>
  <!-- Navbar End -->