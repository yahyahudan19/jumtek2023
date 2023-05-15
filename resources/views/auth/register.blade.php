<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Register Jumtek 2023 - Pendaftaran Jumbara dan Temu Karya 2023">
	<meta name="author" content="PMI Kab. Malang">
    <title>Register | Jumtek <?php echo date("Y");?></title>

	<!-- Favicons-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/dashboard/images/logopng.png')}}">
	{{-- <link rel="shortcut icon" href="{{asset('template/form/img/favicon.ico')}}" type="image/x-icon"> --}}
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('template/form/img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('template/form/img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('template/form/img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('template/form/img/apple-touch-icon-144x144-precomposed.png')}}">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{asset('template/form/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/menu.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
	<link href="{{asset('template/form/css/skins/square/grey.css')}}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('template/form/css/custom.css')}}" rel="stylesheet">

	<script src="{{asset('template/form/js/modernizr.js')}}"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="/register">Register Jumtek 2023 | Pendaftaran Jumbara dan Temu Karya 2023</a></h1>
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-youtube"></i></a></li>
                            <li><a href="#0"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="#" class="animated_link">Register Version</a></li>
                            <li><a href="#" class="animated_link">About Us</a></li>
                            <li><a href="#" class="animated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="{{asset('template/form/img/logojumtek_putihh.png')}}" alt="" width="250px"></figure>
						{{-- <h2>Selamat Datang di Jumtek 2023 !</h2> --}}
						<p>Untuk Melakukan Pendaftaran akun Jumtek 2023, Silahkan Lengkapi Form ini ya !</p>
						<a href="#0" id="more_info" data-bs-toggle="modal" data-bs-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form method="POST" action="/doregister" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Masukkan Data Diri Anda</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="nama_peserta" class="form-control required" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="notelp_peserta" class="form-control required" placeholder="No. Telp">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" name="email_peserta" class="form-control required" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Password">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="alamat_peserta" class="form-control" placeholder="Alamat">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="radio" value="Laki-Laki" checked name="jenisk_peserta" class="icheck">Laki-Laki</label>
												<label><input type="radio" value="Perempuan" name="jenisk_peserta" class="icheck">Perempuan</label>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step-->

								 <div class="step">
									<h3 class="main_question"><strong>2/3</strong>Informasi Keanggotaan PMI</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="styled-select">
													<select class="required" name="role_peserta" id="role_peserta" required>
														<option value="">-- PILIH PESERTA/PEMBINA/PIMPINAN --</option>
														<option value="Peserta">PESERTA</option>
														<option value="Pembina">PEMBINA</option>
														<option value="Pimpinan">PIMPINAN</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<!-- /row -->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="styled-select">
													<select class="required" name="status_unit" id="status_unit">
														<option value="">-- PILIH KSR/MULA/MADYA/WIRA --</option>
														<option value="KSR">KSR/TSR/SIBAT</option>
														<option value="MULA">MULA</option>
														<option value="MADYA">MADYA</option>
														<option value="WIRA">WIRA</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<div class="styled-select">
													<select class="required" name="unit_id" id="unit_id">
														<option value="" selected>-- PILIH KONTINGEN PMI --</option>
														@foreach ($data_unit as $unit)
															<option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">											
											<div class="form-group">
												<input type="text" name="mis_peserta" class="form-control required" placeholder="MIS PMI">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<span>*Jika Kontingen Tidak Ada, <br><b>Segera Hubungi Panitia !</b></span>
										</div>
									</div>
									<!-- /row -->
								</div> 
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Upload File*</h3>
									<div class="col-md-12">
                                        <div class="form-group">
											<span>1. File Surat Tugas <b>*Khusus Pembina Kontingen</b></span><br>
                                            <input type="file" name="surattugas_pembina" id="surattugas_pembina" class="form-control" placeholder="Upload Surat Tugas">
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
											<span>2. File Foto</span> <b>*Foto 4x6 dan Maksimal : 2 Mb</b><br>
                                            <input type="file" name="foto_peserta" id="foto_peserta" class="form-control" placeholder="Upload Foto	" required>
                                        </div>
                                    </div>
									<div class="form-group terms">
										<input name="terms" type="checkbox" class="icheck required" value="yes">
										<label>Please accept <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">terms and conditions</a> ?</label>
										{{-- <br><br><span><b>*Lek guduk pembina gausa ngeyel upload surat tugas sat !</b></span> --}}
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Backward </button>
								<button type="button" name="forward" class="forward">Forward</button>
								<button type="submit" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2023 PMI Kab. Malang</p>
		<ul>
			{{-- <li><a href="#0" class="animated_link">Purchase this template</a></li> --}}
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a href="#0" class="animated_link">Contacts</a></li>
			<li><a href="https://pmikabmalang.or.id" class="animated_link">Official Website</a></li>
		</ul>
	</footer>
	<!-- end footer-->


	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="{{asset('template/form/js/jquery-3.6.3.min.js')}}"></script>
	<!-- Common script -->
	<script src="{{asset('template/form/js/common_scripts_min.js')}}"></script>
	<!-- Wizard script -->
	<script src="{{asset('template/form/js/registration_wizard_func.js')}}"></script>
	<!-- Menu script -->
	<script src="{{asset('template/form/js/velocity.min.js')}}"></script>
	<script src="{{asset('template/form/js/main.js')}}"></script>
	<!-- Theme script -->
	<script src="{{asset('template/form/js/functions.js')}}"></script>
	<!-- Sweet Alert script -->
	@include('sweetalert::alert')
	<!-- JS Select Unit -->
	<script>
		$("select#status_unit").change(function(event){
			event.preventDefault();
			var status = $(this).children("option:selected").val();
			$.ajax({
				url: "/unit/getUnitByStatusUnits/"+status,
				method: 'GET',
				success: function(data){
					// console.log(data);
					var select = document.getElementById("unit_id");
					var length = select.options.length;
					for (i = length-1; i >= 0; i--){
						select.options[i] = null;
					}
					$('select[name="unit_id"]')
						.append($('<option />') // create new <option> element
							.text("-- PILIH KONTINGEN PMI --")
							.prop('selected', false) // Mark it Selected
						);
					for (a = 0; a <data.length; a++){
						console.log(data[a].unit_id);
						$('select[name="unit_id"]')
							.append($('<option />')
							.val(data[a].id_unit)
							.text(data[a].nama_unit)
							.prop('selected',false)
						);
					}
				}
			});
		});
	</script>
</body>
</html>