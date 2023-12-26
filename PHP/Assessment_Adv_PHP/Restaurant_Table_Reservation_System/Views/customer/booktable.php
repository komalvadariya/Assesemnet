<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<a href="customer">home</a>

<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-4"><i>Table Booking Form</i></h2>
        <form method="post">
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"required>
                </div>
            </div>
          
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text"  class="form-control" name="phone" id="phone" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="booking date" class="form-label">Booking Date & Time</label>
                    <input type="datetime-local"  class="form-control" name="booking date" id="booking date" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="number of adults" class="form-label">Number of Adults</label>
                    <input type="Text"  class="form-control" name="number of adults" id="number of adults" required>
                </div>
            </div>
           
           
            <div class="row mb-2">
                <div class="col-6 offset-3">
                    <label for="number of children" class="form-label">Number of children</label>
                    <input type="Text"  class="form-control" name="number of children" id="number of children" required>
                </div>
            </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-6 offset-5">
                   <input type="submit" class="btn btn-success value="Reserve A Table" name="book" id="book">
                   <input type="reset" class="btn btn-danger" >
             </div>
            </div>
            
        </form>
    </div>
</body>

</html>