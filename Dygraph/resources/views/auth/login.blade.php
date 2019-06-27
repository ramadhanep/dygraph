<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Dygraph</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('font-awesome/all.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('template/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/components.css') }}">

  <link rel="stylesheet" href="{{ asset('template/modules/izitoast/css/iziToast.min.css') }}">

  <!-- General JS Scripts -->
  <script src="{{ asset('template/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/modules/popper.js') }}"></script>
  <script src="{{ asset('template/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/js/stisla.js') }}"></script>

  <script src="{{ asset('template/modules/izitoast/js/iziToast.min.js') }}"></script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="80" class="mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Dygraph</span></h4>
            <p class="text-muted">Selamat datang di Administrator aplikasi mobile Dygraph, Silahkan login untuk masuk</p>
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Romadhan. Made with 💙 by Romadhan
              <div class="mt-2">
                <a target="blank" href="http://www.romadhanedy.ga">Website</a>
                <div class="bullet"></div>
                <a target="blank" href="https://github.com/dyprast">Github</a>
                <div class="bullet"></div>
                <a target="blank" href="https://www.youtube.com/channel/UCzuoZCK8NjpEoCYnMq5X0Tw?view_as=subscriber">Youtube</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('template/img/unsplash/login-bg.jpg') }}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Aplikasi Dygraph</h1>
                <h5 class="font-weight-normal text-muted-transparent">Development by Romadhan &mdash; SMK Negeri 10 Jakarta</h5>
              </div>
              Website sekolah <a class="text-light bb" target="_blank" href="http://smkn10jakarta.sch.id/">SMK Negeri 10 Jakarta</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    @if ($errors->has('email'))
        <script>
          iziToast.error({
              title: 'Gagal Login!',
              message: "{{ $errors->first('email') }}",
              position: 'topLeft'
          });
        </script>
    @elseif ($errors->has('password'))
        <script>
          iziToast.error({
              title: 'Gagal Login!',
              message: "{{ $errors->first('password') }}",
              position: 'topLeft'
          });
        </script>
    @endif

  <!-- General JS Scripts -->
  <script src="{{ asset('template/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/modules/popper.js') }}"></script>
  <script src="{{ asset('template/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('template/js/scripts.js') }}"></script>
  <script src="{{ asset('template/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>