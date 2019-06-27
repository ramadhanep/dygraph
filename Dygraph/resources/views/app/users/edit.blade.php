@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('template/modules/jquery-selectric/selectric.css') }}">
<script src="{{ asset('template/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<section class="section">
    <div class="section-header">
        <h1>Manajemen User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Manajemen User</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('manajemenUserUpdate', $users->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body foto-upload">
                        <div class="form-group">
                            <div class="col-sm-12">
                                @if(!empty($users->profile))
                                <div id="image-preview" class="image-preview" style="background: url('{{ asset('UploadedFile/user_mobile_profile/'.$users->profile) }}'); background-size: cover; background-repeat: no-repeat;">
                                    <label for="image-upload" id="image-label">Change File</label>
                                    <input type="file" name="profile" id="image-upload"/>
                                </div>
                                @else
                                <div id="image-preview" class="image-preview" style="background: url('{{ asset('img/default-user.png') }}'); background-size: cover; background-repeat: no-repeat;">
                                    <label for="image-upload" id="image-label">Change File</label>
                                    <input type="file" name="profile" id="image-upload"/>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" required="" value="{{ $users->name }}">
                                    <div class="invalid-feedback">
                                        Form Nama Lengkap harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required="" value="{{ $users->email }}">
                                    <div class="invalid-feedback">
                                        Form Email harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Password (Kosongkan jika tidak diubah)</label>
                                    <input type="password" class="form-control" name="password">
                                    <div class="invalid-feedback">
                                        Form Password harus diisi!
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
    $('#manajemenUserLink').addClass('active');
</script>
<script src="{{ asset('template/js/page/features-post-create.js') }}"></script>
@endsection