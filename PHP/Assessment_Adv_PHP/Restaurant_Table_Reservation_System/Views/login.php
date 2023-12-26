<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container"><a href="home">HOME</a>
        <h2 class="text-center mt-3 mb-4"><i>Sign In</i></h2>
        <form method="post">

            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6 offset-5">
                    <input type="submit" class="btn btn-success" value="Sign In" name="login" id="login">
                    <a href="register" >Click Here To Register</a>
                </div>
            </div>


        </form>

    </div>
</body>

</html>