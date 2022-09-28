@extends('layouts.admin')

@section('content')

<div class="card">


<div class="card-header">
    <h4>
      Add Supplier
    </h4>
</div>
    <div class="card-body">
      
            <form action="{{url('insert-supplier')}}" method="POST" >
             @csrf
                <div class="row">
            
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Company</label>
                        <input type="text" class="form-control" name="company">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Addess</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>

            </form>


    </div>



</div>

@endsection