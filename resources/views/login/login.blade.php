<!doctype html>
<html lang="en">
<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS lokal dari public/login/css/ -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">
</head>

<body class="img js-fullheight" style="background-image: url('{{ asset('login/images/i2.jpg') }}');">

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login (For Admin Only)</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Enter The Email and passowrd correctly</h3>

                    <!-- FORM LOGIN -->
                    <form action="{{ route('login.process') }}" method="POST" class="signin-form">
                        @csrf

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>

                        <div class="form-group d-md-flex">
                            {{-- <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div> --}}
                            <div class="w-50 text-md-right">
                                {{-- <a href="#" style="color: #fff">Forgot Password</a> --}}
                            </div>
                        </div>
                    </form>

                    {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> --}}

                    <div class="social d-flex text-center">
                        {{-- <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS Lokal dari public/login/js/ -->
<script src="{{ asset('login/js/jquery.min.js') }}"></script>
<script src="{{ asset('login/js/popper.js') }}"></script>
<script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('login/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('login_error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: '{{ session('login_error') }}',
        confirmButtonText: 'OK'
    });
</script>
@endif

@if(session('login_success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Login Berhasil',
        text: '{{ session('login_success') }}',
        confirmButtonText: 'OK'
    });
</script>
@endif

</body>
</html>
