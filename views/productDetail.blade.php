@extends('layout.app')

@section('content')
      <h1>Product Details</h1>
      <table class="table table-borded">
        
            <tr>
                  
                  <td> <img src="{{asset('img/product/'.$product['img'])}}" style="width:350px; height: 350px;"></td>
                  <td><h3>{{$product['name']}}</h3>
                        <br>{{$product['description']}}<br>
                        <br><h4>Price: {{$product['price']}} BDT</h4>
                        <h4>Catagory: {{$product['category']}}</h4>
                        <h4>Stock Date: {{$product['date']}}</h4>
                        <h4>Rating : {{$product->rate}} Out of 10</h4>
                        <h4>Available: {{$product['purchased']}}</h4>
                        <a href="/cart" class="btn btn-primary stretched-link">Add to cart</a>
                  </td>
                  
                  
                  
                  
            </tr>

            


    </table>

@endsection
