<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jumtek 2023 - Register Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/dashboard/images/logopng.png')}}">
    <link href="{{asset('template/dashboard/css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <a href="index.html"><img src="{{asset('template/dashboard/images/logo-jumtek-white.png')}}" alt="" width="140px" height="140px"></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Form Pendaftaran Akun Jumtek 2023</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nama Lengkap</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>MIS PMI</strong></label>
                                            <input type="text" class="form-control" placeholder="3xxxxxxx">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="email@contoh.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Sudah punya akun ? <a class="text-white" href="/login">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('template/dashboard/vendor/global/global.min.js')}}"></script>
<script src="{{asset('template/dashboard/js/custom.min.js')}}"></script>
<script src="{{asset('template/dashboard/js/deznav-init.js')}}"></script>

</body>
</html>