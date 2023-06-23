@extends('layouts.master_blank')
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
                                    <p class="fs-14 mb-1">Nama Peserta : </p>
                                    <span class="fs-20 text-black font-w600">{{$data_peserta->nama_peserta_backup}}
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
                                    <p class="fs-14 mb-1">Kontingen : </p>
                                    <span class="fs-20 text-black font-w600">{{$data_peserta->kontingen_peserta_backup}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
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
                            <form method="POST" action="/tambahKegiatan">
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
                                                    <select id="kegiatan_peserta_backup" name="kegiatan_peserta_backup" class="btn btn-primary light btn-rounded form-control default-select" required>
                                                        <option selected>== KEGIATAN PMR ! ==</option>
                                                        @foreach ($list_kegiatan_PMR as $kegiatan)
															<option value="{{$kegiatan->nama_kegiatan}}">{{$kegiatan->nama_kegiatan}}</option>
														@endforeach
                                                        <option selected>== KEGIATAN KSR ==</option>
                                                        @foreach ($list_kegiatan_KSR as $kegiatan)
															<option value="{{$kegiatan->nama_kegiatan}}">{{$kegiatan->nama_kegiatan}}</option>
														@endforeach
                                                    </select>
                                                    <input type="text" id="nama_peserta_backup" name="nama_peserta_backup" class="form-control" value="{{$data_peserta->nama_peserta_backup}}" hidden>
                                                    <input type="text" id="kontingen_peserta_backup" name="kontingen_peserta_backup" class="form-control" value="{{$data_peserta->kontingen_peserta_backup}}" hidden>
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
                                            <th>Kegiatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kegiatan_ikut as $kegiatan)
                                        <tr>
                                            <td>{{$kegiatan->kegiatan_peserta_backup}}</a></td>
                                            <td><a href="/hapusKegiatan/{{$kegiatan->id_kegiatan_backup}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a></td>
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