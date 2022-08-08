@extends('master')

@section('content')
    <div class="container">
        <div class="login-box">
            <div class="login-card card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Submit CV</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Submit your cv</p>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="cv" class="form-control" placeholder="Input File" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-file"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="position" class="form-control" placeholder="Position" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" name="date" class="form-control" placeholder="Position" required>
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
@endsection
