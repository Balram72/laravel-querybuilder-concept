<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All User Data</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h1 class="mb-4">All User Data</h1>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>View</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $id => $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->city }}</td>
        <td><a href="{{route('view.user',$user->id)}}" class="btn btn-outline-primary btn-sm">view</a></td>
        <td>
            {{-- <a href="{{route('view.user',$user->id)}}" class="btn btn-outline-success btn-sm">Edit</a> --}}
            <a href="{{route('delete.user',$user->id)}}" class="btn btn-outline-danger btn-sm">delete</a>
         </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>