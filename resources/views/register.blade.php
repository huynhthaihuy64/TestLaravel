<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-card card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Register</b></a>
            </div>
            <div class="card-body">
                @include('alert')
                <form action="" method="post">
                    @if ($errors->has('name'))
                        <span class="ml-1 text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="ml-1 text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="ml-1 text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </ul>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                    @csrf
                </form>

                <div class="social-auth-links text-center mt-3">
                    <a href="{{ asset(route('login')) }}" class="btn btn-block btn-primary">
                        <i class="fa-solid fa-circle-arrow-left mr-1"></i>
                        Return Login Page
                    </a>
                    <a href="{{ asset(route('forgot')) }}" class="btn btn-block btn-danger">
                        <i class="fa-solid fa-key mr-2"></i>Forgot password
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
