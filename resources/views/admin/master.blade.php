@include('admin.header')
    <body class="sb-nav-fixed">
@include('admin.navbar')
        <div id="layoutSidenav">
@include('admin.sidebar')
            <div id="layoutSidenav_content">
               @yield('content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
 @include('admin.footer')