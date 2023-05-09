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
                    {{-- <div class="card-header">
                        <h5 class="card-title text-white">Selamat Datang !</h5>
                    </div> --}}
                    <div class="card-body mb-0">
                        <p class="card-text"></p>Halo, Selamat Datang <a href="javascript:void(0)" class="btn btn-info light btn-card">{{auth()->user()->name}} !</a>
                    </div>
                    {{-- <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago --}}
                    </div>
                </div>
                @else
                <div class="card text-white bg-danger">
                    {{-- <div class="card-header">
                        <h5 class="card-title text-white">Selamat Datang !</h5>
                    </div> --}}
                    <div class="card-body mb-0">
                        <p class="card-text"></p>Akun-mu Belum Aktif, Segera <a href="javascript:void(0)" class="btn btn-danger light btn-card">Hubungi Panitia !</a>
                    </div>
                    {{-- <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago --}}
                    </div>
                </div>
                @endif
            </div>
            <div class="row">
                    @if ($data_peserta->status_peserta == 'Aktif')
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="/storage{{$data_peserta->qrcode_peserta}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            {{-- <br> --}}
                                            <div class="new-arrival-content pr">
                                                <h4>{{$data_peserta->nama_peserta}} </h4>
                                                <div class="comment-review star-rating">
													<span class="review-text">{{$data_peserta->unit->nama_unit}}</span>
												</div>
												<div class="d-table mb-2">
													<p class="price float-left d-block">{{$data_peserta->mis_peserta}}</p>
                                                </div>
                                                <div>
                                                    <a href="/storage{{$data_peserta->qrcode_peserta}}" download=""><td class="py-2 text-right"><span class="badge badge-success">Download QR<span
                                                        class="ml-1 fa fa-download"></span></span>
                                                    </td></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            {{-- <br> --}}
                                            <div class="new-arrival-content pr">
                                                <h4>Login Moodle : </h4>
                                                <div class="comment-review star-rating">
													<span class="review-text">{{$data_peserta->user->email}}</span>
												</div>
												<div class="d-table mb-2">
													<p class="price float-left d-block">{{$data_peserta->mis_peserta}}</p>
                                                </div>
                                                <div>
                                                    <a href="https://ujian.pmikabmalang.or.id/login" target="_blank"><td class="py-2 text-right"><span class="badge badge-info">Test Sekarang<span
                                                        class="ml-1 fa fa-pencil-square-o"></span></span>
                                                    </td></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
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
                                        <div class="items">
                                            <div class="image-bx">
                                                <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                                <div class="info">
                                                    <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">International Live Choice Festivals (2020)</a></p>
                                                    <span class="fs-14 text-black d-block mb-3">Manchester, London</span>
                                                    <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                    <ul>
                                                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                        <li><i class="las la-clock"></i>08:35 AM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="image-bx">
                                                <img src="{{asset('template/dashboard/images/events/3.png')}}" alt="">
                                                <div class="info">
                                                    <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Atuhor Community Fun Hiking at Sibayak Mt.</a></p>
                                                    <span class="fs-14 text-black d-block mb-3">London, United Kingdom</span>
                                                    <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                    <ul>
                                                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                        <li><i class="las la-clock"></i>08:35 AM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="image-bx">
                                                <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                                <div class="info">
                                                    <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">International Live Choice Festivals (2020)</a></p>
                                                    <span class="fs-14 text-black d-block mb-3">Manchester, London</span>
                                                    <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                    <ul>
                                                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                        <li><i class="las la-clock"></i>08:35 AM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="image-bx">
                                                <img src="{{asset('template/dashboard/images/events/2.png')}}" alt="">
                                                <div class="info">
                                                    <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Indonesian Authors Meetup 2020</a></p>
                                                    <span class="fs-14 text-black d-block mb-3">Medan, Indonesia</span>
                                                    <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                    <ul>
                                                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                        <li><i class="las la-clock"></i>08:35 AM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="image-bx">
                                                <img src="{{asset('template/dashboard/images/events/3.png')}}" alt="">
                                                <div class="info">
                                                    <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Atuhor Community Fun Hiking at Sibayak Mt.</a></p>
                                                    <span class="fs-14 text-black d-block mb-3">London, United Kingdom</span>
                                                    <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                    <ul>
                                                        <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                        <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                        <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                        <li><i class="las la-clock"></i>08:35 AM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

@if(auth()->user()->role == 'Panitia')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-6">
                <div class="row">
                    <div class="col-xl-12 col-md-8">
                        <div class="card text-white bg-danger">
                            {{-- <div class="card-header">
                                <h5 class="card-title text-white">Selamat Datang !</h5>
                            </div> --}}
                            <div class="card-body mb-0">
                                <p class="card-text"></p>Halo, Selamat Datang <a href="javascript:void(0)" class="btn btn-danger light btn-card">{{auth()->user()->name}} !</a>
                                {{-- <p class="card-text"></p>Halo, Selamat Datang <a href="javascript:void(0)" class="btn btn-danger light btn-card">{{$data_peserta}} !</a> --}}
                            </div>
                            {{-- <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago --}}
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
                                        <p class="fs-14 mb-1">Jumlah Kegiatan</p>
                                        <span class="fs-35 text-black font-w600">93
                                            <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah Peserta</p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_peserta}}
                                            <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah KSR</p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_ksr}}
                                            <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah PMR</p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_pmr}}
                                            <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">International Live Choice Festivals (2020)</a></p>
                                                <span class="fs-14 text-black d-block mb-3">Manchester, London</span>
                                                <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                <ul>
                                                    <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                    <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                    <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                    <li><i class="las la-clock"></i>08:35 AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/3.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Atuhor Community Fun Hiking at Sibayak Mt.</a></p>
                                                <span class="fs-14 text-black d-block mb-3">London, United Kingdom</span>
                                                <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                <ul>
                                                    <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                    <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                    <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                    <li><i class="las la-clock"></i>08:35 AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/1.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">International Live Choice Festivals (2020)</a></p>
                                                <span class="fs-14 text-black d-block mb-3">Manchester, London</span>
                                                <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                <ul>
                                                    <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                    <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                    <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                    <li><i class="las la-clock"></i>08:35 AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/2.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Indonesian Authors Meetup 2020</a></p>
                                                <span class="fs-14 text-black d-block mb-3">Medan, Indonesia</span>
                                                <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                <ul>
                                                    <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                    <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                    <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                    <li><i class="las la-clock"></i>08:35 AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="image-bx">
                                            <img src="{{asset('template/dashboard/images/events/3.png')}}" alt="">
                                            <div class="info">
                                                <p class="fs-18 font-w600"><a href="event-detail.html" class="text-black">Envato Atuhor Community Fun Hiking at Sibayak Mt.</a></p>
                                                <span class="fs-14 text-black d-block mb-3">London, United Kingdom</span>
                                                <p class="fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                                                <ul>
                                                    <li><i class="las la-dollar-sign"></i>$124,00</li>
                                                    <li><i class="las la-calendar"></i>June 20, 2020</li>
                                                    <li><i class="fa fa-ticket"></i>561 pcs</li>
                                                    <li><i class="las la-clock"></i>08:35 AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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