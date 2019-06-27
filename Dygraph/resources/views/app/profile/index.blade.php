@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('template/modules/jquery-selectric/selectric.css') }}">
<script src="{{ asset('template/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('profileUpdate', $masters->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body foto-upload">
                        <div class="form-group">
                            <div class="col-sm-12">
                                @if(!empty($masters->profile))
                                <div id="image-preview" class="image-preview" style="background: url('{{ asset('UploadedFile/user_profile/'.$masters->profile) }}'); background-size: cover; background-repeat: no-repeat;">
                                @else
                                <div id="image-preview" class="image-preview" style="background: url('{{ asset('template/img/avatar/avatar-1.png') }}'); background-size: cover; background-repeat: no-repeat;">
                                @endif
                                    <label for="image-upload" id="image-label">Change File</label>
                                    <input type="file" name="profile" id="image-upload"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" required="" value="{{ $masters->name }}">
                                    <div class="invalid-feedback">
                                        Form Nama harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" required="" value="{{ $masters->email }}">
                                    <div class="invalid-feedback">
                                        Form Email harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <button class="btn btn-primary btn-flat btn_pw_change">Ubah Password</button>
                                <button class="btn btn-primary btn-flat btn_pw_change_cancel">Batal</button>
                            </div><br><br>
                        </div>
                        <div class="row" id="pw_change">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Password Lama</label>
                                    <input type="password" class="form-control" id="old_password" name="old_password">
                                    <div class="invalid-feedback">
                                        Form Password Lama harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                    <div class="invalid-feedback">
                                        Form Password Baru harus diisi!
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

@if(session('alertSuccess'))
    <script>
        iziToast.success({
            title: 'Berhasil memperbarui profil!',
            message: "{{ Auth::user()->name }}",
            position: 'bottomRight'
        });
    </script>
@elseif(session('alertPassword'))
    <script>
        iziToast.error({
            title: 'Terjadi masalah pada password!',
            message: "{{ session('alertPassword') }}",
            position: 'bottomRight'
        });
    </script>
@endif
<script>
    $('#pw_change').hide();
    $('.btn_pw_change_cancel').hide();
    $('.btn_pw_change').click(function(e){
        e.preventDefault();
        $('#old_password').attr('required', '');
        $('#new_password').attr('required', '');
        $('#pw_change').slideDown("slow");
        $(this).hide();
        $('.btn_pw_change_cancel').show();
    });
    $('.btn_pw_change_cancel').click(function(e){
        e.preventDefault();
        $('#old_password').attr('required', false);
        $('#new_password').attr('required', false);
        $('#pw_change').slideUp("slow");
        $(this).hide();
        $('.btn_pw_change').show();
    });
</script>
<script src="{{ asset('template/js/page/features-post-create.js') }}"></script>
@endsection