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
                                        <p class="fs-14 mb-1">Jumlah Peserta</p>
                                        <span class="fs-35 text-black font-w600">856
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
                                        <p class="fs-14 mb-1">Jumlah Kontingen</p>
                                        <span class="fs-35 text-black font-w600">856
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
                    {{-- Modal Tambah Peserta  --}}
                    <div class="modal fade" id="tambahModalPeserta">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Peserta</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" placeholder="Nama">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Unit PMI</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>MIS PMI</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label>KSR/PMR</label>
                                                    <select id="inputState" class="btn btn-primary light btn-rounded form-control default-select">
                                                        <option selected>Choose...</option>
                                                        <option>KSR</option>
                                                        <option>PMR</option>
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
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Peserta</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Unit PMI</th>
                                                <th>MIS PMI</th>
                                                <th>File KTA</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A. Yahya Hudan Permana</td>
                                                <td>KSR Gondanglegi</td>
                                                <td>357304100323004</a></td>
                                                <td><a href="javascript:void(0);"><span class="badge badge-info"><i class="fa fa-plus color-info"></i>File KTA</span></a></td>
                                                <td><a href="javascript:void(0);"><span class="badge badge-success"></i>Validasi</span></a></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
														<a href="#" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check-circle-o"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            <tr>
                                                <td>Ahmad Naufal Y.P</td>
                                                <td>KSR Gondanglegi</td>
                                                <td>357304100323004</a></td>
                                                <td><a href="javascript:void(0);"><span class="badge badge-info"><i class="fa fa-plus color-info"></i> File KTA</span></a></td>
                                                <td><a href="javascript:void(0);"><span class="badge badge-warning mr-1"></i> Pending</span></a></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
														<a href="#" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check-circle-o"></i></a>
													</div>												
												</td>												
                                            </tr>
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