<!doctype html>
<html lang="en"  dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="E-Administrasi Fakultas Pertanian, Sains dan Teknologi">
    <meta name="author" content="Akademik Fakultas Pertanian Sains dan Teknologi">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/assets/images/brand/favicon.ico') }}"> 
 
     <!-- Main Theme Js -->
     <script src="{{ asset('template/assets/js/authentication-main.js') }}"></script>
 
     <!-- TITLE -->
     <title>@yield('title', 'E-Administrasi Fakultas Pertanian Sains dan Teknologi') </title>
 
     <!-- BOOTSTRAP CSS -->
     <link id="style" href="{{ asset('template/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
     <!-- STYLE CSS -->
     <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">
 
     <!--- FONT-ICONS CSS -->
     <link href="{{ asset('template/assets/css/icons.css') }}" rel="stylesheet">


</head>

<body class="app sidebar-mini ltr login-img">
    
   <!-- Start Switcher -->
    @include('default.switcher')
<!-- End Switcher -->

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- PAGE -->
        <div class="page">

            <!-- CONTAINER OPEN -->
            <div class="">
                <div class="text-center">
                    <a href="index.html"><img src="{{ asset('template/assets/images/brand/desktop-dark.png') }}" class="header-brand-img" alt=""></a>
                </div>
            </div>
            <div class="container-lg">
                <div class="row justify-content-center mt-4 mx-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-body p-sm-6">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Sign In</h4>
                                    <p>Masukkan akunmu untuk melanjutkan.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                            <input class="form-control ms-0" type="email" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                            <div >
                                                <input type="password" class="form-control" id="input-password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="d-flex mb-3">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label tx-15" for="flexCheckDefault">
                                                    Remember me
                                                </label>
                                            </div>
                                            {{-- <div class="ms-auto">
                                                <a href="forgot-password.html" class="tx-primary ms-1 tx-13">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="d-grid mb-3">
                                            <a href="index.html" class="btn btn-primary"> Login</a>
                                        </div>
                                        <div class="text-center">
                                            <p class="mb-0 tx-14">Belum mempunyai akun ? 
                                                <a href="{{ url('register') }}" class="tx-primary ms-1 text-decoration-underline">Daftar Disini !</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
        <!-- End PAGE -->


    </div>
    <!-- Custom-Switcher JS -->
    <script src="{{ asset('template/assets/js/custom-switcher.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('template/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>