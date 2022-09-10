@extends('layouts.front')

@section('title')
{{ $product->name }}
@endsection

@include('layouts.inc.frontnavbar')
@section('content')

<div class="py-3 mb-2 shadow-sm bg-warning border-top">
    <div class="container">
        <div class="mb-0">
    <h6>
    Collections / {{ $product->category->name }} / {{ $product->name }}
    </h6>
        </div>
    </div>
</div>

        <div class="container">
            <div class="card shadow product_data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <img src="{{asset('ast/uploads/products/'.$product->image)}}"  class="w-100" alt="">
                        </div>
                        <div class="col-md-8">
                            <h2 class="col-mb-0">
                                {{ $product->name }}
                                @if ($product->trending=='1')
                                <label style="font-size: 10px;" class="float-end badge bg-danger trending_tag">Trending</label>
                                @endif 

                              
                        </h2>

                        <hr>

                        <label class="me-3">Original Price : 
                            <s>{{ $product->original_price }}MMK</s>
                        </label>
                        <label class="me-3">Selling Price : 
                            {{ $product->selling_price }}MMK
                        </label>
                        <p class="mt-3">
                                    {{ $product->small_description }}
                        </p>
                        <hr>
                        @if($product->qty>0)
                        <label class="badge bg-success">In Stock</label>
                       
                        @else
                        <label class="badge bg-danger">Out Of Stock</label>
                        @endif

                        @if($product->qty>0)
                        <div class="row-mt-2">
                            <div class="col-md-3" style="width:130px ;">
                            <input type="hidden" value="{{$product->id}}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity " value="1" class="form-control qty-input"/>
                                    <button class="input-group-text increment-btn">+</button>
                               
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist
                                    <i class="fa fa-heart"></i>
                                </button>

                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart
                                <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                            
                        
                        </div>
                        @endif



                      
                        </div>
                    </div>


                  
                </div>
                <hr>
                <div class="card-body p-3">
                    
                <h4 class="text-danger">Description</h4>

    <p>
             {{ $product->description }}
    </p>
</div>
            </div>
        </div>

</div>







@endsection

