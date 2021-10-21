@extends('layout.app')

@section('content')
      <h1>Prodcut List</h1>
      <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock Date</th>
            <th></th>
            <th></th>

        </tr>
        @foreach($product as $product)
            <tr>
                  <td>{{$product->name}}</td>
                  <td>{{$product->code}}</td>
                  <td>{{$product->category}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->date}}</td>
                  <td><a href="/product/edit/{{$product->id}}/{{$product->name}}">Edit</a></td>
                  <td><a href="/product/delete/{{$product->id}}/{{$product->name}}">Delete</a></td>
            </tr>

        @endforeach
    </table>

@endsection