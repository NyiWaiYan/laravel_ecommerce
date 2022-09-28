@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
           Suppliers Page
        </h4>
    </div>
    <div class="card-body">
        

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>    
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $suppliers as $supplier)
                  

                        <tr>    
                            <td>
                                {{ $supplier->id}}
                            </td>
                      
                         
                            <td>
                                {{ $supplier->name}}
                            </td>


                            <td>
                                {{ $supplier->company}}
                            </td>

                        
                            <td>
                            {{ $supplier->phone}}
                            </td>
                    
                            <td>
                            {{ $supplier->email}}
                            </td>
                            
                            <td>
                            {{ $supplier->address}}
                            </td>
                    

                           
                          
                        

                            
                            <td>
                                <div class="d-flex">
                              <a href="{{url('edit-suppliers/'.$supplier->id)}}" class="btn btn-warning">
                              <i class="material-icons">edit</i>
</a>                                </a>
                              <a href="{{ url('delete-suppliers/'.$supplier->id) }}" class="btn btn-danger ">
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