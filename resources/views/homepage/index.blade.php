<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jumtek <?php echo date("Y");?> - PMI Kabupaten Malang Official Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/dashboard/images/logopng.png')}}">
        
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('template/homepage/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/dripicons.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/homepage/css/responsive.css')}}">
    </head>
    <body>
        <!-- header -->
        <header id="home" class="header-area">            
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('template/dashboard/images/logo-jumtek-white.png')}}"  height="100px" width="100px" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                                <div class="main-menu text-right text-xl-center">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active has-sub"><a href="#home">Home</a>
											</li>
                                            <li class="has-sub">
												<a href="/about">About</a>												
											</li>
                                             <li class="has-sub">
												<a href="#">Kegiatan +</a>
												<ul>
													<li><a href="#">Bidang Jumpa</a></li>
													<li><a href="#">Bidang Bakti</a></li>
													<li><a href="#">Bidang Gembira</a></li>
													<li><a href="#">Temu Karya</a></li>
												</ul>
											</li>
                                            <li><a href="/persyaratan">Persyaratan</a></li>
                                            <li class="has-sub">
												<a href="/blog">Blog</a>												
											</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 text-right d-none d-xl-block">
                                <div class="header-btn second-header-btn">
                                     <a href="/login" class="btn"><i class="far fa-user-alt"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="parallax" class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix" style="background-image:url({{asset('template/homepage/img/header1_bg_img.jpg')}})">
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="{{asset('template/homepage/img/shape/slider_shape01.png')}}" alt="shape"></div>
                <div class="slider-shape ss-two layer" data-depth="0.30"><img src="{{asset('template/homepage/img/shape/slider_shape02.png')}}" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{asset('template/homepage/img/shape/slider_shape03.png')}}" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="{{asset('template/homepage/img/shape/slider_shape04.png')}}" alt="shape"></div>
                <div class="slider-shape ss-five layer" data-depth="0.20"><img src="{{asset('template/homepage/img/shape/slider_shape05.png')}}" alt="shape"></div>
                <div class="slider-shape ss-six layer" data-depth="0.15"><img src="{{asset('template/homepage/img/shape/slider_shape06.png')}}" alt="shape"></div>
     			 <div class="slider-shape ss-eight layer" data-depth="0.50"><img src="{{asset('template/homepage/img/man_header.png')}}" alt="shape"></div>
                <div class="slider-active">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="slider-content second-slider-content">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s">
											<li><i class="fas fa-map-marker-alt"></i> Selorejo, Ngantang</li>
											<li><i class="far fa-clock"></i>  24 - 27 Juni 2023, </li>
										</ul>
                                        <h2 data-animation="fadeInUp animated" data-delay=".4s">Jumbara dan Temu Karya <span>2023</span></h2> 
										<div countdown class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" data-date="Jun 24 2023 00:00:00">
										 <div class="timer">										 
											<div class="timer-outer bdr1">												
											   <span class="days" data-days>0</span> 
											   <div class="smalltext">Days</div>
											   <div class="value-bar"></div>
											</div>
											<div class="timer-outer bdr2">
											   <span class="hours" data-hours>0</span> 
											   <div class="smalltext">Hours</div>
											</div>
											<div class="timer-outer bdr3">
											   <span class="minutes" data-minutes>0</span> 
											   <div class="smalltext">Minutes</div>
											</div>
											<div class="timer-outer bdr4">
											   <span class="seconds" data-seconds>0</span> 
											   <div class="smalltext">Seconds</div>
											</div>
											<p id="time-up"></p>
										 </div>
										 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                         <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="{{asset('template/homepage/img/icon_1.png')}}" alt="icon">
								<span>1</span>
							</div>
							<h4>Networking</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="{{asset('template/homepage/img/icon_2.png')}}" alt="icon">
								<span>2</span>
							</div>
							<h4>Keahlian</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="{{asset('template/homepage/img/icon_3.png')}}" alt="icon">
								<span>3</span>
							</div>
							<h4>Pengalaman</h4>
						 </div>
						   <div class="feature-box wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="crl mb-30">
								<img src="{{asset('template/homepage/img/icon_4.png')}}" alt="icon">
								<span>4</span>
							</div>
							<h4>Perlombaan</h4>
						 </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-atitle">
								<div class="text-outline wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
										<span>Event</span>
									</div>
                                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".3s">Jumtek PMI Kabupaten Malang 2023</span>
                                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Kenapa Harus Ikut Jumtek 2023</h2>
                                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".5s"><span></span>Siamo Tutti Fratelli !</h5>
                                </div>
								<div class="wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
									<p>Menjalin silaturahmi antar anggota PMR serta mendidik generasi PMR menjadi relawan yang berkarakter.</p>
									 <p>Memberikan wadah bagi generasi PMR Kabupaten Malang dalam meningkatkan skill/kompetensi di bidang 7 materi dasar PMR.</p>
								   <a href="/register" class="btn mt-20"><i class="far fa-ticket-alt"></i> Daftar Sekarang !</a>
							   </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

			<!-- team-area -->
            {{-- <section id="team" class="team-area p-relative pt-120 pb-120 fix">
                <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Speakers</h2></div>
				<div class="circal1 item-zoom-inout"></div>
				<div class="circal2 item-zoom-inout"></div>
				<div class="circal3 item-zoom-inout"></div>
				<div class="circal4 item-zoom-inout"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Angels</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Event Speakers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                    <img src="img/speaker_1.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>James D. Franklin</h5>
                                   <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                   <img src="img/speaker_2.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Natosha W. Green</h5>
                                    <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                   <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
								<div class="tag">Gold</div>
                                <div class="team-thumb">
                                    <img src="img/speaker_3.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Brian J. Swanson</h5>
                                    <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                            <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                   <img src="img/speaker_4.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Stephanie D. Gray</h5>                                   
									<p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
						  <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                    <img src="img/speaker_5.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>James D. Franklin</h5>
                                   <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                   <img src="img/speaker_6.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Natosha W. Green</h5>
                                    <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                   <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                    <img src="img/speaker_7.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Brian J. Swanson</h5>
                                    <p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                            <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                   <img src="img/speaker_8.png" alt="img">
                                </div>
                                <div class="team-info">
                                    <h5>Stephanie D. Gray</h5>                                   
									<p>Founder & CEO</p>
									<strong>Fire Epic Ltd.</strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
									 <span>Content Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- team-area-end -->
            
             <!-- counter-area -->
            <div class="counter-area pt-120 pb-120" style="background-image:url({{asset('template/homepage/img/counter_bg.jpg')}});background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                           <div class="about-title second-atitle">							
                                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Jumtek PMI Kabupaten Malang 2023</span>
                                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Kegiatan Apa Saja di Jumtek 2023 ?</h2>
                                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Siamo Tutti Fratelli !</h5>
                                </div>
								{{-- <ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
									<li>
										<img src="{{asset('template/homepage/img/calendar.png')}}" alt="img"> 
										<span>Study in a newly-refreshed campus located in the heart of Berlin, Europe's start-up capital. Berlin is a fantastic place to study as there</span>
									</li>
									<li>
										<img src="{{asset('template/homepage/img/comments.png')}}" alt="img"> 
										<span>Study in a newly-refreshed campus located in the heart of Berlin, Europe's start-up capital. Berlin is a fantastic place to study as there</span>
									</li>
								</ul> --}}
                        </div>
                        <div class="col-lg-6 col-sm-6">
						 <div class="single-counter text-center mb-30 cr1">
                                <div class="counter p-relative">
                                    <span class="count">10</span>
                                    <small>+</small>
                                </div>
                                <p>Kegiatan</p>
                            </div>
                            <div class="single-counter text-center mb-30 cr2">
                                <div class="counter p-relative">
                                    <span class="count">100</span>
                                    <small>+</small>
                                </div>
                                <p>Kontingen PMR</p>
                            </div>
							<div class="single-counter text-center mb-30 cr3">
                                <div class="counter p-relative">
                                    <span class="count">10</span>
                                    <small>+</small>
                                </div>
                                <p>Kontingen KSR</p>
                            </div>
							<div class="cr4"></div>
							<div class="cr5"></div>
							<div class="cr6"></div>
							
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
			<!-- event -->
            <div class="event fix pt-120 pb-120">
			 <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Event</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Jumtek 2023</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Kegiatan Jumtek 2023</h2>
                            </div>
                        </div>
                    </div>
                <div class="container">
				<div class="row">
			   <div class="col-lg-12 ">				
                  <nav class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                     <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#one" role="tab" aria-selected="true">
						<img src="{{asset('template/homepage/img/t-icon.png')}}" alt="img" class="drk-icon">		
						<img src="{{asset('template/homepage/img/t-w-icon1.png')}}" alt="img" class="lgt-icon">  
						<div class="nav-content">
							<strong>Bidang Jumbara</strong>
							{{-- <span>24 Juni 2023</span> --}}
						</div>
						</a>
						<a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#four" role="tab" aria-selected="false"><img src="{{asset('template/homepage/img/t-icon.png')}}" alt="img" class="drk-icon">		
						<img src="{{asset('template/homepage/img/t-w-icon1.png')}}" alt="img" class="lgt-icon"> 
						<div class="nav-content">
							<strong>Bidang Temu Karya</strong>
							{{-- <span>27 Juni 2023</span> --}}
						</div>
						</a>
                     </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" id="nav-tabContent">
                    {{-- BIDANG JUMPA --}}
                      <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="nav-home-tab">
                        {{-- BIDANG JUMPA --}}

						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
									 <h5>Panitia Bidang</h5>
									 <p>Fasilitator Provinsi Jawa Timur</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                 <li><i class="fal fa-video"></i> Video Edukatif</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Latihan Gabungan <br> Kepalangmerahan</h2>
								 <p>Memberikan wadah bagi generasi PMR Kabupaten Malang dalam meningkatkan 
                                    skill/kompetensi di bidang 7 materi dasar PMR </p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-video"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="{{asset('template/homepage/img/event_avatar_2.png')}}" alt="img">							  
									 <h5>Pengurus PMI</h5>
									 <p>Kabupaten Malang dan Provinsi Jawa Timur</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-list"></i> Print Out Program</li>
                                 <li><i class="fal fa-film"></i> PPT Materi</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Lokakarya Pembinaan <br>dan Manajemen PMR</h2>
								 <p>Meningkatkan kemampuan pembina PMR dalam melaksanakan proses pembinaan yang baik di sekolah melalui kegiatan yang menyenangkan, bervariasi dan mengikuti perkembangan zaman.
                                </p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-magic"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						<!-- row loop -->
                        <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                   <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_4.png')}}" alt="img">							  
                                       <h5>Ninik Trimariya, M.Pd.</h5>
                                       <p>Guru Penulis MTsN 1 Malang</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                  <li><i class="fal fa-video"></i> Video Streming</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Lokakarya Penulisan</h2>
                                  <p>Meneladani tokoh sejarah Gerakan Palang Merah Dunia, Bapak Jean Henry Dunant dalam bidang kepenulisan dan karya buku yang mengubah peradaban.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-ban"></i></div>
                               </div>
                            </div>
                         </div>
						<!-- row loop -->
						
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  {{-- <div class="title">  
									  <img src="{{asset('template/homepage/img/event_avatar_4.png')}}" alt="img">							  
                                      <h5>Ninik Trimariya, M.Pd.</h5>
                                      <p>Guru Penulis MTsN 1 Malang</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                 <li><i class="fal fa-video"></i> Video Streming</li> --}}
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
                                 <h2>Kunjungan Persahabatan</h2>
								 <p>Menjalin silaturahmi antar anggota PMI baik PMR, KSR, dan TSR serta Memperluas jaringan dan menambah relasi untuk mengembangkan PMR di Kabupaten Malang</p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-ban"></i></div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						<!-- row loop -->
                        <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                   <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_4.png')}}" alt="img">							  
                                       <h5>Fasilitator PMI</h5>
                                       <p>dan Alumni FORPIS</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                  <li><i class="fal fa-video"></i> Video Streming</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Forum Remaja Palang Merah Indonesia</h2>
                                  <p>Meningkatkan peran aktif PMR dalam proses pengambilan keputusan dan kepemimpinan.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-ban"></i></div>
                               </div>
                            </div>
                        </div>
						<!-- row loop -->
                        <!-- row loop -->
                        <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                   <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                      <h5>Seluruh Peserta.</h5>
                                      <p>PMR Mula, Madya dan Wira</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                  <li><i class="fal fa-leaf"></i> Penghijauan</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Penghijauan</h2>
                                  <p>Menumbuhkan jiwa kepedulian terhadap lingkungan hidup serta Melaksanakan Tri Bakti PMR ke-2, yaitu : Berkarya dan Berbakti di Masyarakat.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-video"></i> </div>
                               </div>
                            </div>
                        </div>
                         <!-- row loop -->
                         <!-- row loop -->
                         <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                   <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                      <h5>Seluruh Peserta.</h5>
                                      <p>PMR Mula, Madya dan Wira</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-home"></i> Bersih Lingkungan </li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Bhakti Lingkungan</h2>
                                  <p>Meningkatkan kepedulian anggota PMR terhadap kebersihan lingkungan hidup serta Mempererat persahabatan dan kerja sama anggota PMR.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-video"></i> </div>
                               </div>
                            </div>
                         </div>
                         <!-- row loop -->
                         <!-- row loop -->
                        <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                  <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                      <h5>Seluruh Peserta.</h5>
                                      <p>PMR Mula, Madya dan Wira</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                  <li><i class="fal fa-leaf"></i> Penghijauan</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Pentas Seni</h2>
                                  <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-video"></i> </div>
                               </div>
                            </div>
                        </div>
                         <!-- row loop -->
                         <!-- row loop -->
                         <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                  <div class="title">  
                                       <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                      <h5>Seluruh Peserta.</h5>
                                      <p>PMR Mula, Madya dan Wira</p>
                                   </div>
                                   <ul>
                                  <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                  <li><i class="fal fa-leaf"></i> Penghijauan</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>OLahraga / Outbound</h2>
                                  <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-video"></i> </div>
                               </div>
                            </div>
                         </div>
                         <!-- row loop -->
                         <!-- row loop -->
                         <div class="row mb-30">
                            <div class="col-lg-2">
                               <div class="user">
                                 <div class="title">  
                                     <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                    <h5>Seluruh Peserta.</h5>
                                    <p>PMR Mula, Madya dan Wira</p>
                                 </div>
                                 <ul>
                                <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                <li><i class="fal fa-leaf"></i> Penghijauan</li>
                               </ul>
                               </div>
                            </div>
                            <div class="col-lg-10">
                               <div class="event-list-content fix">
                                  <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
                                     <li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
                                     <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                  </ul>
                                  <h2>Permainan Tradisional</h2>
                                  <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
                                  {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
                                  <a href="#" class="btn mt-20">Read More</a>
                                  <div class="crical"><i class="fal fa-video"></i> </div>
                               </div>
                            </div>
                         </div>
                         <!-- row loop -->
                     </div>
                    
                     {{-- TEMU KARYA  --}}
                     <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									  <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
									 <h5>Seluruh Peserta.</h5>
									 <p>PMR Mula, Madya dan Wira</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                 <li><i class="fal fa-leaf"></i> Penghijauan</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Pentas Seni</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-video"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
								 <div class="title">  
									  <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
									 <h5>Seluruh Peserta.</h5>
									 <p>PMR Mula, Madya dan Wira</p>
								  </div>
								  <ul>
                                 <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                                 <li><i class="fal fa-leaf"></i> Penghijauan</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>OLahraga / Outbound</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-video"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
						<!-- row loop -->
                        <div class="row mb-30">
                           <div class="col-lg-2">
							  <div class="user">
                                <div class="title">  
                                    <img src="{{asset('template/homepage/img/event_avatar_1.png')}}" alt="img">							  
                                   <h5>Seluruh Peserta.</h5>
                                   <p>PMR Mula, Madya dan Wira</p>
                                </div>
                                <ul>
                               <li><i class="fal fa-tree"></i> Penamaman Pohon </li>
                               <li><i class="fal fa-leaf"></i> Penghijauan</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>Selorejo, Ngantang</li>
									<li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
								 </ul>
								 <h2>Permainan Tradisional</h2>
								 <p>In order to save time you have to break down the content strategy for the event or conference you are planning step by step. Creating this process from scratch will take the longest amount of time to build, but once you have content production foundation.</p>
								 {{-- <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i> Buy Ticket</a> --}}
								 <a href="#" class="btn mt-20">Read More</a>
								 <div class="crical"><i class="fal fa-video"></i> </div>
                              </div>
                           </div>
                        </div>
						<!-- row loop -->
                     </div>
                  </div>
               </div>
			   <div class="col-lg-12 justify-content-center text-center">
				<a href="#" class="btn mt-20 mr-10">Kegiatan Lainnya  +</a>
			   </div>
			   </div>
            </div>
            </div>
            <!-- counter-area-end -->
            <!-- Sponsors-area -->
            <section class="sponsors services-bg pt-113 fix">
                <div class="container">
                    <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>Sponsors</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Sponsors Jumtek 2023</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Sponsor Kegiatan</h2>
                            </div>
                        </div>
						<div class="col-xl-4 col-lg-4 text-right">
                            <a href="/register" class="btn wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s"><i class="far fa-ticket-alt"></i> Daftar Sekarang !</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_1.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_2.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_3.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_4.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_5.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_6.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_7.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_8.png')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('template/homepage/img/sponsors_9.png')}}" alt="img"></a></li>
							</ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s" style="background-image:url({{asset('template/homepage/img/video_bg.png')}})">
                                <div class="s-video-content mb-80">
                                    <a href="https://www.youtube.com/watch?v=4PYVPTaq-G8" class="popup-video mb-50"><i class="fas fa-play"></i></a>
                                    <h2>Trailer Jumtek 2023</h2>
                                    <p>Siamo Tutti Fratelli ! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sponsors-area-end -->
           
            <!-- blog-area -->
            {{-- <section id="blog" class="blog-area p-relative fix pt-100 pb-80">
			 
                <div class="container">
                  <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2>News</h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title mb-80">
                                <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">feeds</span>
                                <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">News Feeds</h2>
                            </div>
                        </div>
						<div class="col-xl-4 col-lg-4 text-right">
                           
                        </div>
                    </div>
                    <div class="row blog-active2 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog_img_1.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-20">
                                    <ul>
										<li><i class="far fa-comments"></i>35 Comments</li>
                                        <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                    </ul>
                                    </div>
                                    <h4><a href="blog-details.html">The issue with any content strategy is time.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                    cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post active mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog_img_2.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-20">
                                    <ul>
										<li><i class="far fa-comments"></i>35 Comments</li>
                                        <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                    </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Time to sit down and think about what kind of content</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                    cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog_img_3.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-20">
                                      <ul>
										<li><i class="far fa-comments"></i>35 Comments</li>
                                        <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                    </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Should be created, time to stop and write, or record.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                    cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    
                                </div>
                            </div>
                        </div>
						<div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog_img_2.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-20">
                                      <ul>
                                        <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                        <li><i class="far fa-comments"></i>35 Comments</li>
                                    </ul>
                                    </div>
                                    <h4><a href="blog-details.html">User Experience Psychology And Performance Smashing</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                    cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class="footer-bg footer-p" style="background-image:url({{asset('template/homepage/img/footer_bg_img.jpg')}});background-size: cover;">
          
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                            <div class="footer-widget pt-120 mb-30">
                                <div class="logo mb-35">
                                    <a href="#"><img src="{{asset('template/dashboard/images/logo-jumtek-white.png')}}" height="100px" width="100px" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>Memberikan wadah bagi generasi PMR Kabupaten Malang dalam meningkatkan skill/kompetensi di bidang 7 materi dasar PMR serta Menjalin silaturahmi antar anggota PMR serta mendidik generasi PMR menjadi  
                                        relawan yang berkarakter .</p>
                                </div>
                                <div class="footer-social">                                    
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">						
                            <div class="copyright-text text-center">
								<div class="footer-link">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Eventime</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Tickets</a></li>
                                        <li><a href="#">Venue</a></li>
                                    </ul>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="{{asset('template/homepage/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/popper.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/one-page-nav-min.js')}}"></script>
        <script src="{{asset('template/homepage/js/slick.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/ajax-form.js')}}"></script>
        <script src="{{asset('template/homepage/js/paroller.js')}}"></script>
        <script src="{{asset('template/homepage/js/wow.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/parallax.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/element-in-view.js')}}"></script>
		<script src="{{asset('template/homepage/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('template/homepage/js/main.js')}}"></script>
    </body>
</html>
