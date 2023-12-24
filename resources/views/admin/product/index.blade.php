@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3> Product Page</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" >
                 <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>Code Abar</th>
                        <th>Description</th>
                        <th>Image</th>

                    </tr>
                 </thead>
                 <tbody>
                    @foreach($products as $product)
                       <tr>
                          <td>{{ $product->id}}</td>

                          <td>{{ $product->name}}</td>
                          <td>{{ $product->codeabar}}</td>
                          <td>{{ $product->description}}</td>
                          <td>
                          <img src="{{ asset('/images/' . $product->image) }}" class="cate-image">
                           </td>
                          <td>
                          <a  href="{{route('product.edit',$product->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                          <form action="{{ route('product.delete', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                          </td>
   

                       </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
    </div>
@endsection 