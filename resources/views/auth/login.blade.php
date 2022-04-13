<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Sign in</title>
</head>
<body>
    <section class="ftco-section">
        <div class="container d-flex justify-content-center">
            <div class="row justify-content-center border-box align-middle">
                <div class="col-6 img-login">
                    <img src="{{ asset('img/login.jpg')}}" alt="">
                </div>
                <div class="col-6">
                    <div class="login-wrap p-4 p-md-5 justify-content-center">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>
                        </div>
                        @if (session()->has('loginerror'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{session('loginerror')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="/login" method="POST" class="signin-form">
                            @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="nik">NIK</label>
                                    <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                                </div>
                                <div class="form-group mb-5">
                                    <label class="label" for="password">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mt-3">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign in</button>                                   
                                </div>
                        </form>
                        <div class="pasword text-md-right">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>