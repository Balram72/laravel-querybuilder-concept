<!DOCTYPE html>
<html>
<head>
  <title>Student Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  @forelse ($data as $id => $student)
    <div class="d-flex justify-content-center mb-4">
      <div class="card" style="width: 22rem;">
        <div class="card-body">
          <h5 class="card-title"><strong>Name:</strong> {{ $student->name ?? 'No Name' }}</h5>
          <h6 class="card-subtitle mb-2 "><strong>Email:</strong> {{ $student->email ?? 'No Email' }}</h6>
          <p class="card-text">
            <strong>Age:</strong> {{ $student->age ?? 'No Age' }}<br>
            <strong>City:</strong> {{ $student->city ?? 'No City' }}<br>
          </p>
        </div>
      </div>
    </div>
  @empty
    <div class="alert alert-warning">No user data available.</div>
  @endforelse
</div>
</body>
</html>