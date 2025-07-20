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
  <h1 class="mb-4">All Student Data</h1>
  <a href="/newstudent" class="btn btn-success mb-3">Add Student</a>
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
      @php 
        $i = 1;
      @endphp
      @foreach ($data as $id => $student)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->city }}</td>
        <td>
          <a href="{{route('students.singleStudent',$student->id)}}" class="btn btn-outline-primary btn-sm">View</a>
        </td>
        <td>
            <a href="{{route('students.updatePage',$student->id)}}" class="btn btn-outline-success btn-sm">Edit</a>
            <a href="{{route('delete.students',$student->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
         </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>