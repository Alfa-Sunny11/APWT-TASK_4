@extends('layout.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/e7.jpg')}}" class="d-block w-100" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/e9.jpg')}}" class="d-block w-100" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/e2.jpg')}}" class="d-block w-100" alt="Card image cap">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br><br>

@foreach($product as $product)

      
      <div class="card text-white bg-info mb-3" style="width: 18rem; display: inline-block; margin: 15px;">
      <img class="card-img-top" src="{{asset('img/product/'.$product->img)}}" alt="Error">
      <div class="card-header">{{$product->name}}</div>
      <div class="card-body">

            <p>Product code : {{$product->code}}</p>
            <p>Description : {{$product->description}}</p>

            <p>Price : {{$product->price}}</p>
            <p>Quantity : {{$product->quantity}}</p>
            <p>Stock Date : {{$product->date}}</p>
            <p>Rating : {{$product->rate}}</p>
            <p>Available : {{$product->purchased}}</p>
            <a href="{{route('products.addtocart',['id'=>$product->id])}}" class="btn btn-primary stretched-link">Add to Cart</a>
          
      </div>      
      </div>
  
@endforeach 


@endsection