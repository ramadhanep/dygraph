<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dygraph &mdash; Romadhan</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('font-awesome/all.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/summernote/summernote-bs4.css') }}">

  <link rel="stylesheet" href="{{ asset('template/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/izitoast/css/iziToast.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/modules/select2/dist/css/select2.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/components.css') }}">

  <link rel="stylesheet" href="{{ asset('css/custom-template.css') }}">

  <!-- General JS Scripts -->
  <script src="{{ asset('template/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/modules/popper.js') }}"></script>
  <script src="{{ asset('template/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('template/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('template/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <script src="{{ asset('template/modules/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('template/modules/jquery-ui/jquery-ui.min.js') }}"></script>

  <script src="{{ asset('template/modules/izitoast/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('template/modules/chart.min.js') }}"></script>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if(!empty(Auth::user()->profile))
            <img alt="image" src="{{ asset('UploadedFile/user_profile/'.Auth::user()->profile) }}" class="rounded-circle mr-1">
            @else
            <img alt="image" src="{{ asset('template/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            @endif
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">
                LOGGED IN
                @include('_____API/time-ago-en')
                @php
                if(session('logged')){
                  $v = session('logged');
                  echo timeAgoEn($v);
                }
                @endphp
              </div>
              <a href="{{ url('profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('home') }}">Dygraph</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">DG</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ url('home') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Fotografer</li>
            <li id="fotograferLink" ><a class="nav-link" href="{{ url('fotografer') }}"><i class="far fa-user-circle"></i> <span>Fotografer</span></a></li>

            <li class="menu-header">Foto</li>
            <li id="categoryLink"><a class="nav-link" href="{{ url('category') }}"><i class="far fa-images"></i> <span>Kategori Foto</span></a></li>
            <li id="fotoLink"><a class="nav-link" href="{{ url('foto') }}"><i class="fas fa-camera-retro"></i> <span>Foto</span></a></li>
            <li id="likesLink"><a class="nav-link" href="{{ url('likes') }}"><i class="far fa-heart"></i> <span>Likes</span></a></li>

            <li class="menu-header">Manajemen User</li>
            <li id="manajemenUserLink" ><a class="nav-link" href="{{ url('manajemenUser') }}"><i class="fas fa-users"></i> <span>Manajemen User</span></a></li>
          </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a target="blank" href="http://www.romadhanedy.ga" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-download"></i> Android APK
              </a>
              <a target="blank" href="http://www.romadhanedy.ga" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-user-tie"></i> Developer
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
          @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Development by <a target="blank" href="http://romadhanedy.ga">Romadhan</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <div class="modal fade" id="deleteCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" id="conf_delete" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
    <!-- Page Specific JS File -->
    <script src="{{ asset('template/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('template/js/page/modules-toastr.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('template/js/scripts.js') }}"></script>
  <script src="{{ asset('template/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('js/link-active.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  @if (session()->has('success'))
    <script>
        iziToast.show({
            title: 'Selamat Datang di Dygraph!',
            message: "{{ Auth::user()->name }}",
            position: 'topRight'
        });
    </script>
  @endif
</body>
</html>
