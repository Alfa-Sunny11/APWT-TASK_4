@extends('layout.app')

@section('content')
<h1>Cart</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Total</th>
      <th scope="col">Option</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kit Kat</td>
      <td><input type="number" value="{{old('quantity')}}"  id="quantity" name="quantity"></td>
      <td><img src="{{asset('img/product/Kit Kat.jpg')}}" style="width:150px; height: 150px;"></td>
      <td>270BDT</td>
      <td><a href="#">Remove</a></td>
    </tr>
  </tbody>
</table>

<a href="#" class="btn btn-primary stretched-link">Confirm Order</a>

@endsection