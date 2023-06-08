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
                                    <p class="fs-14 mb-1">Jumlah User</p>
                                    <span class="fs-35 text-black font-w600">{{$jmlhusr}}
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
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="fs-14 mb-1"><b>Mohon diperhatikan ! : </b></p>
                                    {{-- <span class="fs-20 text-black font-w600">Pastikan Jumlah User dan Jumlah Peserta Sama !</span> --}}
                                    <span class="badge badge-danger">Pastikan Jumlah User dan Jumlah Peserta harus Sama !</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data User</h4>
                            <span><b>Silahkan Lakukan Pengecekan !</b></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($data_user as $user)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->name}}</td>
                                            @if ($user->role == 'Peserta')
                                            <td class="py-2 text-right"><span class="badge badge-success">Peserta</span></td>
                                            @elseif($user->role == 'Pembina')
                                            <td class="py-2 text-right"><span class="badge badge-warning">Pembina</span></td>
                                            @elseif($user->role == 'Pimpinan')
                                            <td class="py-2 text-right"><span class="badge badge-danger">Pimpinan</span></td>
                                            @else
                                            <td class="py-2 text-right"><span class="badge badge-info">Panitia</span></td>
                                            @endif
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
                            <h4 class="card-title">Data User yang gagal terdaftar !</h4>
                            <span><b>Silahkan Hapus data user dibawah ini !</b></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($data_user_gagal as $user)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->name}}</td>
                                            @if ($user->role == 'Peserta')
                                            <td class="py-2 text-right"><span class="badge badge-success">Peserta</span></td>
                                            @elseif($user->role == 'Pembina')
                                            <td class="py-2 text-right"><span class="badge badge-warning">Pembina</span></td>
                                            @elseif($user->role == 'Pimpinan')
                                            <td class="py-2 text-right"><span class="badge badge-danger">Pimpinan</span></td>
                                            @else
                                            <td class="py-2 text-right"><span class="badge badge-info">Panitia</span></td>
                                            @endif
                                            <td>
                                                @if ($user->role == 'Panitia')
                                                    <a href="javascript:void(0);"><span class="badge badge-info"></i>Panitia</span></a>
                                                @else
                                                    <div class="d-flex">
                                                        <form action="/user/delete/{{$user->id}}" method="POST" id="hapus-user">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp mr-1" onclick="confirmDelete()"><i class="fa fa-trash"></i></a>
                                                        </form>
                                                    </div>												
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
                            text: 'Anda yakin ingin menghapus User ini?',
                            type: 'question',
                            showCancelButton: true,
                            confirmButtonText: 'Ya, Hapus!',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.value) {
                                // Jika pengguna menekan tombol "Ya, Hapus!"
                                document.getElementById('hapus-user').submit();
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@stop