@extends('layout.app')

@section('content')
     <div class="container" style = "margin-top:15px; width:70%  ">
           <div class="row">
                 <div class="col-mid-6 offset-mid-3">
                       <div class="card">
                             <div class="card-header">
                                   <div class="card-body">
                                          <form method="POST" action="{{route('employee.add')}}">
                                                @csrf
                                                <div class="mb-3">
                                                      <label for="e_id" class="form-label">Employee ID</label>
                                                      <input type="text" class="form-control" id="e_id" name="e_id">
                                                      @error('e_id')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="name" class="form-label">Full Name</label>
                                                      <input type="name" class="form-control" id="name" name="name">
                                                      @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="email" class="form-label">Email address</label>
                                                      <input type="email" class="form-control" id="email" name="email">
                                                      @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="phoneNo" class="form-label">Phone Number</label>
                                                      <input type="phoneNo" class="form-control" id="phoneNo" name="phoneNo">
                                                      @error('phoneNo')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="col-md-4 form-group">
                                                      <label for="dob" class="form-label">Date of Birth</label>
                                                      <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="address" class="form-label">Address</label>
                                                      <input type="address" class="form-control" id="address" name="address">
                                                      @error('address')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="password" class="form-label">Set a Password</label>
                                                      <input type="password" class="form-control" id="password"
                                                      name="password">
                                                      @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                   </div>
                             </div>
                       </div>
                 </div>
           </div>
     </div>

@endsection