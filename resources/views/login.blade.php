<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1">Login</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @include('alert')
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                    @csrf
                </form>
                <div class="text-center mt-3 mb-3">
                    <a href="./forgot-password.php" class="btn btn-block btn-danger">
                        <i class="fa-solid fa-key mr-2"></i>Forgot password
                    </a>
                </div>
                <div class="text-center mt-3 mb-3">
                    Not yet a member? <a href="./register.php">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
</body>

</html>
