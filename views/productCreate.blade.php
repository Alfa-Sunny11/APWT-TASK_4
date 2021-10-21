@extends('layout.app')

@section('content')
      <h1>Add Product</h1>
      <div class="container" style = "margin-top:10px">
      @if(session('mgs'))
            <h6 class="alert alert-success">{{session('msg')}}</h6>
      @endif
           <div class="row">
                 <div class="col-mid-6 offset-mid-3">
                       <div class="card">
                             <div class="card-header">
                                   <div class="card-body">
                                          <form method="POST" action="{{route('create')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                      <label for="name" class="form-label">Product Name</label>
                                                      <input type="text"
                                                      value="{{old('name')}}" class="form-control" id="name" name="name">
                                                      @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="code" class="form-label">Code</label>
                                                      <input type="text" value="{{old('code')}}" class="form-control" id="code" name="code">
                                                      @error('code')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="name" class="form-label">Product Image</label>
                                                      <input type="file"
                                                      value="{{old('img')}}" class="form-control" id="img" name="img">
                                                      @error('img')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                
                                                <div class="mb-3">
                                                      <label for="description" class="form-label">Description</label>
                                                      <textarea type="text" value="{{old('description')}}" class="form-control" id="description" name="description"></textarea>
                                                      @error('description')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>

                                                <div class="mb-3">
                                                      <label for="category" class="form-label">Category</label>
                                                      <select type="text" value="{{old('category')}}" class="form-control" id="category" name="category">
                                                            <option selected disabled >Select</option>
                                                            <option value="Meat">Meat</option>
                                                            <option value="Fish">Fish</option>
                                                            <option value="Dairy">Dairy</option>
                                                            <option value="Snacks">Snacks</option>
                                                      </select>
                                                      @error('category')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                <div class="mb-3">
                                                      <label for="price" class="form-label">Price</label>
                                                      <input type="text" value="{{old('price')}}" class="form-control" id="price" name="price">
                                                      @error('price')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>

                                                <div class="mb-3">
                                                      <label for="quantity" class="form-label">Quantity</label>
                                                      <input type="number" value="{{old('quantity')}}" class="form-control" id="quantity" name="quantity">
                                                      @error('quantity')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>

                                                <div class="col-md-4 form-group">
                                                      <label for="date" class="form-label">Stock Date</label>
                                                      <input type="date" name="date" value="{{old('date')}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="rate" class="form-label">Rating</label>
                                                      <input type="number" value="{{old('rate')}}" class="form-control" id="ratey" name="rate" placeholder="Out of 10">
                                                      @error('rate')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                <div class="mb-3">
                                                      <label for="purchased" class="form-label">Available</label>
                                                      <select type="purchased" value="{{old('purchased')}}" class="form-control" id="purchased" name="purchased">
                                                      <option selected disabled">Select:</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
            
                                                      </select>
                                                      @error('purchased')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                

                                                

                                                
                                                
                                                <button type="submit" class="btn btn-primary">Send</button>
                                          </form>
                                   </div>
                             </div>
                       </div>
                 </div>
           </div>
     </div>

@endsection