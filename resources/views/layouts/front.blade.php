<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <link rel="stylesheet" href="">
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/admin/css/material-dashboard.css?v=2.1.2') }} rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!--  font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- <link href="{{ asset('assets/js/bootstrap.min.js') }}" rel="stylesheet">
    <link href="{{ asset('assets/js/bootstrap.bundle.min.js') }}" rel="stylesheet"> -->

</head>

<body>






   

    

      

        <div class="content">
            

            @yield('content')
        </div>

      
          
    </div>

  
</div>

<div class="bg-dark text-white p-5">
    <footer class="py-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a
                    href="/"
                    class="nav-link px-2"
                >Home</a>
            </li>
            <li class="nav-item">
                <a
                    href="/category"
                    class="nav-link px-2"
                >Category</a>
            </li>
            <li class="nav-item">
                <a
                    href="#subscribe"
                    class="nav-link px-2"
                >Subscribe us</a>
            </li>
        </ul>
        <p class="text-center">Furniture Co,Ltd</p>
    </footer>
</div>








<script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
    <script>
            swal("{{session('status')}}")
    </script>


@endif


    @yield('scripts')
</body>
</html>
