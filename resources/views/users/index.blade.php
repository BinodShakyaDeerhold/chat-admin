<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Companies List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
            </div><div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('home') }}">Dashboard</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th>Company</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->company? $user->company->name: ''}}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
