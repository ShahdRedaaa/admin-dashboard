@extends('admin.admin_master') 
@section('admin') 
 
 
<div class="d-flex justify-content-between mb-3"> 
    <h3>Welcome : {{Auth::user()->name }} </h3> 
    <h3>Total Of Categories : {{count($categories)}} </h3> 
</div> 
 
<div class="row mt-3"> 
    <div class="col-md-8"> 
        <h3 class="text-center mb-3 text-dark"> All Categories</h3> 
 @if (session('success'))

 <h2 class="text-center text-success my-2">{{session('success')}}</h2>
     
 @endif


        <table class="table table-bordered table-striped"> 
            <thead> 
                <tr> 
                    <th scope="col">#</th> 
                    <th scope="col">User</th> 
                    <th scope="col">Name</th> 
                    <th scope="col">Created At</th> 
                    <th scope="col">Action</th>
                </tr> 
            </thead> 
         
            <tbody> 
        @php($i=1) 
            @foreach ($categories as $category) 
            <tr> 
                <td scope="row">{{$i++}}</td> 
                <td>{{$category->user->email}}</td> 
                <td>{{$category->category_name}}</td> 
                <td>{{$category->created_at->diffForHumans()}}</td> 
                <td class="text-center">
<a href="{{ route('categories.edit', ['id'=>$category->id]) }}" class="btn btn-warning">Edit</a>
<a href="{{ route('categories.softDelete', ['id'=>$category->id]) }}"class="btn btn-dark">Delete</a>
                 </td> 

            </tr> 
            @endforeach 
                
            </tbody> 
        </table>  
        <div>
            {{$categories->links()}}
        </div>
    </div><!-- col 8 --> 
 
 
    <div class="col-md-4"> 
         
        <div class="card p-3 text-center"> 
                <div class="card-header"> 
                      <h3 class="text-center mb-3 text-dark"> Add Category</h3>    
                </div> 
                <div class="card-body"> 
                       @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                        <ul> 
                            @foreach ($errors->all() as $error) 
                                <li>{{ $error }}</li> 
                            @endforeach 
                        </ul> 
                    </div> 
                @endif 

                    <form action="{{ route('categories.store') }}" method="post"> 
                        @csrf 

                     

                        <input type="text" name="category_name" class="form-control form-control-lg mb-3" placeholder="category name"> 
                        <button type="submit" class="btn btn-primary">Add Category</button> 
                  </form> 
                </div> 
 
 
        </div><!-- card --> 
    </div><!-- col 4 --> 
</div><!-- row --> 
 
 
 
@endsection