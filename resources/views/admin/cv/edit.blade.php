@extends('master')
@section('content')
    <div class="container">
        <div class="mt-5 d-flex justify-content-center">
            <div class="card-primary border border-primary" style="width: 40%; margin-top: 220px;">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Edit CV</b></a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="text" name="id" class="form-control">
                            <div class=" input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="phone" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="position" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-file"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label>Active:</label>
                            <div class="custom-control custom-radio ml-5">
                                <input class="custom-control-input" value="0" type="radio" id="active"
                                    name="role">
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio ml-5">
                                <input class="custom-control-input" value="1" type="radio" id="no_active"
                                    name="role">
                                <label for="no_active" class="custom-control-label">Không</label>
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
@endsection
