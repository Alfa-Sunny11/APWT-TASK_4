<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      @if(Session::has('employee'))
      <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">Product Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('details')}}">Product Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('list')}}">Product List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('employee.add')}}">Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('products.mycart')}}">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('customer.myorders')}}">My Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('logout')}}">Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link " href="{{route('login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('user.reg')}}">Reg</a>
      </li>
    
      @endif
    </ul>
  </div>
</nav>