@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid"> 
        <div class="col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fs-14 mb-1">Jumlah Kegiatan Yang Diiktui</p>
                                    <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_ikut}}
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
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#tambahModalPeserta"><span
                                        class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Tambah</button>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambahModalPeserta">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="/kegiatan/peserta/tambah">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Pilih Kegiatan</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>

                                <!-- Versi Lama -->

                                <div class="card-body">
                                    <div class="basic-form">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <select id="id_kegiatan" name="id_kegiatan" class="btn btn-primary light btn-rounded form-control default-select" required>
                                                        <option selected>== Pilih Kegiatan ! ==</option>
                                                        @foreach ($data_kegiatan as $kegiatan)
															<option value="{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}}</option>
														@endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- Versi Baru -->

                                {{-- <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <p>Silahkan Pilih Kegiatan <mark class="text-primary">yang Akan Diikuti</mark>.</p>
                                        </div>
                                        <select class="multi-select" name="id_kegiatan[]" id="id_kegiatan" multiple="multiple">
                                            @foreach ($data_kegiatan as $kegiatan)
                                                <option value="{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kegiatan Yang Kamu Ikuti : </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kegiatan_ikut as $kegiatan)
                                        <tr>
                                            <td>{{$kegiatan->kegiatan->nama_kegiatan}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->kegiatan->tanggal_kegiatan)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->kegiatan->waktu_kegiatan)->format('H:i')}} WIB</td>
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