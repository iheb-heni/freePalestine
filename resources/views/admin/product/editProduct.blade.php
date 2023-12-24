@extends('layouts.admin')
@section('content')
    <div class="card">
       <div class="card-header">
     
               <h3>Edit product Page</h3>
        </div>

        <div class="card-body">
        <form action="{{route('product.update',$product->id)}}" method="POST">
            @csrf
            <div class="row ">
                <div class="col-md-12 form-group">
                    <label for="form-label">Title</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" >
                </div>
               
               
                <div class="col-md-12 form-group">
                    <label for="form-label">codeabar</label>
                    <input type="number" class="form-control" name="codeabar" value="{{$product->codeabar}}" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Image</label>
                    <input type="text" class="form-control" name="image" value="{{$product->image}}" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Description</label>
                    <textarea name="description" class="form-control"  id="" cols="30" rows="5">{{$product->description}}</textarea>
                </div>

            </div>
            <button type="submit" class="w-100 btn mt-3 btn-primary">Update Product</button>
           </form>

        </div>
    </div>
   
@endsection 