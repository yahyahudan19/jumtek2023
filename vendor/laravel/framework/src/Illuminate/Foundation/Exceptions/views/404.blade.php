{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman Tidak Ada ! | Jumtek <?php echo date("Y");?></title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('template/dashboard/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> Wah Halaman Tidak Ada !</h4>
                        <p>Maaf ya teman-teman, mungkin salah alamat kali :).</p>
						<div>
                            <a class="btn btn-primary" href="/">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('template/dashboard/vendor/global/global.min.js')}}"></script>
<script src="{{asset('template/dashboard/js/custom.min.js')}}"></script>
<script src="{{asset('template/dashboard/js/deznav-init.js')}}"></script>

</html>