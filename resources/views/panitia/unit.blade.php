@extends('layouts.master')
@section('content')
    <div class="content-body">
        <div class="container-fluid"> 
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
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
                    {{-- <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah Unit</p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_unit}}
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
                                        {{-- <button type="button" class="btn btn-rounded btn-success" data-toggle="modal" data-target="#importModalPeserta"><span
                                            class="btn-icon-left text-success"><i class="fa fa-cloud-upload color-success"></i>
                                        </span>Import</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- Modal Tambah Unit  --}}
                    <div class="modal fade" id="tambahModalPeserta">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="/unit/tambah">
                                            {{ csrf_field() }}
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Unit</label>
                                                    <input type="text" name="nama_unit" class="form-control" placeholder="Nama Unit" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>KSR/PMR</label>
                                                    <select id="status_unit" name="status_unit" class="btn btn-primary light btn-rounded form-control default-select" required>
                                                        <option selected>Choose...</option>
                                                        <option value="KSR">KSR</option>
                                                        <option value="PMR">PMR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Import Peserta --}}
                    <div class="modal fade" id="importModalPeserta">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Import Data Unit </h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <form action="/unit/import" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <p>Silahkan Pilih File : </p>
                                        <div class="basic-form custom_file_input">
                                            {{-- <form action="#"> --}}
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary btn-sm" type="button">Button</button>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="import_unit" id="import_unit">
                                                        <label class="custom-file-label">Choose file</label>
                                                    </div>
                                                </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Unit</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Nama Unit</th>
                                                <th>KSR/PMR</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_unit as $unit)
                                            <tr>
                                                <td>{{$unit->nama_unit}}</a></td>
                                                <td>{{$unit->status_unit}}</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="/unit/hapus/{{$unit->id_unit}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
													</div>												
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