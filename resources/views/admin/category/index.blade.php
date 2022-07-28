@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Category Page
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
                    @foreach ( $category as $item )
                  

                        <tr>    
                            <td>
                                {{ $item->id}}
                            </td>
                      

                         
                            <td>
                                {{ $item->name}}
                            </td>
                      

                        
                            <td>
                                {{ $item->description}}
                            </td>
                    

                           
                            <td>
                               <img src="{{asset('ast/uploads/category/'.$item->image)}}" class="cate-image" alt="Image here"> 
                            </td>
                        

                            
                            <td>
                                <div class="d-flex">
                              <a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-warning">
                              <i class="material-icons">edit</i>
</a>                                </a>
                              <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger ">
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