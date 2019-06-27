@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('template/modules/jquery-selectric/selectric.css') }}">
<script src="{{ asset('template/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<section class="section">
    <div class="section-header">
        <h1>Foto</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Foto</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('fotoSave') }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div id="image-preview" class="image-preview lg">
                                <label for="image-upload" id="image-label">Pilih File</label>
                                <input type="file" name="foto" id="image-upload" required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Kategori Foto</label>
                                    <select name="id_category" id="id_category" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($categories as $res)
                                        <option value="{{ $res->id }}">{{ $res->category }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Kategori Foto harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Fotografer</label>
                                    <select name="id_fotografer" id="id_fotografer" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($fotografers as $res)
                                        <option value="{{ $res->id }}">{{ $res->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Fotografer harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Deskripsi Foto</label>
                                    <textarea class="summernote-simple" name="deskripsi_foto" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Form Deskripsi Foto harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Setuju, dan sudah memeriksa data dengan benar.</label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" id="submit-btn">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $('#fotoLink').addClass('active');
</script>
<script src="{{ asset('template/js/page/features-post-create.js') }}"></script>
@endsection