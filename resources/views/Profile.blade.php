<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
     #box{
          margin:0px auto;
     }

     body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}
* {
	box-sizing: border-box;
}


    </style>
</head>
<body>
    <div id="box">
    <h1>Your Profile</h1>
    <table border=1 cellspacing=15 cellpadding=5>
        @csrf
        <tr>
          <th>First Name</th>
          <td>Santosh</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>Yadav</td>
          </tr>
          <tr>
            <th>Email</th>
            <td></td>
          </tr>
          <tr>
            <th>Mobile No</th>
            <td>8528872632</td>
          </tr>
          <tr>
            <th>Skills</th>
            <td>Php Mysql</td>
          </tr>
          <tr>
            <th>Gender</th>
            <td>Male</td>
          </tr>
          <tr>
            <th>Aadhar No</th>
            <td>8888888888</td>
          </tr>
          <tr>
            <th>Aadhar Photo</th>
            <td>Not Found</td>
          </tr>
          <tr>
            <th>Certificate</th>
            <td>Not found......</td>
          </tr>
          <tr>
            <th>Gender</th>
            <td>Male</td>
          </tr>
          <tr>
          
          </tr>
    </table>
    </div>
</body>
</html>