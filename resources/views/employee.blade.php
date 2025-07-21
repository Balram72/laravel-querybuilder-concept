<h1>All Employee Data</h1>
@forelse ($employee as $data )
  <h2>
  {{ $data->id }} |
  {{ $data->name }} |
  {{ $data->email }} |
  {{ $data->city_name }}</h2>
@empty
  <h1> Data iS Not Show</h1>
@endforelse