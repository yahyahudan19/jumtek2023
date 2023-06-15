<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Jumtek <?php echo date("Y");?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/dashboard/images/logopng.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/login/css/iofrm-theme19.css')}}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{asset('template/login/images/logo-jumtek-white.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('template/login/images/graphic3.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login Jumtek <?php echo date("Y");?></h3>
                        <p>Silahkan Login menggunakan Akun yang telah terdaftar di web jumtek 2023!</p>
                        <form action="/auth" method="POST">
                            {{ csrf_field() }}
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button type="submit" class="ibtn" >Login</button><a href="#" id="showAlert">Lupa Password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                        </div>
                        <div class="page-links">
                            <a href="/register">Register new account !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('template/login/js/jquery.min.js')}}"></script>
<script src="{{asset('template/login/js/popper.min.js')}}"></script>
<script src="{{asset('template/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/login/js/main.js')}}"></script>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('showAlert').addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan',
            html: 'Segera Lapor ke Panitia! Hubungi <a href="https://wa.me/6285755889388" target="_blank">WhatsApp Kami</a> untuk informasi lebih lanjut.'
        });
    });
</script>

</body>
</html>