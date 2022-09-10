@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@include('layouts.inc.frontnavbar')
@section('content')

<div class="py-5">
        <div class="container">
            <div class="row">
            <h6 class="text-start mb-3 "> Collection/{{ $category->name }}</h6>
          
  
    @foreach ($products as $product )
  
    <div class="col-md-3 mb-3">
    
                    <div class="card">
                        <a href="{{url('category/'.$category->name.'/'.$product->slug)}}" class="text-decoration-none text-dark">
                        <img src="{{asset('ast/uploads/products/'.$product->image)}}" height="250px" alt="Product Image">
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
                        </a>
                    </div>
                </div>
                @endforeach
                    </div>


            </div>
        </div>
</div>



@endsection