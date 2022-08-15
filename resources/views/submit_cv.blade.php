<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="hold-transition submit-page">
    <div class="container">
        <div class="submit-box">
            <div class="submit-card card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Submit CV</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Submit your cv</p>
                    @include('alert')
                    <form action="" method="POST" enctype="multipart/form-data">
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
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('phone'))
                            <span class="ml-1 text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('file'))
                            <span class="ml-1 text-danger">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control" placeholder="Input File">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-file"></span>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('position'))
                            <span class="ml-1 text-danger">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" name="position" class="form-control" placeholder="Position">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <h5 class="mr-3">Proposer:</h5>
                            <select name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('date'))
                            <span class="ml-1 text-danger">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="date" name="date" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Submit CV</button>
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
