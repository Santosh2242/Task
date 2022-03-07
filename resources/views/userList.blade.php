<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <table  class="table table-bordered">
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Aadhar no</th>  
            <th>Skills</th>
            <th>Gender</th>    
            <th>Aadhar image</th>
            <th>Certificate</th>
            <th>Role</th>
            <th>UPDATE</th>
            <th>DELETE</th>
          </tr>
         
          @foreach ($user as $users)
          <tr> 
          <td>{{ $users->id }}</td>
          <td>{{ $users->fname }}</td>
          <td>{{ $users->lname }}</td>
          <td>{{ $users->email }}</td>
          <td>{{ $users->mobile }}</td>
          <td>{{ $users->aadhar }}</td>
          <td>{{ $users->skills }}</td>
          <td>{{ $users->gender }}</td>
          <td><img src="{{ asset($users->aadharUploads) }}" height="50px" width="40px"></td>   
          <td><img src="{{ asset($users->certificate) }}" height="50px" width="40px"></td>
        
          <td>{{ $users->role }}</td>
          <td><a href='/edit/{{$users->id}}'>Update</a></td>
          <td><a href='/del/{{$users->id}}'>Delete</a></td>
          </tr>
          @endforeach
      </table>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>