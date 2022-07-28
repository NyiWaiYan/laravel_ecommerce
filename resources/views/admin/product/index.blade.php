@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
           Products Page
        </h4>
    </div>
    <div class="card-body">
        

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $products as $product)
                  

                        <tr>    
                            <td>
                                {{ $product->id}}
                            </td>
                      

                         
                            <td>
                                {{ $product->name}}
                            </td>
                      

                        
                            <td>
                                {{ $product->description}}
                            </td>
                    

                           
                            <td>
                               <img src="{{asset('ast/uploads/products/'.$product->image)}}" class="cate-image" alt="Image here"> 
                            </td>
                        

                            
                            <td>
                                <div class="d-flex">
                              <a href="{{url('edit-prod/'.$product->id)}}" class="btn btn-warning">
                              <i class="material-icons">edit</i>
</a>                                </a>
                              <a href="{{ url('delete-category/'.$product->id) }}" class="btn btn-danger ">
                              <i class="material-icons">delete</i>
</a>                </a>
                            </div>
                            </td>
                        </tr>
                   
                    @endforeach
                    </tbody>

            </table>

    </div>



</div>

@endsection