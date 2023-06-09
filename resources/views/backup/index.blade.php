<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jumtek 2023 - Daftar Kegiatan</title>
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
										<a href="#"><img src="{{asset('template/login/images/logo-jumtek-white.png')}}" width="100px" height="100px" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Registrasi Ulang Kegiatan : </h4>
                                    <form action="/kegiatan-ulang" method="GET">
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nama</strong></label>
                                            <input type="text" class="form-control" id="nama_peserta_backup" name="nama_peserta_backup">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>No. Peserta</strong></label>
                                            <input type="text" class="form-control" id="nourut_peserta_backup" name="nourut_peserta_backup">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            {{-- <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div> 
                                            </div> --}}
                                            <div class="form-group">
                                                <center><a class="text-white" href="#">Pastikan Nama dan No. Peserta sama ! Besar Kecil akan sangat berpengaruh pada proses pengecekan </a></center>
                                            </div> 
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Check In</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	@include('sweetalert::alert')


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('template/dashboard/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('template/dashboard/js/custom.min.js')}}"></script>
    <script src="{{asset('template/dashboard/js/deznav-init.js')}}"></script>

</body>

</html>