@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid"> 
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Peserta</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$data_unit->nama_unit}}</a></li>
                <li class="breadcrumb-item" ><a href="/dashboard/"><td class="py-2 text-right"><span class="badge badge-warning">Kembali<span
                    class="ml-1 fa fa-arrow-left"></span></span></a>
                </td></li>
                <li class="breadcrumb-item" ><a href="/dashboard/unit/print" target="_blank"><td class="py-2 text-right"><span class="badge badge-success">Cetak<span
                    class="ml-1 fa fa-print"></span></span></a>
                </td></li>
            </ol>
            
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
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
                                    <p class="fs-14 mb-1">Pembina Kontingen</p>
                                    @if ($data_pembina == NULL)
                                        <span class="badge badge-warning">Pembina Belum Terdaftar <span class="ml-1 fa fa-exclamation"></span></span>
                                    @else
                                        <span class="badge badge-success">{{$data_pembina->nama_peserta}}</span>
                                    @endif
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
                                    <p class="fs-14 mb-1">Pimpinan Kontingen</p>
                                    @if ($data_pimpinan == NULL)
                                    <span class="badge badge-warning">Pimpinan Belum Terdaftar <span class="ml-1 fa fa-exclamation"></span></span>
                                    @else
                                        <span class="badge badge-info">{{$data_pimpinan->nama_peserta}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Peserta : <b>{{$data_unit->nama_unit}}</b> </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>MIS PMI</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                            <th>QR Code</th>
                                            <th>Sebagai</th>
                                            <th>Status</th>
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
                                            {{-- <td><a href="/file_kta/{{$peserta->kta_peserta}}" target="_blank"><span class="badge badge-info"><i class="fa fa-eye color-info"></i></span></a></td> --}}
                                            <td><a href="/file_foto/{{$peserta->foto_peserta}}"target="_blank" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-eye color-info"></i></a></td>		
                                            <td><a href="/storage{{$peserta->qrcode_peserta}}"target="_blank" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-eye color-success"></i></a></td>		
                                            @if ($peserta->role_peserta == 'Peserta')
                                               <td class="py-2 text-right"><span class="badge badge-success">Peserta</span></td>
                                            @elseif($peserta->role_peserta == 'Pembina')
                                               <td class="py-2 text-right"><span class="badge badge-warning">Pembina</span></td>
                                            @elseif($peserta->role_peserta == 'Pimpinan')
                                               <td class="py-2 text-right"><span class="badge badge-danger">Pimpinan</span></td>
                                            @else
                                               <td class="py-2 text-right"><span class="badge badge-info">Panitia</span></td>
                                            @endif
                                            @if ($peserta->status_peserta == 'Aktif')
                                            <td class="py-2 text-right"><span class="badge badge-success">Valid<span
                                                class="ml-1 fa fa-check"></span></span>
                                            </td>
                                            @else
                                            <td class="py-2 text-right"><span class="badge badge-danger">Tidak Valid<span
                                                class="ml-1 fa fa-times"></span></span>
                                            </td>
                                            @endif
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