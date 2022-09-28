@extends('layouts.front')

@section('title')
    Checkout
@endsection
@include('layouts.inc.frontnavbar')
@section('content')
    <div class="container mt-5">
        <form action="{{url('place-order')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" placeholder="Enter First Name" name="fname" id="">
                            </div>

                            <div class="col-md-6">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->lname}}" placeholder="Enter Last Name" name="lname" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->email}}" placeholder="Enter Email" name="email" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->phone}}" placeholder="Enter Phone Number" name="phone" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Address 1</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->address1}}" placeholder="Enter Address 1" name="address1" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control" value="{{Auth::user()->address2}}" placeholder="Enter Address 2" name="address2" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->city}}" placeholder="Enter City" name="city" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">State</label>
                                <input type="text" class="form-control" value="{{Auth::user()->state}}" placeholder="Enter State" name="state" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control" value="{{Auth::user()->country}}" placeholder="Enter Country" name="country" id="">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Pin Code</label>
                                <input type="text" class="form-control" value="{{Auth::user()->pincode}}" placeholder="Enter Pin Code" name="pincode" id="">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">

            <div class="card">
                <div class="card-body">
                    <h6>  Order Details </h6>
                  
                   <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                $total = 0;
            @endphp
                                @foreach ($cartitems as $item )
                                <tr>
                                <td>
                                {{ $item->products->name }}
                                </td>

                                <td>
                                    {{ $item->prod_qty }}
                                </td>

                                <td>
                                {{ $item->products->selling_price }}
                                </td>

                                <td>
                               {{  $item->products->selling_price*$item->prod_qty; }}
                                </td>

                            
                          
                            </tr>

            @php
                $total += $item->products->selling_price*$item->prod_qty;
            @endphp

                   @endforeach
                                  
                                </tbody>
                            </table>
                <hr>
                
                <button  type="submit" class="btn btn-outline-primary float-end"> Place Order</button>
                Total Price :{{ $total }} MMK
                </div>
            </div>
            </div>
        </div>
</form>
    </div>
@endsection