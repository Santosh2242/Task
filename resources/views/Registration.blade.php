<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
   .container{
     margin-left:500px;
     margin-top:40px;
     
   }
   </style>
  </head>
  <body>
    <h1 class="text-center">Registration Form</h1>
      <div class="container ">
        <form action="{{url('/save')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
         
         
          <div class="col-sm-3">
<label>First Name</label>
<input type="text"  name="fname" class="form-control" required> 
<label for="">Email</label>
<input type="email" name="email" class="form-control" required>
<label for="name">Skills</label><br>
<input type="checkbox" name="php" id="" value="PHP"><b>PHP</b>
<input type="checkbox" name="mysql" id="" value="MYSQL"><b>MYSQL</b><br>
<input type="checkbox" name="laravel" id="" value="LARAVEL"><b>LARAVEL</b>
<input type="checkbox" name="node_js" id="" value="NODE JS"><b>NODE JS</b><br>
<label for="name">Aadhar No </label>
     <input type="Number" class="form-control" name="aadhar" required maxlength="12">
    <label > Role</label><br>
     <select name="role" id="" class="mt-2">
       <option class="form-control">--Select a Role---</option>
       <option value="admin" class="form-control">Admin</option>
       <option value="user">User</option>
     </select><br>
     <label for="" class="mt-4"> Password</label><br>
    <input type="password" name="pass" id="" required>
          </div>
          <div class="col-sm-3">
            <label for="">Last Name</label>
            <input type="text" name="lname" class="form-control" required>
            <label for="name">Mobile No </label>
            <input type="Number" name="mobile" class="form-control" required>
            <label>Gender</label><br>
            <input type="radio" name="gender" id="m" value="male" required >Male
            <input type="radio" name="gender" id="f" value="female">Female<br><br>
            <label for="">Aadhar Upload</label>
     <input type="file" name="img" id="" class="form-control" required>
      <label for="" > Certifiate</label>
     <input type="file" name="certificate" class="form-control" required><br>
     <label for=""> Confirm Password</label>
     <input type="password" name="cpass" id="" required><br>
          </div>         
        </div>
        <input type="submit" id="reg" value="Register" style="width: 30%; " class="btn btn-primary ms-5 mt-3">

      </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>