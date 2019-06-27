@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Kategori Foto</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Kategori Foto</a></div>
            <div class="breadcrumb-item">Index</div>
        </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Kategori Foto</h2>
      <p class="section-lead">
        Berbagai macam jenis foto dalam dunia fotografi.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <a href="{{ route('categoryAdd') }}" class="btn btn-flat btn-icon icon-left btn-primary"><i class="far fa-images"></i> Tambah Kategori Foto</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($categories as $res)
                    <div class="col-6 col-md-3 col-lg-2 mb-5">
                        <div class="category-list">
                            <div class="mb-2" title="{{ $res->category }}">
                                <span class="badge badge-primary text-uppercase cat-foto">
                                    @if(strlen($res->category) > 13)
                                    {{ substr($res->category,0,13) }}..
                                    @else
                                    {{ $res->category }}
                                    @endif
                                </span>
                            </div>
                            <div class="wrapper-cat-list">
                                <img class="img-fluid img-cat" src="{{ asset('UploadedFile/img_category/'.$res->img_category) }}" alt="{{ $res->category }}">
                                <div class="action-cat">
                                    <a href="{{ route('categoryEdit', $res->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" data-uri="{{ route('categoryDelete', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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