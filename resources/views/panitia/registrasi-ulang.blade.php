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
                                        <p class="fs-14 mb-1">Peserta Registrasi Ulang :</p>
                                        <span class="fs-35 text-black font-w600">{{$jumlah_peserta_registrasi}}
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
                        {{-- <div class="card">
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
                        </div> --}}
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
                                                <th>Nama</th>
                                                <th>Unit PMI</th>
                                                <th>Status</th>
                                                <th>Role</th>
                                                <th>Waktu Registrasi Ulang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($data_peserta_registrasi as $peserta)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                               
                                                <td>{{$peserta->nama_peserta}}</td>
                                                <td>{{$peserta->unit->nama_unit}}</td>
                                                @if ($peserta->registrasiulang_peserta == 'Sudah')
                                                <td class="py-2 text-right"><span class="badge badge-success">Sudah<span
                                                    class="ml-1 fa fa-check"></span></span>
                                                </td>
                                                @else
                                                <td class="py-2 text-right"><span class="badge badge-danger">Belum<span
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
                                                <td>{{ \Carbon\Carbon::parse($peserta->updated_at)->format('d M Y h:i') }}</td>
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