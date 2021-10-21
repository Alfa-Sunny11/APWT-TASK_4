@extends('layout.app')

@section('content')
<h1>My Order</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2</td>
      <td><img src="{{asset('img/e1.jpg')}}" style="width:150px; height: 150px;"></td>
      <td>450BDT</td>
      <td><a href="#">Yes</a></td>
    </tr>
  </tbody>
</table>

@endsection