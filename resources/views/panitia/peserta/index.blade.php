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
                                        <p class="fs-14 mb-1">Jumlah Peserta Terdaftar :</p>
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
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Jumlah Kontingen Terdaftar :</p>
                                        <span class="fs-35 text-black font-w600">{{$unit_daftar_jumlah}}
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
                        <div class="d-flex mb-3">
                            <a href="/exportPeserta" class="btn btn-success text-nowrap"><i class="fa fa-file-excel-o scale5 mr-3" aria-hidden="true"></i>Export Data Excel</a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="/exportFoto" class="btn btn-info text-nowrap"><i class="fa fa-picture-o scale5 mr-3" aria-hidden="true"></i>Download Foto  </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
                        <div class="d-flex mb-3">
                            <a href="/peserta/print" target="_blank" class="btn btn-danger text-nowrap"><i class="fa fa-file-text scale5 mr-3" aria-hidden="true"></i>Generate Laporan</a>
                        </div>
                        <div class="d-flex mb-3">
                            {{-- <a href="/register" target="_blank" class="btn btn-warning text-nowrap"><i class="fa fa-plus scale5 mr-3" aria-hidden="true"></i>Tambah Peserta</a> --}}
                            <a href="/exportQR" class="btn btn-warning text-nowrap"><i class="fa fa-qrcode scale5 mr-3" aria-hidden="true"></i>Download QR</a>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-6">
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
                                        </span>Import</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> --}}
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
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>MIS PMI</th>
                                                <th>Nama</th>
                                                <th>Unit PMI</th>
                                                <th>Foto</th>
                                                {{-- <th>QR Code</th> --}}
                                                <th>Status</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                                <th>Validasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($data_peserta as $peserta)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{$peserta->user->email}}</td>
                                                <td>
                                                    @if ($peserta->mis_peserta == NULL)
                                                        MIS Tidak Ada
                                                    @endif
                                                    {{$peserta->mis_peserta}}
                                                </td>
                                                <td>{{$peserta->nama_peserta}}</td>
                                                <td>{{$peserta->unit->nama_unit}}</td>
                                                {{-- <td><a href="/file_kta/{{$peserta->kta_peserta}}" target="_blank"><span class="badge badge-info"><i class="fa fa-eye color-info"></i></span></a></td> --}}
												{{-- <td><a href="/file_suratsehat/{{$peserta->suratsehat_peserta}}"target="_blank" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-eye color-info"></i></a></td> --}}
                                                <td class="py-2 text-right"><a href="/file_foto/{{$peserta->foto_peserta}}" target="_blank"><span class="badge badge-success">Lihat<span class="ml-1 fa fa-eye"></span></span></a>
                                                </td>		
												{{-- <td><a href="/storage{{$peserta->qrcode_peserta}}"target="_blank" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-eye color-success"></i></a></td>		 --}}
                                                @if ($peserta->status_peserta == 'Aktif')
                                                <td class="py-2 text-right"><span class="badge badge-success">Valid<span
                                                    class="ml-1 fa fa-check"></span></span>
                                                </td>
                                                @else
                                                <td class="py-2 text-right"><span class="badge badge-danger">Tidak Valid<span
                                                    class="ml-1 fa fa-times"></span></span>
                                                </td>
                                                @endif
                                                @if ($peserta->role_peserta == 'Peserta')
                                                <td class="py-2 text-right"><span class="badge badge-success">Peserta</span></td>
                                                @elseif($peserta->role_peserta == 'Pembina')
                                                <td class="py-2 text-right"><span class="badge badge-warning">Pembina</span></td>
                                                @elseif($peserta->role_peserta == 'Pimpinan')
                                                <td class="py-2 text-right"><span class="badge badge-danger">Pimpinan</span></td>
                                                @else
                                                <td class="py-2 text-right"><span class="badge badge-info">Panitia</span></td>
                                                @endif
                                                <td>
                                                    @if ($peserta->user->role == 'Panitia')
                                                            <a href="javascript:void(0);"><span class="badge badge-info"></i>Panitia</span></a>
                                                    @else
                                                        <div class="d-flex">
                                                            <a href="/dashboard/peserta/{{$peserta->id_peserta}}" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                            
                                                            <form action="/peserta/delete/{{$peserta->id_peserta}}" method="POST" id="hapus-peserta">
                                                                {{ csrf_field() }}
                                                                @method('DELETE')
                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp mr-1" onclick="confirmDelete()"><i class="fa fa-trash"></i></a>
                                                                {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a> --}}
                                                            </form>
                                                        </div>												
                                                    @endif
												</td>
                                                <td>
                                                    @if ($peserta->status_peserta == 'Tidak Aktif')
                                                    <a href="/peserta/validasi/{{$peserta->id_peserta}}" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check-circle-o"></i></a>
                                                    @else 
                                                    <a href="/peserta/unvalidasi/{{$peserta->id_peserta}}" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-times"></i></a>
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
                  
                    <script>
                        function confirmDelete() {
                            event.preventDefault(); 
                            swal.fire({
                                title: 'Konfirmasi',
                                text: 'Anda yakin ingin menghapus Peserta ini?',
                                type: 'question',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, Hapus!',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.value) {
                                    // Jika pengguna menekan tombol "Ya, Hapus!"
                                    document.getElementById('hapus-peserta').submit();
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@stop