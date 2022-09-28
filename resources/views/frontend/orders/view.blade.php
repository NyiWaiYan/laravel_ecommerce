@extends('layouts.front')
@section('title')
My Orders
@endsection

@include('layouts.inc.frontnavbar')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-info">
                        <h4>My Order Details
                        <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end">Back</a>
                        </h4>

                      
                </div>

                <div class="card-body">

                <div class="row">
                        <div class="col-md-6 order-details">

                            <label for="">First Name</label>
                            <div class="border p-2">
                                {{ $orders->fname }}
                            </div>


                            <label for="">Last Name</label>
                            <div class="border p-2">
                                {{ $orders->lname }}
                            </div>

                            <label for="">Email</label>
                            <div class="border p-2">
                                {{ $orders->email }}
                            </div>

                            <label for="">Contact No.</label>
                            <div class="border p-2">
                                {{ $orders->phone }}
                            </div>

                            <label for="">Shipping Address</label>
                            <div class="border p-2">
                                {{ $orders->address1 }}, 
                                {{ $orders->address2 }}, 
                                {{ $orders->city }},  <br>
                                {{ $orders->state}},
                                {{ $orders->country}}
                            </div>

                            <label for="">Zip Code</label>
                            <div class="border p-2">
                                {{ $orders->pincode }}
                            </div>
                            
                            

                        </div>

                        <div class="col-md-6">
                                <h4>Product Details</h4>
                                <hr>
                     <table class="table table-bordered">


                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                           
                           <th>Image</th>
                        </tr>
                    </thead>

                    <tbody>
                            @foreach ($orders->orderitems as $item )
                            <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                    
                                        <td>
                                            <img src="{{  asset('ast/uploads/products/'.$item->products->image)}}" width="50px" alt="Product Img">
                                        </td>
                            </tr>
                            @endforeach
                    </tbody>
                    
                            </table>

                            <h6> Grand Total : {{ $orders->total_price }}</h6>
                        </div>
                </div>

               
            </div>
            </div>
              
            </div>
            
        </div>
    </div>
@endsection