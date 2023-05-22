@extends('layouts.master_blank')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> Cetak Data<strong>Peserta Jumbara dan Temu Karya Relawan 2023</strong> {{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('dddd, D MMMM Y') }} </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            {{-- <h6>Ketua Pelaksana :</h6> --}}
                            <div> <strong>Ketua Pelaksana : </strong> </div>
                            <div>Muhammad Amiruddin, S.Pd.I</div>
                            <div> <strong>Sekretaris : </strong> </div>
                            <div>Atika Rahmawati, S.Sos. </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-9 "> 
                                <br>
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
                                    <th>#</th>
                                    <th>MIS PMI</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kontingen</th>
                                    <th>Sebagai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data_peserta as $peserta)
                                     <tr> 
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            @if ($peserta->mis_peserta == NULL)
                                                MIS Tidak Tersedia
                                            @else
                                                {{$peserta->mis_peserta}}
                                            @endif
                                        </td>
                                        <td>{{$peserta->nama_peserta}}</td>
                                        <td>{{$peserta->alamat_peserta}}</td>
                                        <td>{{$peserta->unit->nama_unit}}</td>
                                        <td>{{$peserta->role_peserta}}</td>
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
                                    <tr>
                                        <td class="right">Mengetahui : <br><b>Ketua PMI Kabupaten Malang</b><br><br><br><br><br>  <strong>Hj. Jajuk Rendra Kresna, S.E., M.M</td>
                                        <td class="left"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        window.onload = function() {
            window.print(); // Memicu pencetakan halaman saat halaman dimuat
        };
    </script> --}}
@stop