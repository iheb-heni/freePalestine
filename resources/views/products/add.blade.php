

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
@include('includes.navbar')

<div class="card">
       <div class="card-header">
     
               <h3> add product Page</h3>
        </div>

        <img src="asset{{('public/images/st,small,507x507-pad,600x600,f8f8f8.jpg')}}" alt="">


        <div class="container">
    <form action="{{route('product.save')}}" method="POST"   enctype="multipart/form-data">
    {{ csrf_field() }}         

      <div class="row">
         <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6>ajouter produit</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">nom</label>
                            <input type="text" class="form-control Firstname"name="name" placeholder="Entrer le nom du produit">
                            <span id="fname_error" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="">codeabar</label>
                            <input type="number" class="form-control Lastname" name="codeabar" placeholder="Entre Le code a bar">
                            <span id="lname_error" class="text-danger"></span>

                        </div>
                        <div class="col-md-6">
                        <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" accept="image/*">
    </div>

                        <div class="col-md-6">
                            <label for="">description</label>
                            <input type="text" class="form-control phone" name="description" placeholder="Entrer description">
                            <span id="phone_error" class="text-danger"></span>

                        </div>
                        
                       
                       
                        <button type="submit">enregistrer</button>

                    </div>
                </div>
            </div>
         </div>
        
    </form>
   </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>
