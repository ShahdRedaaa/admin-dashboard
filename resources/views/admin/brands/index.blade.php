@extends('admin.admin_master') 
@section('admin') 
 
 
<div class="d-flex justify-content-between mb-3"> 
    <h3>Welcome : {{Auth::user()->name }} </h3> 
    <h3>Total Of Categories : {{count($brands)}} </h3> 
</div> 
 
<div class="row mt-3"> 
    <div class="col-md-8"> 
        <h3 class="text-center mb-3 text-dark"> All Brands</h3> 
 @if (session('success'))

 <h2 class="text-center text-success my-2">{{session('success')}}</h2>
     
 @endif


        <table class="table table-bordered table-striped"> 
            <thead> 
                <tr> 
                    <th scope="col">#</th> 
                    <th scope="col">Name</th> 
                    <th scope="col">Image</th> 
                    <th scope="col">Created At</th> 
                    <th scope="col">Action</th>
                </tr> 
            </thead> 
         
            <tbody> 
        @php($i=1) 
            @foreach ($brands as $brand) 
            <tr> 
                <td scope="row">{{$i++}}</td> 
                <td>{{$brand->brand_name}}</td> 
                <td><img src="{{$brand->brand_image}}" height="50"></td> 
                <td>{{$brand->created_at->diffForHumans()}}</td> 
                <td class="text-center">
<a href="" class="btn btn-dark">Edit</a>
<a href=""class="btn btn-danger">Delete</a>
                 </td> 

            </tr> 
            @endforeach 
                
            </tbody> 
        </table>  
        <div>
            {{$brands->links()}}
        </div>
    </div><!-- col 8 --> 
 
 
    <div class="col-md-4"> 
         
        <div class="card p-3 text-center"> 
                <div class="card-header"> 
                      <h3 class="text-center mb-3 text-dark"> Add brand</h3>    
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

                    <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data"> 
                        @csrf 

                        @error('brand_name') 
                        <div class="alert alert-danger ">{{ $message }}</div> 
                        @enderror 

                        <input type="text" name="brand_name" class="form-control form-control-lg mb-3" placeholder="brand name"> 
                        @error('brand_image') 
                        <div class="alert alert-danger ">{{ $message }}</div> 
                        @enderror 
                        <input type="file" name="brand_image" class="form-control form-control-lg mb-3" placeholder="brand image"> 
                        <button type="submit" class="btn btn-primary">Add brand</button> 
                  </form> 
                </div> 
 
 
        </div><!-- card --> 
    </div><!-- col 4 --> 
</div><!-- row --> 
 
 
 
@endsection