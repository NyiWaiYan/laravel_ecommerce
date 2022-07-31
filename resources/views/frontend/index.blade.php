@extends('layouts.front')

@section('title')
        Welcome to E-shop
@endsection

@include('layouts.inc.frontnavbar')
@section('content')

@include('layouts.inc.slider')

<div class="py-5">
        <div class="container">
            <div class="row">
            <h2 class="text-center mb-3 "> Featured Products</h2>
            <div class="owl-carousel featured-carousel owl-theme">
  
    @foreach ($featured_products as $product )
    <div class="item">
                
                    <div class="card">
                        <img src="{{asset('ast/uploads/products/'.$product->image)}}" width="250px" height="350px" alt="Product Image">
                        <div class="card-body">
                            <h5>
                                {{ $product->name}}
                            </h5>
                            <span class="float-start">
                                {{ $product->selling_price }} MMK
                            </span>

                            <span class="float-end">
                                <s style="color:blue"> {{ $product->original_price }} MMK</s>
                               
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                    </div>


            </div>
        </div>
</div>



<div class="py-5">
        <div class="container">
            <div class="row">
            <h2 class="text-center mb-3 "> Trending Category</h2>
            <div class="owl-carousel featured-carousel owl-theme">
  
    @foreach ($trending_categories as $catg )
    <div class="item">
                
                    <div class="card">
                        <img src="{{asset('ast/uploads/category/'.$catg->image)}}" width="250px" height="350px" alt="Product Image">
                        <div class="card-body">
                            <h5>
                                {{ $catg->name}}
                            </h5>
                           

                          
                        </div>
                    </div>
                </div>
                @endforeach
                    </div>


            </div>
        </div>
</div>

@endsection


@section('scripts')

<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

@endsection