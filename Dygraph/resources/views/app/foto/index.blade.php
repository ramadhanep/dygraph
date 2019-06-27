@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Foto</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Foto</a></div>
            <div class="breadcrumb-item">Index</div>
        </div>
    </div>

    <div class="section-body">
        <div class="upload-foto-btn">
            <a href="{{ route('fotoAdd') }}" id="upload-btn" class="btn btn-flat btn-primary"><i class="fas fa-upload"></i></a>
        </div>
        <div class="row">
            @include('_____API.tanggal-indo')
            @foreach($fotos as $res)
                @php
                    $d = $res->created_at;
                    $t = $d->format('Y-m-d');
                @endphp
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="{{ asset('UploadedFile/foto/'.$res->foto) }}" style="background-image: url(&quot;{{ asset('UploadedFile/foto/'.$res->foto) }}&quot;);">
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-category"><a>{{ $res->category->category }}</a> <div class="bullet"></div> <a>{{ tgl_indo($t) }}</a></div>
                    <p>
                        @if(strlen($res->deskripsi_foto) > 50)
                            @php echo substr($res->deskripsi_foto,0,50) @endphp...
                        @else
                            @php echo $res->deskripsi_foto @endphp
                        @endif
                    </p>
                    <div class="article-user">
                    <img alt="image" src="{{ asset('UploadedFile/fotografer_profile/'.$res->fotografer->profile) }}">
                    <div class="article-user-details">
                        <div class="user-detail-name">
                        <a href="#">{{ $res->fotografer->nama_lengkap }}</a>
                        </div>
                        <div class="text-job">Fotografer</div>
                    </div>
                    </div>
                </div>
                <div class="action-article">
                    <a href="{{ route('fotoEdit', $res->id) }}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" data-uri="{{ route('fotoDelete', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal"><i class="fas fa-trash-alt"></i></a>
                </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>

        @if(session('alertHapus'))
            <script>
                iziToast.success({
                    title: 'Berhasil menghapus Foto!',
                    message: "{{ session('alertHapus') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertEdit'))
            <script>
                iziToast.success({
                    title: 'Berhasil mengedit Foto!',
                    message: "{{ session('alertEdit') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertTambah'))
            <script>
                iziToast.success({
                    title: 'Berhasil menambah Foto!',
                    message: "{{ session('alertTambah') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @endif
@endsection