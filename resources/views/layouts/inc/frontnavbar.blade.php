<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">GATSBY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('category')}}">Category</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">Cart</a>
        </li>
        @guest
        @if(Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}">LogIn</a>
        </li>
        @endif

        @if(Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{url('register')}}">Register</a>
        </li>
        @endif

        @else
        <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                 
                  <a class="dropdown-item" href="{{url('my-orders')}}">My Orders</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                </form>
            
            </a>
                </div>
              </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>