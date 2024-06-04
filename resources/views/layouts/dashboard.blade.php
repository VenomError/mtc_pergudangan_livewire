<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

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
</head>

<body class="body-padding body-p-top dark-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    @include('components.navigation.header')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('components.navigation.sidebar-profile')
    <!-- profile right sidebar end -->

    {{-- <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div> --}}

    <!-- main sidebar start -->
    @include('components.navigation.sidebar-main')
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        @if (isset($breadCrump))
        <div class="dashboard-breadcrumb mb-25">
            <h2>{{ $breadCrump }}</h2>
            @yield('breadCrump')
        </div>

        @endif
        @yield('content')
        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">{{ env('APP_NAME') }}</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    @include('components.public.script')

</body>


</html>