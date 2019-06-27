@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Fotografer</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data</a></div>
        <div class="breadcrumb-item"><a href="#">Fotografer</a></div>
        <div class="breadcrumb-item">Index</div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('fotograferAdd') }}" class="btn btn-flat btn-icon icon-left btn-primary"><i class="fas fa-camera-retro"></i> Tambah Fotografer</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Bergabung Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @include('_____API.tanggal-indo')
                    @foreach($fotografers as $res)
                        @php
                            $d = $res->created_at;
                            $t = $d->format('Y-m-d');
                        @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('UploadedFile/fotografer_profile/'.$res->profile) }}" alt="profile" width="30" height="30" data-toggle="tooltip" data-original-title="{{ $res->nama_lengkap }}" style="object-fit: cover;border-radius: 50%;border: 1px solid #fb6340;"></td>
                        <td>{{ $res->nama_lengkap }}</td>
                        <td>{{ tgl_indo($t) }}</td>
                        <td>
                            <a href="{{ route('fotograferEdit', $res->id) }}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" data-uri="{{ route('fotograferDelete', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal"><i class="fas fa-trash-alt"></i></a>
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
</section>

        @if(session('alertHapus'))
            <script>
                iziToast.success({
                    title: 'Berhasil menghapus Data!',
                    message: "{{ session('alertHapus') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertEdit'))
            <script>
                iziToast.success({
                    title: 'Berhasil mengedit Data!',
                    message: "{{ session('alertEdit') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertTambah'))
            <script>
                iziToast.success({
                    title: 'Berhasil menambah Data!',
                    message: "{{ session('alertTambah') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @endif
@endsection