<!DOCTYPE html>
<html lang="en">
    @include('header')
    <body>
        <!-- Main Content -->
        {{$slot}}

        <!-- Footer Content -->
        
            @include('footer')
        

        <!-- jQuery must load first -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!-- Bootstrap Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery Dependent Plugins -->
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- TinyMCE Editor -->
        <script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/form-editor.init.js')}}"></script>

        <!-- Custom Scripts -->
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>
