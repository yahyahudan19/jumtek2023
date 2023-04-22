<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Jumtek <?php echo date("Y");?></title>
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/form/css/iofrm-theme22.css')}}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{asset('template/form/images/logo-light.svg')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('template/form/images/graphic3.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login Jumtek <?php echo date("Y");?></h3>
                        <p>Silahkan Login menggunakan Akun yang telah terdaftar di web jumtek 2023!</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <a href="/dashboard" type="button" class="ibtn">Login</a><a href="#l">Lupa Password?</a>
                                {{-- <button id="submit" type="submit" class="ibtn">Login</button> <a href="#l">Lupa Password?</a> --}}
                            </div>
                        </form>
                        <div class="other-links">
                            {{-- <div class="text">Belum Punya Akun ?</div> --}}
                            {{-- <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a> --}}
                        </div>
                        <div class="page-links">
                            <a href="/register">Register new account !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('template/form/js/jquery.min.js')}}"></script>
<script src="{{asset('template/form/js/popper.min.js')}}"></script>
<script src="{{asset('template/form/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/form/js/main.js')}}"></script>
</body>
</html>