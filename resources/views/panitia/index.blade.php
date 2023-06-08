@extends('layouts.master')
@section('content')

@if(auth()->user()->role == 'Peserta')
<div class="content-body">  
    <!-- row -->
    <div class="container-fluid">
        <!-- Add Order -->
        
        <div class="row">
            <div class="col-xl-6 col-xxl-6">
                @if ($data_peserta->status_peserta == 'Aktif')
                <div class="card text-white bg-info">
                    <div class="card-body mb-0">
                        <p class="card-text"></p>Selamat Datang Peserta , <a href="javascript:void(0)" class="btn btn-info light btn-card">{{auth()->user()->name}} !</a>
                    </div>
                </div>
                @else
                <div class="card text-white bg-danger">
                    <div class="card-body mb-0">
                        <p class="card-text"></p>Akunmu Belum Aktif  <a href="javascript:void(0)" class="btn btn-danger light btn-card"> Masih dalam Proses Verifikasi !</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-xl-6 col-xxl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="fs-14 mb-1">Nama Kontingen</p>
                                <span class="fs-20 text-black font-w600">{{$data_peserta->unit->nama_unit}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($data_peserta->status_peserta == 'Aktif')
                {{-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="/storage{{$data_peserta->qrcode_peserta}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <div class="new-arrival-content pr">
                                            <h4>{{$data_peserta->nama_peserta}} </h4>
                                            <div class="comment-review star-rating">
                                                <span class="review-text">{{$data_peserta->unit->nama_unit}}</span>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-left d-block">{{$data_peserta->mis_peserta}}</p>
                                            </div>
                                            <div>
                                                <a href="/storage{{$data_peserta->qrcode_peserta}}" download="">
                                                    <td class="py-2 text-right">
                                                        <span class="badge badge-success">Download QR<span class="c"> </span> </span>
                                                    </td>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <td class="py-2 text-right"><span class="badge badge-info">QR Code Untuk Absensi kegiatan
                                <span class="ml-1 fa fa-exclamation-triangle"></span>
                            </td>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="/template/dashboard/images/exam.png" alt="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <div class="new-arrival-content pr">
                                            <h4>Login Moodle : </h4>
                                            <h6>Email : <b>{{$data_peserta->user->email}}</b></h6>
                                            <h6>Password : <b>{{$data_peserta->pwdmdl_peserta}}</b> </h6>
                                        </div>
                                        <div>
                                            <a href="https://ujian.pmikabmalang.or.id/login" target="_blank">
                                                <td class="py-2 text-right"><span class="badge badge-info">Test Sekarang
                                                    <span class="ml-1 fa fa-pencil-square-o"></span>
                                                </td>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <br>
                            <td class="py-2 text-right"><span class="badge badge-warning">Login hanya digunakan saat Ujian Saja
                                <span class="ml-1 fa fa-exclamation-triangle"></span>
                            </td>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url({{asset('template/dashboard/images/big/img1.jpg')}}  );">
                            <div class="profile-photo">
                                <img src="/storage{{$data_peserta->qrcode_peserta}}" width="150" class="img-fluid rounded" alt="">
                            </div>
                            <h4 class="mt-3 mb-1 text-white">Informasi QR Code :</h4>
                            <p class="text-white mb-0">Digunakan Saat Absensi Kegiatan </p>
                        </div>
                        <ul class="list-group list-group-flush">
                             <center><li class="list-group-item d-flex justify-content-between"><strong class="text-muted">QR Code Berupa Nama Lengkap</strong></li></center>
                             <center><li class="list-group-item d-flex justify-content-between"><strong class="text-muted">Pastikan Nama Sudah Benar !	</strong></li></center>
                        </ul>
                        <div class="card-footer border-0 mt-0">								
                            <a href="/storage{{$data_peserta->qrcode_peserta}}" download="" class="btn btn-info btn-lg btn-block">
                                <i class="ml-1 fa fa-download"></i> Download QR							
                            </a>		
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url({{asset('template/dashboard/images/big/img1.jpg')}}  );">
                            <div class="profile-photo">
                                <img src="/file_foto/{{$data_peserta->foto_peserta}}" width="150" he class="img-fluid rounded" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">Profile Peserta</h3>
                            <p class="text-white mb-0">Jumtek 2023</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0"><span class="mb-0">Nama : <br></span><strong class="text-muted">{{$data_peserta->nama_peserta}}	</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0"><span class="mb-0">Kontingen :  <br></span><strong class="text-muted">{{$data_peserta->unit->nama_unit}}</strong></li>
                        </ul>
                        {{-- <div class="card-footer border-0 mt-0">								
                            <button class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-bell-o"></i> Reminder Alarm							
                            </button>		
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url({{asset('template/dashboard/images/big/img1.jpg')}}  );">
                            <div class="profile-photo">
                                <img src="{{asset('/template/dashboard/images/exam.png')}}" width="150" class="img-fluid rounded" alt="">
                            </div>
                            <h4 class="mt-3 mb-1 text-white">Informasi Login Moodle :</h4>
                            <p class="text-white mb-0">Digunakan Saat Ujian Saja !</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Email</span> <strong class="text-muted">{{$data_peserta->user->email}}	</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Password </span> <strong class="text-muted">{{$data_peserta->pwdmdl_peserta}}	</strong></li>
                        </ul>
                        <div class="card-footer border-0 mt-0">								
                            <a href="https://ujian.pmikabmalang.or.id/login" target="_blank" class="btn btn-success btn-lg btn-block">
                                <i class="ml-1 fa fa-pencil-square-o"></i> Test Sekarang !							
                            </a>		
                        </div>
                    </div>
                </div>
               
                
            @endif
        </div>
        @if ($data_peserta->status_peserta == 'Aktif')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 pb-sm-0 pb-5">
                        <h4 class="fs-20">List Kegiatan</h4>
                        <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12.9999C12.5523 12.9999 13 12.5522 13 11.9999C13 11.4477 12.5523 10.9999 12 10.9999C11.4477 10.9999 11 11.4477 11 11.9999C11 12.5522 11.4477 12.9999 12 12.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 5.99994C12.5523 5.99994 13 5.55222 13 4.99994C13 4.44765 12.5523 3.99994 12 3.99994C11.4477 3.99994 11 4.44765 11 4.99994C11 5.55222 11.4477 5.99994 12 5.99994Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 19.9999C12.5523 19.9999 13 19.5522 13 18.9999C13 18.4477 12.5523 17.9999 12 17.9999C11.4477 17.9999 11 18.4477 11 18.9999C11 19.5522 11.4477 19.9999 12 19.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="event-bx owl-carousel">
                            @if ($data_peserta->unit->status_unit == 'KSR')
                                @foreach ($data_kegiatan_ksr as $kegiatan)
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="#" class="text-black">{{$kegiatan->nama_kegiatan}}</a></p>
                                                <span class="fs-14 text-black d-block mb-3">{{$kegiatan->jenis_kegiatan}} | 
                                                    <td class="py-2 text-right"><span class="badge badge-info">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-check"></span></span><td>
                                                </span>
                                                <p class="fs-12">{{$kegiatan->detail_kegiatan}}</p>
                                                <ul>
                                                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->locale('id_ID')->isoFormat('dddd, D MMMM Y') }}</li>
                                                    <li><i class="las la-clock"></i>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->locale('id_ID')->translatedFormat('H:i') }} WIB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @foreach ($data_kegiatan_pmr as $kegiatan)
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="#" class="text-black">{{$kegiatan->nama_kegiatan}}</a></p>
                                                <span class="fs-14 text-black d-block mb-3">{{$kegiatan->jenis_kegiatan}} | 
                                                    <td class="py-2 text-right"><span class="badge badge-success">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                </span>
                                                @if ($kegiatan->status_kegiatan == 'Aktif')
                                                <td class="py-2 text-right"><span class="badge badge-success">Sedang Berjalan<span class="ml-1 fa fa-spinner"></span></span><td>
                                                @endif
                                                <p class="fs-12">{{$kegiatan->detail_kegiatan}}</p>
                                                <ul>
                                                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->locale('id_ID')->isoFormat('dddd, D MMMM Y') }}</li>
                                                    <li><i class="las la-clock"></i>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->locale('id_ID')->translatedFormat('H:i') }} WIB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
       
        
    </div>
</div>
@endif

@if(auth()->user()->role == 'Panitia')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-6">
                <div class="row">
                    <div class="col-xl-12 col-md-8">
                        <div class="card text-white bg-danger">
                            <div class="card-body mb-0">
                                <p class="card-text"></p>Halo, Selamat Datang <a href="javascript:void(0)" class="btn btn-danger light btn-card">{{auth()->user()->name}} !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            {{-- <div>
                                <p class="fs-14 mb-1">Nama Kontingen</p>
                                <span class="fs-20 text-black font-w600">YO NDAK TAU KOK TANYA SAYA</span>
                            </div> --}}
                            <div class="media align-items-center">
                                <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{asset('template/dashboard/images/avatar/profileges.jpg')}}" alt="DexignZone">
                                <div class="media-body">
                                    <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Semangat Panitiaku :)</a></h4>
                                    <span>{{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('dddd, D MMMM Y') }} - {{ \Carbon\Carbon::now('Asia/Jakarta')->format('H:i') }} WIB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="fs-20"><b>Unit/Kontingen Pendaftar</b></h4>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <center>
                                    <span class="donut"
                                        data-peity='{ 
                                            "fill": [
                                                "rgb(255, 87, 51)", 
                                                "rgb(255, 195, 40)", 
                                                "rgb(52, 152, 219)", 
                                                "rgb(40, 180, 99)"
                                                ]}'
                                        
                                        >{{$ksr_daftar}},{{$wira_daftar}},{{$madya_daftar}},{{$mula_daftar}} {{-- Angka e Ges--}}
                                    </span>
                                    
                                     </center>
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="pr-2">
                                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="8" rx="4" fill="#FF5733"/>
                                            </svg>
                                            <h4 class="fs-18 text-black mb-1 font-w600">{{$ksr_daftar}}</h4>
                                            <span class="fs-14">KSR</span>
                                        </div>
                                        <div class="pr-2">
                                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="8" rx="4" fill="#F4D03F"/>
                                            </svg>
                                            <h4 class="fs-18 text-black mb-1 font-w600">{{$wira_daftar}}</h4>
                                            <span class="fs-14">PMR Wira</span>
                                        </div>
                                        <div class="">
                                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="8" rx="4" fill="#214BB8"/>
                                            </svg>
                                            <h4 class="fs-18 text-black mb-1 font-w600">{{$mula_daftar}}</h4>
                                            <span class="fs-14">PMR Madya</span>
                                        </div>
                                        <div class="pr-2">
                                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="8" rx="4" fill="#28B463"/>
                                            </svg>
                                            <h4 class="fs-18 text-black mb-1 font-w600">{{$madya_daftar}}</h4>
                                            <span class="fs-14">PMR Mula</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xxl-8">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-1"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Kegiatan</p>
										<h3 class="text-white">{{$jumlah_kegiatan}}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-2"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Peserta</p>
										<h3 class="text-white">{{$jumlah_peserta}}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-wifi-2"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Jumlah KSR</p>
										<h3 class="text-white">{{$jumlah_ksr}}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-plus"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Jumlah PMR</p>
										<h3 class="text-white">{{$jumlah_pmr}}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-xxl-12">
                <div class="row">                    
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 pb-sm-0 pb-5">
                                <h4 class="fs-20">List Kegiatan Temu Karya : </h4>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div data-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12.9999C12.5523 12.9999 13 12.5522 13 11.9999C13 11.4477 12.5523 10.9999 12 10.9999C11.4477 10.9999 11 11.4477 11 11.9999C11 12.5522 11.4477 12.9999 12 12.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 5.99994C12.5523 5.99994 13 5.55222 13 4.99994C13 4.44765 12.5523 3.99994 12 3.99994C11.4477 3.99994 11 4.44765 11 4.99994C11 5.55222 11.4477 5.99994 12 5.99994Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 19.9999C12.5523 19.9999 13 19.5522 13 18.9999C13 18.4477 12.5523 17.9999 12 17.9999C11.4477 17.9999 11 18.4477 11 18.9999C11 19.5522 11.4477 19.9999 12 19.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="event-bx owl-carousel">
                                    @foreach ($data_kegiatan_ksr as $kegiatan)
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="/dashboard/kegiatan/{{$kegiatan->id_kegiatan}}" class="text-black">{{$kegiatan->nama_kegiatan}}</a></p>
                                                <span class="fs-14 text-black d-block mb-3">{{$kegiatan->jenis_kegiatan}} | 
                                                    @if ($kegiatan->tingkat_kegiatan == 'KSR')
                                                        <td class="py-2 text-right"><span class="badge badge-success">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @else
                                                        <td class="py-2 text-right"><span class="badge badge-info">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @endif
                                                    @if ($kegiatan->status_kegiatan == 'Aktif')
                                                        <td class="py-2 text-right"><span class="badge badge-success">Sedang Berjalan<span class="ml-1 fa fa-spinner"></span></span><td>
                                                    @endif
                                                </span>
                                                <p class="fs-12">{{$kegiatan->detail_kegiatan}}</p>
                                                <ul>
                                                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->locale('id_ID')->isoFormat('dddd, D MMMM Y') }}</li>
                                                    <li><i class="las la-clock"></i>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->locale('id_ID')->translatedFormat('H:i') }} WIB</li> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 pb-sm-0 pb-5">
                                <h4 class="fs-20">List Kegiatan Jumbara : </h4>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div data-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12.9999C12.5523 12.9999 13 12.5522 13 11.9999C13 11.4477 12.5523 10.9999 12 10.9999C11.4477 10.9999 11 11.4477 11 11.9999C11 12.5522 11.4477 12.9999 12 12.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 5.99994C12.5523 5.99994 13 5.55222 13 4.99994C13 4.44765 12.5523 3.99994 12 3.99994C11.4477 3.99994 11 4.44765 11 4.99994C11 5.55222 11.4477 5.99994 12 5.99994Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 19.9999C12.5523 19.9999 13 19.5522 13 18.9999C13 18.4477 12.5523 17.9999 12 17.9999C11.4477 17.9999 11 18.4477 11 18.9999C11 19.5522 11.4477 19.9999 12 19.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="event-bx owl-carousel">
                                    @foreach ($data_kegiatan_pmr as $kegiatan)
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="/dashboard/kegiatan/{{$kegiatan->id_kegiatan}}" class="text-black">{{$kegiatan->nama_kegiatan}}</a></p>
                                                <span class="fs-14 text-black d-block mb-3">{{$kegiatan->jenis_kegiatan}} | 
                                                    @if ($kegiatan->tingkat_kegiatan == 'KSR')
                                                        <td class="py-2 text-right"><span class="badge badge-success">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @else
                                                        <td class="py-2 text-right"><span class="badge badge-info">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @endif
                                                </span>
                                                <p class="fs-12">{{$kegiatan->detail_kegiatan}}</p>
                                                <ul>
                                                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->locale('id_ID')->isoFormat('dddd, D MMMM Y') }}</li>
                                                    <li><i class="las la-clock"></i>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->locale('id_ID')->translatedFormat('H:i') }} WIB</li> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(auth()->user()->role == 'Pembina')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-6">
                <div class="row">
                    <div class="col-xl-12 col-md-8">
                        <div class="card text-white bg-info  ">
                            <div class="card-body mb-0">
                                <p class="card-text"></p>Selamat Datang Pembina <a href="javascript:void(0)" class="btn btn-info    light btn-card">{{auth()->user()->name}} !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="fs-14 mb-1">Informasi Kontingen</p>
                                <span class="fs-20 text-black font-w600">{{$data_peserta->unit->nama_unit}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-end">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah Kegiatan :</p>
                                        @if (auth()->user()->peserta->unit->status_unit == 'PMR')
                                            <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_pmr}}
                                                <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                                </svg>
                                        @else
                                            <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_ksr}}
                                                <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                                </svg>
                                        @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah Kontingen : </p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_peserta_kontingen}}
                                            <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Informasi Kontingen</p>
                                        <span class="fs-20 text-black font-w600">{{$data_peserta->unit->nama_unit}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 pb-sm-0 pb-5">
                                <h4 class="fs-20">List Kegiatan</h4>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div data-toggle="dropdown">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12.9999C12.5523 12.9999 13 12.5522 13 11.9999C13 11.4477 12.5523 10.9999 12 10.9999C11.4477 10.9999 11 11.4477 11 11.9999C11 12.5522 11.4477 12.9999 12 12.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 5.99994C12.5523 5.99994 13 5.55222 13 4.99994C13 4.44765 12.5523 3.99994 12 3.99994C11.4477 3.99994 11 4.44765 11 4.99994C11 5.55222 11.4477 5.99994 12 5.99994Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 19.9999C12.5523 19.9999 13 19.5522 13 18.9999C13 18.4477 12.5523 17.9999 12 17.9999C11.4477 17.9999 11 18.4477 11 18.9999C11 19.5522 11.4477 19.9999 12 19.9999Z" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="event-bx owl-carousel">
                                    @foreach ($data_kegiatan_ksr as $kegiatan)
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="#" class="text-black">{{$kegiatan->nama_kegiatan}}</a></p>
                                                <span class="fs-14 text-black d-block mb-3">{{$kegiatan->jenis_kegiatan}} | 
                                                    @if ($kegiatan->tingkat_kegiatan == 'PMR')
                                                        <td class="py-2 text-right"><span class="badge badge-success">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @else
                                                        <td class="py-2 text-right"><span class="badge badge-info">{{$kegiatan->tingkat_kegiatan}}<span class="ml-1 fa fa-plus"></span></span><td>
                                                    @endif
                                                    @if ($kegiatan->status_kegiatan == 'Aktif')
                                                        <td class="py-2 text-right"><span class="badge badge-success">Sedang Berjalan<span class="ml-1 fa fa-spinner"></span></span><td>
                                                    @endif
                                                </span>
                                                <p class="fs-12">{{$kegiatan->detail_kegiatan}}</p>
                                                <ul>
                                                    <li><i class="las la-calendar"></i>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}</li>
                                                    <li><i class="las la-clock"></i>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->format('H:i') }} WIB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@stop