@extends('layout.app')

@section('content')
     <div class="container" style = "margin-top:40px; width: 70%" >
           <div class="row">
                 <div class="col-mid-6 offset-mid-3">
                       <div class="card">
                             <div class="card-header">
                                   <div class="card-body">
                                          <form method="POSt" action="{{route('login')}}">
                                                @csrf
                                                <div class="mb-3">
                                                      
                                                      <label for="e_id" class="form-label">Enter Your ID</label>
                                                      <input type="string" class="form-control" id="e_id" name="e_id">
                                                      @error('e_id')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                
                                                </div>
                                                <div class="mb-3">
                                                      <label for="password" class="form-label">Password</label>
                                                      <input type="password" class="form-control" id="password"
                                                      name="password">
                                                      @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                      @enderror
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Submit</button><br>
                                                

                                          </form>
                                   </div>
                             </div>
                       </div>
                 </div>
           </div>
     </div>

@endsection