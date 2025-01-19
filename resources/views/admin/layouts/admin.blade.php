<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sadorect Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Admin Template CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin.css')}}" rel="stylesheet">
</head>

<body data-sidebar="dark">
    <!-- Left Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <div class="page-content">
            <!-- Top Navigation -->
            @include('admin.partials.topnav')
            
            <!-- Page Content -->
            <div class="container-fluid">
                {{$slot}}
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>
</html>
