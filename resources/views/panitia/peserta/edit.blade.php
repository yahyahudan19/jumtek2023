@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/peserta">Peserta</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
                <li class="breadcrumb-item" ><a href="/dashboard/peserta"><td class="py-2 text-right"><span class="badge badge-warning">Kembali<span
                    class="ml-1 fa fa-arrow-left"></span></span></a>
                </td></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Peserta</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="/peserta/update" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mis_peserta">MIS PMI
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mis_peserta" name="mis_peserta" value="{{$peserta->mis_peserta}}" readonly>
                                                <input type="text" class="form-control" id="id_peserta" name="id_peserta" value="{{$peserta->id_peserta}}" hidden>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_peserta">Nama Lengkap
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="{{$peserta->nama_peserta}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="unit_id">Unit PMI
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="unit_id" name="unit_id">
                                                    <option value="{{$peserta->unit->id_unit}}">{{$peserta->unit->nama_unit}}</option>
                                                    @foreach ($data_unit as $unit)
                                                        <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="alamat_peserta">Alamat
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_peserta" name="alamat_peserta" value="{{$peserta->alamat_peserta}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="role_peserta">Role
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="role_peserta" name="role_peserta">
                                                    <option value="{{$peserta->role_peserta}}">{{$peserta->role_peserta}}</option>
                                                    <option value="Peserta">Peserta</option>
                                                    <option value="Pembina">Pembina</option>
                                                    <option value="Pimpinan">Pimpinan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="foto_peserta">Foto
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="foto_peserta" name="foto_peserta" placeholder="Upload Dulu!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">QR Code</label>
                                            <a href="/storage{{$peserta->qrcode_peserta}}" target="_blank"><span class="badge badge-danger">Lihat<span class="ml-1 fa fa-eye"></span></span></a>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Foto</label>
                                            <a href="/file_foto/{{$peserta->foto_peserta}}" target="_blank"><span class="badge badge-warning">Lihat<span class="ml-1 fa fa-eye"></span></span></a>
                                        </div>
                                        @if ($peserta->role_peserta == 'Peserta')
                                        @else
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Surat Tugas </label>
                                            <a href="/file_surattugas/{{$peserta->surattugas_pembina}}" target="_blank"><span class="badge badge-success">Lihat<span class="ml-1 fa fa-eye"></span></span></a>
                                        </div>
                                        @endif
                                    </div>
                                    {{-- <div class="col-xl-4">
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($peserta->role_peserta == 'Peserta')
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surat Tugas</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="/peserta/surattugas" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="surattugas_pembina">Surat Tugas</label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="surattugas_pembina" name="surattugas_pembina" value="..and confirm it!">
                                                <input type="text" class="form-control" id="id_peserta" name="id_peserta" value="{{$peserta->id_peserta}}" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="form-group row">
                                            <div class="col-lg-7">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="/peserta/password/" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="surattugas_pembina">Update Password</label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{$peserta->user_id}}" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop