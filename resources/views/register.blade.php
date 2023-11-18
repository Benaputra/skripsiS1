<!doctype html>
<html lang="en"  dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vexel – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
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
                        <a href="index.html"><img src="{{ asset('template/assets/images/brand/desktop-dark.png') }}" class="header-brand-img m-0" alt=""></a>
                    </div>
                </div>
                <div class="container-lg">
                    <div class="row mt-4 justify-content-center mx-0">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow-none">
                                <div class="card-body p-sm-6">
                                    <div class="text-center mb-4">
                                        <h4 class="mb-1">Sign Up</h4>
                                        <p>Sign up to your account to continue.</p>
                                    </div>
                                    <div class="row">
                                        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Nama Lengkap<span class="text-danger ms-1">*</span></label>
                                                <input class="form-control ms-0" type="text" placeholder="Nama Lengkap" name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">NIM/NIDN<span class="text-danger ms-1">*</span></label>
                                                <input class="form-control ms-0" type="text" placeholder="NIM / NIDN" name="nim_nidn">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                                <input class="form-control ms-0" type="email" placeholder="E-mail" name="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Create a Password<span class="text-danger ms-1">*</span></label>
                                                <div class="input-group has-validation">
                                                    <input type="password" class="form-control ms-0 border-end-0" placeholder="Create a Password" name="password"  id="signup-password" 
                                                        required>
                                                     <button class="btn btn-light" onclick="createpassword('signup-password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                                    {{-- <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-grid mb-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                {{-- <a href="index.html" class="btn btn-primary"> Create an Account</a> --}}
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 tx-14">Sudah mempunyai akunt ?
                                                    <a href="login.html" class="tx-primary ms-1 text-decoration-underline">Login</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 d-none"></div>
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
    
    <!-- Show Password JS -->
    <script src="{{ asset('template/assets/js/show-password.js') }}"></script>

</body>

</html>