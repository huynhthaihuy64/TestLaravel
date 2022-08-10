<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="form-page">
    <div class="container">
        <div class="form-box">
            <div class="form-card card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Confirm Schedule</b></a>
                </div>
                <div class="card-body">
                    @include('alert')
                    <form action="" method="POST">
                        @if ($errors->has('name'))
                            <span class="ml-1 text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
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
                        <div class="input-group mb-3">
                            <input type="datetime-local" name="date" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
