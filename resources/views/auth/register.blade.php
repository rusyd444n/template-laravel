<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet">
    <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
    <!--bootstrap css-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="sass/main.css" rel="stylesheet">
    <link href="sass/dark-theme.css" rel="stylesheet">
    <link href="sass/blue-theme.css" rel="stylesheet">
    <link href="sass/responsive.css" rel="stylesheet">

</head>

<body class="bg-register">


    <!--authentication-->

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-5">
                        <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to create your account</p>
                        <div class="form-body my-4">
                            <form class="row g-3" method='POST' action="{{ route('register') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="inputUsername"  class="form-label">Username</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        {{-- <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                class="bi bi-eye-slash-fill"></i></a> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password-confirm" class="form-label">Password Confirmation</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">
                                        {{-- <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                class="bi bi-eye-slash-fill"></i></a> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <label for="inputSelectCountry" class="form-label">Country</label>
                                    <select class="form-select" id="inputSelectCountry"
                                        aria-label="Default select example">
                                        <option selected="">India</option>
                                        <option value="1">United Kingdom</option>
                                        <option value="2">America</option>
                                        <option value="3">Dubai</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to
                                            Terms &amp; Conditions</label>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-grd-danger">Register</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in
                                                here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- <div class="separator section-padding">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR</p>
                            <div class="line"></div>
                        </div>

                        <div class="d-flex gap-3 justify-content-center mt-4">
                            <a href="javascript:;"
                                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                                <i class="bi bi-google fs-5 text-white"></i>
                            </a>
                            <a href="javascript:;"
                                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                                <i class="bi bi-facebook fs-5 text-white"></i>
                            </a>
                            <a href="javascript:;"
                                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                                <i class="bi bi-linkedin fs-5 text-white"></i>
                            </a>
                            <a href="javascript:;"
                                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                                <i class="bi bi-github fs-5 text-white"></i>
                            </a>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    <!--authentication-->




    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");

     $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>

</body>

</html>
