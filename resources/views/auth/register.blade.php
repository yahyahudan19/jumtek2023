<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Jumtek <?php echo date("Y");?></title>
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/iofrm-theme24.css')}}">
</head>
<body>
    <div class="form-body on-top">
        <div class="website-logo">
            <a href="#">
                <div class="">
                    <img class="logo-size" src="{{asset('template/dashboard/images/logo-jumtek-white.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="{{asset('template/form/images/graphic6.svg')}}" alt=""></div>
                    <div><h3>Selamat Datang di Jumtek <?php echo date("Y");?>!</h3></div>
                    <div><p>Untuk Melakukan Pendaftaran akun Jumtek 2023, Silahkan Isi Form dibawah ini ya !</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="No. Telp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Unit PMI">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="MIS PMI">
                                </div>
                            </div>
                            <div class="form-group">
                                <center>KSR / PMR </center>
                                <div class="custom-options">
                                    <input type="radio" id="rad1" name="rad"><label for="rad1">KSR</label>
                                    <input type="radio" id="rad2" name="rad"><label for="rad2">PMR</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">File Kartu Anggota</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" id="chk1" required><label for="chk1">I agree on <a href="#">terms & conditions</a> of jumtek 2023</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        {{-- <button id="submit" type="submit" class="ibtn less-padding">Register</button> --}}
                                        <a href="/login" class="ibtn less-padding">Register</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
<script src="{{asset('template/form/js/jquery.min.js')}}"></script>
<script src="{{asset('template/form/js/popper.min.js')}}"></script>
<script src="{{asset('template/form/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/form/js/main.js')}}"></script>
</body>
</html>