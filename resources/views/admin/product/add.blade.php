@extends('layouts.admin')
@section('content')
    <div class="card">
       <div class="card-header">
     
               <h3>ajouter produit</h3>
        </div>

        <div class="card-body">
            <form action="{{route('product.save')}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="row">


                
                    <div class="col-md-12 mb-3"> 

                    </div>
                    <div class="col-md-6 mb-3"> 
                       <label for="">nom</label>
                       <input type="text" class="form-control Firstname"name="name" placeholder="Entrer le nom du produit">
                    </div>

                    <div class="col-md-6 mb-3" > 
                       <label for="">codeabar</label>
                       <input type="number" class="form-control Lastname" name="codeabar" placeholder="Entre Le code a bar">
                    </div> 
                     

                    <div class="col-md-12 mb-3"> 
                       <label for="">Description</label>
                       <input type="text" class="form-control phone" name="description" placeholder="Entrer description">
                    </div>
       
                    
                    <div class="col-md-6 mb-3"> 
                       <input type="file" class="form-control" name="image">
                    </div>

                    
                    <div class="col-md-6 mb-3"> 
                       <button type="submit" class="btn btn-primary" name="image">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
   
@endsection 