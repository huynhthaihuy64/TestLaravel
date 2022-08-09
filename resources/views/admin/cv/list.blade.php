@extends('master')
@section('content')
    @include('admin.sidebar')
    <h1 class="text-center mt-5">List Cv</h1>
    <div class="container mt-5">
        @include('alert')
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
                @foreach ($cvs as $cv)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cv->name }}</td>
                        <td>{{ $cv->email }}</td>
                        <td>{{ $cv->phone }}</td>
                        <td>{{ $cv->file }}</td>
                        <td>@php
                            //  echo $data['active'] ?? '';
                            if ($cv['active'] == 1) {
                                echo '<span class="btn btn-danger btn-xs">NO</span>';
                            } else {
                                echo '<span class="btn btn-success btn-xs">YES</span>';
                            }
                        @endphp</td>
                        <td style=" width: 100px">
                            <a class="btn btn-primary btn-sm" href="/admin/cv/edit/{{ $cv->id }}">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="/admin/cv/delete/{{ $cv->id }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <td><a class="btn btn-success btn-sm" href="/subscribe/{{ $cv->email }}">
                                Send Mail
                            </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
