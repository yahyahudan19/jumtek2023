<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - Jumtek <?php echo date("Y");?> </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/dashboard/images/logopng.png')}}">
	<link rel="stylesheet" href="{{asset('template/dashboard/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('template/dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('template/dashboard/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('template/dashboard/css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	 <!-- Datatable -->
	 <link href="{{asset('template/dashboard/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	 <!-- Pick date -->
	 <link rel="stylesheet" href="{{asset('template/dashboard/vendor/pickadate/themes/default.css')}}">
	 <link rel="stylesheet" href="{{asset('template/dashboard/vendor/pickadate/themes/default.date.css')}}">
	<!-- Daterange picker -->
    <link href="{{asset('template/dashboard/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{asset('template/dashboard/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{asset('template/dashboard/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{asset('template/dashboard/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Sweet Alert -->
    <link href="{{asset('template/dashboard/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
	<!-- Select u2 -->
    <link href="{{asset('template/dashboard/vendor/select2/css/select2.min.css')}}" rel="stylesheet">


</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/dashboard" class="brand-logo">
                <img class="logo-abbr" src="{{asset('template/dashboard/images/pmilogo.png')}}" alt="" height="55px" width="70px">
                <img class="logo-compact" src="{{asset('template/dashboard/images/jumtek.png')}}" alt="">
                <img class="brand-title" src="{{asset('template/dashboard/images/jumtek.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		@include('layouts.includes._header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('layouts.includes._sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
		@yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Developed by <a href="https://pmikabmalang.or.id/" target="_blank">PMI Kab. Malang </a> <?php echo date("Y");?></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('template/dashboard/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('template/dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('template/dashboard/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('template/dashboard/js/custom.min.js')}}"></script>
	<script src="{{asset('template/dashboard/js/deznav-init.js')}}"></script>
	<script src="{{asset('template/dashboard/vendor/owl-carousel/owl.carousel.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{asset('template/dashboard/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{asset('template/dashboard/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('template/dashboard/js/dashboard/dashboard-1.js')}}"></script>

	 <!-- Datatable -->
	 <script src="{{asset('template/dashboard/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	 <script src="{{asset('template/dashboard/js/plugins-init/datatables.init.js')}}"></script>

	  <!-- Jquery Validation -->
	  <script src="{{asset('template/dashboard/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
	  <!-- Form validate init -->
	  <script src="{{asset('template/dashboard/js/plugins-init/jquery.validate-init.js')}}"></script>

	 <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{asset('template/dashboard/vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('template/dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- clockpicker -->
    <script src="{{asset('template/dashboard/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
    <!-- asColorPicker -->
    <script src="{{asset('template/dashboard/vendor/jquery-asColor/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('template/dashboard/vendor/jquery-asGradient/jquery-asGradient.min.js')}}"></script>
    <script src="{{asset('template/dashboard/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}"></script>
    <!-- Material color picker -->	
    <script src="{{asset('template/dashboard/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- pickdate -->
    <script src="{{asset('template/dashboard/vendor/pickadate/picker.js')}}"></script>
    <script src="{{asset('template/dashboard/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('template/dashboard/vendor/pickadate/picker.date.js')}}"></script>



    <!-- Daterangepicker -->
    <script src="{{asset('template/dashboard/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
    <!-- Clockpicker init -->
    <script src="{{asset('template/dashboard/js/plugins-init/clock-picker-init.js')}}"></script>
    <!-- asColorPicker init -->
    <script src="{{asset('template/dashboard/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
    <!-- Material color picker init -->
    <script src="{{asset('template/dashboard/js/plugins-init/material-date-picker-init.js')}}"></script>
    <!-- Pickdate -->
    <script src="{{asset('template/dashboard/js/plugins-init/pickadate-init.js')}}"></script>
	<!-- Select U2 -->
    <script src="{{asset('template/dashboard/vendor/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('template/dashboard/js/plugins-init/select2-init.js')}}"></script>
	<!-- Carousel Photos -->
	<script>
		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},
					
					1150:{
						items:3
					},			
					
					1200:{
						items:2
					},
					1749:{
						items:3
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
	@include('sweetalert::alert')
	<script src="{{asset('template/dashboard/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('template/dashboard/js/plugins-init/sweetalert.init.js')}}"></script>
	
</body>
</html>