@extends('layouts.master')
@section('content')
    <div class="content-body">
        <div class="container-fluid"> 
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                    <li class="breadcrumb-item" ><a href="/dashboard/pembina/kegiatan"><td class="py-2 text-right"><span class="badge badge-warning">Kembali<span
                        class="ml-1 fa fa-arrow-left"></span></span></a>
                    </td></li>
                </ol>
                
            </div>
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
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
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Nama Kegiatan</p>
                                            <span class="fs-20 text-black font-w600">{{$data_kegiatan->nama_kegiatan}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-5 col-lg-5 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Status Kegiatan</p>
                                        @if ($data_kegiatan->status_kegiatan == 'Aktif')
                                            <span class="badge badge-success">Sedang Berjalan<span class="ml-1 fa fa-spinner"></span></span>
                                        @else
                                            <span class="badge badge-warning">Sudah/Belum Berjalan<span class="ml-1 fa fa-exclamation"></span></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detail Kegiatan</h4>
                            </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Kegiatan</label>
                                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"  value="{{$data_kegiatan->nama_kegiatan}}" disabled>
                                                </div>
                                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                                    <label>Tanggal Kegiatan</label>
                                                    <input type="text" id="mdate" name="tanggal_kegiatan" class="form-control" placeholder="Ini Tanggal" value="{{$data_kegiatan->tanggal_kegiatan}}"disabled>
                                                </div>
                                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                                    <label>Waktu Kegiatan</label>
                                                    <input type="text" id="timepicker" name="waktu_kegiatan" class="form-control" placeholder="Ini Waktu" value="{{$data_kegiatan->waktu_kegiatan}}"disabled>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Detail Kegiatan</label>
                                                    <textarea type="text" class="form-control" name="detail_kegiatan" disabled> {{$data_kegiatan->detail_kegiatan}}</textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Peserta Kegiatan :</b> </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>MIS PMI</th>
                                                <th>Nama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_peserta as $peserta)
                                            <tr>
                                                <td>{{$peserta->peserta->mis_peserta}}</a></td>
                                                <td>{{$peserta->peserta->nama_peserta}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop