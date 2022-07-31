@extends('layouts.front')

@section('title')
     Category
@endsection

@include('layouts.inc.frontnavbar')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
       <div class="col-md-12">
            <h2 class="text-center mb-5">All Categories</h2>
           <div class="row">
            @foreach ($category as $cate)
            <div class="col-md-3 mb-3">
                <div class="card">
                        <img src="{{asset('ast/uploads/category/'.$cate->image)}}" height="250px" alt="Product Image">
                        <div class="card-body">
                            <h5>
                                {{ $cate->name}}
                            </h5>
                           <p>
                                {{ $cate->description }}
                           </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection