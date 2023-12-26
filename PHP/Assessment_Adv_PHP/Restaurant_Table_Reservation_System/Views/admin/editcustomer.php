<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<!-- <?php echo "<pre>";
print_r($EditRes['Data']);
echo "</pre>"; ?> -->

<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-4"><i>Customer Form</i></h2>
        <form method="post">
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" class="form-control" value="<?php echo $EditRes['Data'][0]->fullname; ?>" name="fullname" id="fullname" >
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?php echo $EditRes['Data'][0]->username; ?>" name="username" id="username" >
                </div>
            </div>
            <!-- <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>
            </div> -->
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $EditRes['Data'][0]->email; ?>" name="email" id="email" >
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" minlength="10" maxlength="10" class="form-control" value="<?php echo $EditRes['Data'][0]->phone; ?>" name="phone" id="phone" >
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-5">
                    <input type="submit" class="btn btn-success" value="Update" name="update" id="update">
                    <!-- <input type="reset" class="btn btn-danger"> -->
                </div>
            </div>

        </form>
    </div>
</body>

</html>