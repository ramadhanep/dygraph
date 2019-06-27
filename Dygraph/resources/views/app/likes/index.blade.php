@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Data Likes</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data</a></div>
        <div class="breadcrumb-item"><a href="#">Likes</a></div>
        <div class="breadcrumb-item">Index</div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Kategori Foto</th>
                        <th>Fotografer</th>
                        <th>Jumlah Like</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($likes as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('UploadedFile/foto/'.$res->foto->foto) }}" alt="profile" width="30" height="30" data-toggle="tooltip" data-original-title="{{ $res->foto->fotografer->nama_lengkap }}" style="object-fit: cover;border-radius: 50%;"></td>
                        <td>{{ $res->foto->category->category }}</td>
                        <td>{{ $res->foto->fotografer->nama_lengkap }}</td>
                        <td>{{ $res->like_count }}</td>
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