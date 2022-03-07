<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
 <div class="container">
     
<div class="row">
    <h1 class="text-center text-secondary">Updation Form</h1>
    <div class="col-sm-4 mt-2">
        <form action="{{url('/update',$data->id)}}" method="post">
            @csrf
           <input type="hidden" name="id" value="{{$data->id}}">
          <label for="name">First Name</label>
           <input type="text" class="form-control mb-2" required name="fname" value="{{$data->fname}}"> 
           <label for="name">Last Name</label>
           <input type="text" class="form-control mb-2" required name="lname"value="{{$data->lname}}">
           <label for="name">Email</label>
           <input type="email" class="form-control mb-2" required name="email" value="{{$data->email}}">
           <label for="name">Mobile No </label>
           <input type="Number" class="form-control mb-2" required name="mobile" value="{{$data->mobile}}">
           <label for="name">Aadhar No </label>
           <input type="Number" class="form-control mb-2" required name="aadhar" value="{{$data->aadhar}}">
           <label for="">Aadhar Upload</label><br>
           <input type="file" name="attachment" id="" required><br>
          <label for="" class="mt-2 mb-2" > Password</label><br>
          <input type="password" name="pass" id="" required value="{{$data->pass}}" class="mb-2"><br>
          <label for=""> Confirm Password</label><br>
          <input type="password" name="cpass" id="" required value="{{$data->pass}}" class="mb-2"><br>
          <br><input type="submit" value="UPDATE" class="btn btn-warning">
          </form> 

    </div>
</div>
</div>  
   
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>