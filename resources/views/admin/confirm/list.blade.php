<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
@include('admin.sidebar')
@include('admin.header')
<h1 class="text-center mt-5">List Confirm</h1>
<div class="container mt-5">
    @include('alert')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Send Mail</th>
                <th>Accept Interview</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->date }}</td>
                    <td><a class="btn btn-success btn-sm col-5"
                            href="/admin/confirm/mail/pass/{{ $data->email }}&&{{ $data->name }}">
                            Pass
                        </a>
                        <a class=" btn btn-danger btn-sm col-5"
                            href="/admin/confirm/mail/fail/{{ $data->email }}&&{{ $data->name }}">
                            Fail
                        </a>
                    </td>
                    <td><a class="btn btn-info btn-sm col-12"
                            href="/admin/confirm/mail/{{ $data->email }}&&{{ $data->date }}">
                            Accept Interview
                        </a></td>
                    <td style="width:
                            100px">
                        <a class="btn btn-danger btn-sm" href="/admin/confirm/delete/{{ $data->id }}">
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
