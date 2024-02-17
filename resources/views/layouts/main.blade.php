<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('style.css')
</head>

<body>
    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <div class="layout-horizontal">
                <header class="mb-3">
                    <div class="header-top">
                        <div class="container">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('dist/assets/compiled/svg/logo.svg')}}" alt="Logo"></a>
                            </div>
                            <div class="header-top-right">
                                <div class="dropdown">
                                    <a href="#" id="topbarUserDropdown"
                                        class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="avatar avatar-md2">
                                            <img src="{{ asset('dist/assets/compiled/jpg/1.jpg')}}" alt="Avatar">
                                        </div>
                                        <div class="text">
                                            <h6 class="user-dropdown-name">John Ducky</h6>
                                            <p class="user-dropdown-status text-sm text-muted">Member</p>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                        aria-labelledby="topbarUserDropdown">
                                        <li><a class="dropdown-item" href="#">My Account</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="auth-login.html">Logout</a></li>
                                    </ul>
                                </div>
                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>

                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
            </div>
            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('style.js')
</body>

</html>
