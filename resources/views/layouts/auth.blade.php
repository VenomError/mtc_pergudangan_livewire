<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from digiboard-html.codebasket.xyz/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 03:48:17 GMT -->

<head>
    @include('components.public.meta')
    <title>
        @if (isset($title))
            {{ Str::ucfirst($title) . ' - ' . env('APP_NAME') }}
        @else
            {{ env('APP_NAME') }}
        @endif
    </title>

    @include('components.public.link')

    @stack('style')
</head>

<body class="light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- theme color hidden button -->
    <button class="header-btn theme-color-btn d-none"><i class="fa-light fa-sun-bright"></i></button>
    <!-- theme color hidden button -->

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo">
                </div>
            </div>
            <div class="bottom">
                @yield('form')
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    @include('components.public.script')
</body>

<!-- Mirrored from digiboard-html.codebasket.xyz/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 03:48:17 GMT -->

</html>
