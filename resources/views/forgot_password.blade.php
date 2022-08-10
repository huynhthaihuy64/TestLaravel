<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-card card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Find Email</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                @include('alert')
                <form action="" method="post">
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
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Send password link</button>
                        </div>
                    </div>
                    @csrf
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ asset(route('login')) }}">Login</a>
                </p>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
