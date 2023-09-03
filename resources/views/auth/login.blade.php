<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Log In | {{config('app.name')}}</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{config('app.name')}}" name="description" />
        <meta content="{{config('app.name')}}" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/assets') }}//images/favicon.ico">

		<!-- App css -->
		<link href="{{ asset('template/assets') }}//css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('template/assets') }}//css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('template/assets') }}//css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href="{{ asset('template/assets') }}//css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href="{{ asset('template/assets') }}//css/icons.min.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>

        
    </head>

<body>
    <div class="bg" style="
    background-repeat: no-repeat;
    height: 100vh;
  background-size: cover;
  background-image: linear-gradient(to top, rgba(0, 0, 0, .6), rgba(0, 0, 0, .3)), url('/template/login.jpeg');">
    <div class="authentication-bg rounded">
        <div class="account-pages py-5">
            <div class="container col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-auto">
                            <a href="/">
                            </a>
                        </div>
                        <div class="mx-auto">
                        <img class="rounded mx-auto d-block" src="template/logo_murgana.png" alt="Murgana" width="100" height="100">
                    </div>
                        <h3 class="h3 mb-0 mt-3">Selamat Datang!</h3>
                        <p class="text-muted mt-1 mb-4">
                            Silahkan login terlebih dahulu untuk melanjutkan
                        </p>

                        <form method="POST" class="authentication-form">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="mail"></i>
                                    </span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Emaill">
                                </div>
                                {{-- @include('includes.error',['data' => 'email']) --}}
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                </div>
                                {{-- @include('includes.error',['data' => 'password']) --}}
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" value="1" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3 text-center d-grid">
                                <button class="btn btn-primary" type="submit">Log In</button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('template/assets') }}//js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('template/assets') }}//js/app.min.js"></script>

    </body>
</html>