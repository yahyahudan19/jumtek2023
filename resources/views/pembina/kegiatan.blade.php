@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item" ><a href="/dashboard"><td class="py-2 text-right"><span class="badge badge-warning">Kembali<span
                    class="ml-1 fa fa-arrow-left"></span></span></a>
                </td></li>
                <li class="breadcrumb-item" ><a href="/dashboard/kegiatan/print" target="_blank"><td class="py-2 text-right"><span class="badge badge-success">Cetak<span
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
                                    <p class="fs-14 mb-1">Jumlah Kegiatan :</p>
                                    <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan}}
                                        <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                                        </svg>
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
                </div> --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kegiatan Yang diikuti : </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kegiatan as $kegiatan)
                                        <tr>
                                            <td>{{$kegiatan->nama_kegiatan}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->format('H:i')}} WIB</td>
                                            <td>
                                                {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a> --}}
                                                <a href="/dashboard/pembina/kegiatan/{{$kegiatan->id_kegiatan}}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                            </td>
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