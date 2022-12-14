<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
@include('admin.header')
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="submit-card card-primary border border-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Edit User</b></a>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" value="{{ $user->password }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label>Role:</label>
                        <div class="custom-control custom-radio ml-5">
                            <input class="custom-control-input" value="0" type="radio" id="active"
                                name="role" {{ $user->role == 0 ? 'checked=""' : '' }}>
                            <label for="active" class="custom-control-label">C??</label>
                        </div>
                        <div class="custom-control custom-radio ml-5">
                            <input class="custom-control-input" value="1" type="radio" id="no_active"
                                name="role" {{ $user->role == 1 ? 'checked=""' : '' }}>
                            <label for="no_active" class="custom-control-label">Kh??ng</label>
                        </div>
                    </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
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
