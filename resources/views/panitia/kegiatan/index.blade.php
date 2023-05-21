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
                                    <p class="fs-14 mb-1">Jumlah Jumbara</p>
                                    <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_jumbara}}
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
                                    <p class="fs-14 mb-1">Jumlah Temu Karya</p>
                                    <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_temu_karya}}
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
                                    <p class="fs-14 mb-1">Jumlah Keseluruhan</p>
                                    <span class="fs-35 text-black font-w600">{{$jumlah_kegiatan_semua}}
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
                {{-- Modal Tambah Unit  --}}
                {{-- <div class="modal fade" id="tambahModalPeserta">
                    <div class="modal-dialog modal-dialog-centered-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Unit</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
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
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select id="inputState" class="btn btn-primary light btn-rounded form-control default-select">
                                                    <option selected>Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Zip</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambahModalPeserta">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="/kegiatan/tambah">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Tambah Kegiatan</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Kegiatan</label>
                                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                                                </div>
                                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                                    <label>Tanggal Kegiatan</label>
                                                    <input type="text" id="mdate" name="tanggal_kegiatan" class="form-control" placeholder="Ini Tanggal">
                                                </div>
                                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                                    <label>Waktu Kegiatan</label>
                                                    <input type="text" id="timepicker" name="waktu_kegiatan" class="form-control" placeholder="Ini Waktu">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Jenis Kegiatan</label>
                                                    <select id="jenis_kegiatan" name="jenis_kegiatan" class="btn btn-primary light btn-rounded form-control default-select" required>
                                                        <option selected>Choose...</option>
                                                        <option value="Jumbara">Jumbara</option>
                                                        <option value="Temu Karya">Temu Karya</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tingkat Kegiatan</label>
                                                    <select id="jenis_kegiatan" name="jenis_kegiatan" class="btn btn-primary light btn-rounded form-control default-select" required>
                                                        <option selected>Choose...</option>
                                                        <option value="KSR">KSR</option>
                                                        <option value="WIRA">WIRA</option>
                                                        <option value="MADYA">MADYA</option>
                                                        <option value="MULA">MULA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Detail Kegiatan</label>
                                                    <textarea type="text" class="form-control" name="detail_kegiatan" required></textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Modal Import Kegiatan --}}
                <div class="modal fade" id="importModalKegiatan">
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
                            <h4 class="card-title">Data Kegiatan Jumbara</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($data_kegiatan_jumbara as $kegiatan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$kegiatan->nama_kegiatan}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->format('H:i')}} WIB</td>
                                            @if (($kegiatan->status_kegiatan == 'Aktif'))
                                                <td class="py-2 text-right"><span class="badge badge-success">Aktif<span class="ml-1 fa fa-check"></span></span></td>                                                
                                            @else
                                                <td class="py-2 text-right"><span class="badge badge-danger">Tidak<span class="ml-1 fa fa-times"></span></span></td>
                                            @endif
                                            <td>   
                                                <a href="/dashboard/kegiatan/{{$kegiatan->id_kegiatan}}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                <a href="/kegiatan/hapus/{{$kegiatan->id_kegiatan}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
                                                @if($kegiatan->status_kegiatan == 'Tidak Aktif')
                                                    <a href="/kegiatan/aktif/{{$kegiatan->id_kegiatan}}" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check-circle-o"></i></a>
                                                @else 
                                                    <a href="/kegiatan/nonaktif/{{$kegiatan->id_kegiatan}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-times"></i></a>
                                                @endif
                                            </td>												
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Kegiatan Temu Karya</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($data_kegiatan_temu_karya as $kegiatan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$kegiatan->nama_kegiatan}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($kegiatan->waktu_kegiatan)->format('H:i')}} WIB</td>
                                            @if (($kegiatan->status_kegiatan == 'Aktif'))
                                                <td class="py-2 text-right"><span class="badge badge-success">Aktif<span class="ml-1 fa fa-check"></span></span></td>                                                
                                            @else
                                                <td class="py-2 text-right"><span class="badge badge-danger">Tidak<span class="ml-1 fa fa-times"></span></span></td>
                                            @endif
                                            <td>   
                                                <a href="/dashboard/kegiatan/{{$kegiatan->id_kegiatan}}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                <a href="/kegiatan/hapus/{{$kegiatan->id_kegiatan}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
                                                @if($kegiatan->status_kegiatan == 'Tidak Aktif')
                                                    <a href="/kegiatan/aktif/{{$kegiatan->id_kegiatan}}" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check-circle-o"></i></a>
                                                @else 
                                                    <a href="/kegiatan/nonaktif/{{$kegiatan->id_kegiatan}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-times"></i></a>
                                                @endif
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