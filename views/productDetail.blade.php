@extends('layout.app')

@section('content')
<h1>Product Details</h1><br>

      <!-- <h5>Total Price: {{$data}} BDT</h5>
      <h5>Total Price of Meat: {{$meat}} BDT</h5>
      <h5>Total Price of Fish: {{$fish}} BDT</h5>
      <h5>Total Price of Dairy: {{$dairy}} BDT</h5>
      <h5>Total Price of Snacks: {{$snack}} BDT</h5><br> -->
      <h4>Products Price in BDT</h4>
      <table class="table table-borded">
            <tr>
                  <th>Meat (Amount)</th>
                  <th>Fish (Amount)</th>
                  <th>Dairy (Amount)</th>
                  <th>Snacks (Amount)</th>
                  <th>Total (Amount)</th>

            </tr>

            <tr>                 
                  <td>{{$meat}} ({{$meatA}})</td>
                  <td>{{$fish}} ({{$fishA}})</td>
                  <td>{{$dairy}} ({{$dairyA}})</td>
                  <td>{{$snack}} ({{$snackA}})</td>
                  <td>{{$data}} ({{$data}})</td>
            </tr>
    </table><br><br>

  
@foreach($product as $product)
      <!-- <li>ID : {{$product->id}}</li>
      <li>Prodcut Name : {{$product->name}}</li>
      <li>Product code : {{$product->code}}</li>
      <li>Description : {{$product->description}}</li>
      <li>Category : {{$product->category}}</li>
      <li>Price : {{$product->price}}</h3>
      <li>Quantity : {{$product->quantity}}</li>
      <li>Stock Date : {{$product->date}}</li>
      <li>Rating : {{$product->rate}}</li>
      <li>Purchased : {{$product->purchased}}</li>

      <br><br> -->
      <div class="card text-white bg-info mb-3" style="width: 18rem; display: inline-block; margin: 15px;">
      <img class="card-img-top" src="{{asset('img/1.png')}}" alt="Card image cap">
      <div class="card-header">{{$product->name}}</div>
      <div class="card-body">
            <p>ID : {{$product->id}}</p>

            <p>Product code : {{$product->code}}</p>
            <p>Description : {{$product->description}}</p>
            <p>Category : {{$product->category}}</p>
            <p>Price : {{$product->price}}</p>
            <p>Quantity : {{$product->quantity}}</p>
            <p>Stock Date : {{$product->date}}</p>
            <p>Rating : {{$product->rate}}</p>
            <p>Purchased : {{$product->purchased}}</p>
            <a href="#" class="btn btn-primary stretched-link">Add to Cart</a>
          
      </div>      
      </div>
@endforeach      
      
@endsection