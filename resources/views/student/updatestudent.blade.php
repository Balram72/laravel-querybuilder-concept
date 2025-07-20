<!DOCTYPE html>
<html>
<head>
  <title>Update Student Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <div class="col-4">
      <h2>Update Student Data</h2>
      <form action="{{ route('students.updateStudent',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" value="{{ $data->name }}" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" placeholder="Enter email">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age" value="{{ $data->age }}" placeholder="Enter age">
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}" placeholder="Enter city">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>