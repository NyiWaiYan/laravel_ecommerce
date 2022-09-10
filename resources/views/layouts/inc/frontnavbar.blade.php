<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">NwY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        <li class="nav-item">
          <a class="nav-link text-danger" href="#">
            {{ Auth::user()->name }}
          </a>

          <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                </form>
            
            </a>





        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>