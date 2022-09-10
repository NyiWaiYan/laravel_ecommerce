@extends('layouts.front')

@section('title')
My Cart
@endsection
    
@section('content')


    <div class="container my-5">
        <div class="card shadow ">
            <div class="card-body">

            @php
                $total = 0;
            @endphp

    @foreach ($cartItems as $item)
    
<div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{asset('ast/uploads/products/'.$item->products->image)}}" height="70px" width="70px"alt="Image Here">
                    </div>
                    <div class="col-md-3 my-auto">
                         <h6 class="">{{ $item->products->name }}</h6>
                    </div>

                    <div class="col-md-2 my-auto">
                         <h6 class="">{{ $item->products->selling_price }} MMK </h6>
                    </div>

                    <div class="col-md-3">

                    <input type="hidden" name="" class="prod_id" value="{{$item->prod_id}}">


            @if ($item->products->qty > $item->prod_qty)
            <label for="Quantity"></label>
                 <div class="input-group text-center mb-3" style="width:130px;">
                    <button class="input-group-text changeQuantity decrement-btn">-</button>
                        <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$item->prod_qty}}">
                    <button class="input-group-text changeQuantity increment-btn">+</button>
                </div>

                @php
                $total += $item->products->selling_price* $item->prod_qty;
            @endphp
                @else
                <h6 class=" my-4">Out Of Stock</h6>       
            @endif

                    </div>
                    <div class="col-md-2 my-4">
                        <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"> </i> Remove</button>
                    </div>
                </div>

              
@endforeach

            </div>

            <div class="card-footer">
                <h6>
                    Total Price :{{ $total }} MMK
                    <a href="{{url('checkout')}}" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                </h6>
            
            </div> 
        </div>
    </div>


@endsection


