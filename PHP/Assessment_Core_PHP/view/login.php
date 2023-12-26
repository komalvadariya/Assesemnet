<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  

</head>
<body>

<div class="container mt-3 p-3 mb-2 bg-blue text-black">
        <div class="text-center"><a href="home">Home</a>
            <h2><b>Login Form</b></h2>
        </div>
        <form method="post" class="row g-2">
            <div class="col-md-6 offset-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
          
            <div class="col-md-6 offset-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
           
            <div class="col-md-6 offset-4">
              
                <button  type="Submit" name="Login" class="">Login</button>
                <button  type="Reset" value="Cancel" class="">Cancel</button>

            </div>
</div>
</body>