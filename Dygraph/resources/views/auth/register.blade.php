<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Penjualan</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('font-awesome/all.css') }}">

  <!-- CSS Libraries -->

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
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="login-brand">
              <img src="{{ asset('img/logo.png') }}" alt="logo" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" autofocus required="">
                  </div>

                  @if ($errors->has('name'))
                      <script>
                        iziToast.error({
                            title: 'Gagal mendaftar!',
                            message: "{{ $errors->first('name') }}",
                            position: 'bottomRight'
                        });
                      </script>
                  @endif

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required="">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  @if ($errors->has('email'))
                    <script>
                      iziToast.error({
                          title: 'Gagal mendaftar!',
                          message: "{{ $errors->first('email') }}",
                          position: 'bottomRight'
                      });
                    </script>
                  @endif

                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>

                  @if ($errors->has('password'))
                      <script>
                        iziToast.error({
                            title: 'Gagal mendaftar!',
                            message: "{{ $errors->first('password') }}",
                            position: 'bottomRight'
                        });
                      </script>
                  @endif

                  <div class="form-group">
                    <label for="password2" class="d-block">Password Confirmation</label>
                    <input id="password2" type="password" class="form-control" name="password_confirmation" required="">
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required="">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Romadhan 2019
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Template JS File -->
  <script src="{{ asset('template/js/scripts.js') }}"></script>
  <script src="{{ asset('template/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('template/js/page/auth-register.js') }}"></script>
</body>
</html>
