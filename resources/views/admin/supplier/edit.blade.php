@extends('layouts.admin')

@section('content')

<div class="card">


<div class="card-header">
    <h4>
     Edit Supplier
    </h4>
</div>
    <div class="card-body">
      
            <form action="{{url('update-suppliers/'.$supplier->id)}}" method="POST" >
            @method('PUT') 
             @csrf
          
                <div class="row">
          
                
           
          
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$supplier->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Company</label>
                        <input type="text" class="form-control" name="company"  value="{{$supplier->company}}" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone"  value="{{$supplier->phone}}" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control"  value="{{$supplier->email}}"  name="email">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Addess</label>
                        <input type="text" class="form-control"  value="{{$supplier->address}}" name="address">
                    </div>

                    <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                   
                </div>
            
            </form>
          

    </div>



</div>

@endsection