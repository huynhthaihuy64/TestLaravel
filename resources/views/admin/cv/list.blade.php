@extends('master')
@section('content')
    @include('admin.sidebar')
    <h1 class="text-center mt-5">List Cv</h1>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>File</th>
                    <th>Active</th>
                    <th>Update</th>
                    <th>Send Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=" width: 100px">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                    <td><a class="btn btn-success btn-sm" href="#">
                            Send Mail
                        </a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
