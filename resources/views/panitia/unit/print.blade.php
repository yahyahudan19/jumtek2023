@extends('layouts.master_blank')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> Cetak Data<strong>Kontingen : {{$data_unit->nama_unit}}</strong> {{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('dddd, D MMMM Y') }} </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            {{-- <h6>Data Kontingen :</h6> --}}
                            <div> <strong>Pembina Kontingen : </strong> </div>
                            @if ($data_pembina)
                            <div>{{$data_pembina->nama_peserta}}</div>
                            @else
                            <div>
                                <span class="badge badge-warning">Pembina Belum Terdaftar <span class="ml-1 fa fa-exclamation"></span></span>
                            </div>
                            @endif
                            <div> <strong>Pimpinan Kontingen : </strong> </div>
                            @if ($data_pimpinan)
                            <div>{{$data_pimpinan->nama_peserta}}</div>
                            @else
                            <div>
                                <span class="badge badge-warning">Pimpinan Belum Terdaftar <span class="ml-1 fa fa-exclamation"></span></span>
                            </div>
                            @endif
                            {{-- <div>Email: info@webz.com.pl</div>
                            <div>Phone: +48 444 666 3333</div> --}}
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-9"> 
                                <div class="brand-logo mb-3">
                                    {{-- <img class="logo-abbr mr-2" src="{{asset('template/login/images/logojumtek_primer.png')}}" alt="" height="55px"> --}}
                                    {{-- <img class="logo-compact" src="{{asset('template/dashboard/images/jumtek.png')}}" alt="" height="55px"> --}}
                                </div>
                                <span>Jumbara dan Temu Karya Relawan <br><strong> PMI Kabupaten Malang 2023 </strong></span><br>
                                <small class="text-muted">24 - 27 Juni 2023, Selorejo-Ngantang</small>
                            </div>
                            <div class="col-sm-3 mt-3"> <img src="{{asset('template/login/images/logojumtek_primer.png')}}" class="img-fluid width110"> </div>
                        </div>
                        {{-- <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                           
                        </div> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>MIS PMI</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_peserta as $peserta)
                                     <tr> 
                                        <td>
                                            @if ($peserta->mis_peserta == NULL)
                                                MIS Tidak Tersedia
                                            @else
                                                {{$peserta->mis_peserta}}
                                            @endif
                                        </td>
                                        <td>{{$peserta->user->email}}</td>
                                        <td>{{$peserta->nama_peserta}}</td>
                                        <td>{{$peserta->jenisk_peserta}}</td>
                                        <td>{{$peserta->alamat_peserta}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"> </div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    {{-- <tr>
                                        <td class="left"><strong>Total Peserta</strong></td>
                                        <td class="right">$8.497,00</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Discount (20%)</strong></td>
                                        <td class="right">$1,699,40</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>VAT (10%)</strong></td>
                                        <td class="right">$679,76</td>
                                    </tr> --}}
                                    <tr>
                                        <td class="left"><strong>Total Peserta : </strong></td>
                                        <td class="right"><strong>{{$jumlah_peserta}}</strong><br>
                                            {{-- <strong>0.15050000 BTC</strong></td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            window.print(); // Memicu pencetakan halaman saat halaman dimuat
        };
    </script>
@stop