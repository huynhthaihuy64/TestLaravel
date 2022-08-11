<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
@include('admin.sidebar')
@include('admin.header')
<h1 class="text-center mt-5">List User</h1>
<div class="container mt-5">
    @include('alert')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>@php
                        if ($user->role == 1) {
                            echo '<span class="btn btn-danger btn-xs">NO</span>';
                        } else {
                            echo '<span class="btn btn-success btn-xs">YES</span>';
                        }
                    @endphp</td>
                    <td style=" width: 100px">
                        <a class="btn btn-primary btn-sm" href="{{ asset(route('user.show', $user->id)) }}">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ asset(route('user.del', $user->id)) }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('footer')
</body>

</html>
