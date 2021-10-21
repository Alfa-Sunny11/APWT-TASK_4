@extends('layout.app')

@section('content')
      <h1>Add Product</h1>
      <div class="container" style = "margin-top:10px">
           <div class="row">
                 <div class="col-mid-6 offset-mid-3">
                       <div class="card">
                             <div class="card-header">
                                   <div class="card-body">
                                          <form method="POST" action="{{route('edit')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <div class="mb-3">
                                                      <label for="name" class="form-label">Product Name</label>
                                                      <input type="name"
                                                      value="{{$product->name}}" class="form-control" id="name" name="name">
                                                      @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="code" class="form-label">Code</label>
                                                      <input type="text" value="{{$product->code}}" class="form-control" id="code" name="code">
                                                      @error('code')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>

                                                <div class="mb-3">
                                                      <label for="name" class="form-label">Product Image</label>
                                                      <input type="file"
                                                      class="form-control" id="img" name="img">
                                                      <img src="{{asset('img/product/'.$product->img)}}" style="width:200px; height: 200px;">

                                                      @error('img')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                
                                                <div class="mb-3">
                                                      <label for="description" class="form-label">Description</label>
                                                      <textarea type="text"  class="form-control" id="description" name="description">{{$product->description}}</textarea>
                                                      @error('description')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>

                                                <div class="mb-3">
                                                      <label for="category" class="form-label">Category</label>
                                                      <select type="text" value="{{$product->category}}" class="form-control" id="category" name="category">
                                                            
                                                            <option value="Meat" {{$product->category== "Meat" ? 'selected' : ''}}>Meat</option>
                                                            <option value="Fish" {{$product->category== "Fish" ? 'selected' : ''}}>Fish</option>
                                                            <option value="Dairy" {{$product->category== "Dairy" ? 'selected' : ''}}>Dairy</option>
                                                            <option value="Snacks" {{$product->category== "Snacks" ? 'selected' : ''}}>Snacks</option>
                                                      </select>
                                                      @error('category')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                <div class="mb-3">
                                                      <label for="price" class="form-label">Price</label>
                                                      <input type="text" value="{{$product->price}}" class="form-control" id="price" name="price">
                                                      @error('price')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>

                                                <div class="mb-3">
                                                      <label for="quantity" class="form-label">Quantity</label>
                                                      <input type="number" value="{{$product->quantity}}" class="form-control" id="quantity" name="quantity">
                                                      @error('quantity')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>

                                                <div class="col-md-4 form-group">
                                                      <label for="date" class="form-label">Stock Date</label>
                                                      <input type="date" name="date" value="{{$product->date}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="rate" class="form-label">Rating</label>
                                                      <input type="number" value="{{$product->rate}}" class="form-control" id="ratey" name="rate">
                                                      @error('rate')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                <div class="mb-3">
                                                      <label for="purchased" class="form-label">Available</label>
                                                      <select type="purchased" value="{{$product->purchased}}" class="form-control" id="purchased" name="purchased">
                                                           
                                                            <option value="Yes" {{$product->purchased == "Yes" ? 'selected' : ''}}>Yes</option>
                                                            <option value="No" {{$product->purchased == "No" ? 'selected' : ''}}>No</option>
            
                                                      </select>
                                                      @error('purchased')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                

                                                

                                                
                                                
                                                <button type="submit" class="btn btn-primary">Update</button>
                                          </form>
                                   </div>
                             </div>
                       </div>
                 </div>
           </div>
     </div>

@endsection