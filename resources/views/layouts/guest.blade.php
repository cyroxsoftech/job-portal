<!DOCTYPE html>
<html lang="en">
@include('include.head')
<body>
    <div class="p-0 bg-white container-fluid">
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        @include('include.header')
        {{ $slot }}
        @include('include.footer')
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/static/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/static/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/static/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/static/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('static/js/app.js') }}"></script>
    <script src="{{ asset('static/js/custom.js') }}"></script>
</body>

</html>
