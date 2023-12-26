<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>

    <div class="container mt-3 p-3 mb-2 bg-blue text-black">
        <div class="text-center">
            <h2><b>Customer Form</b></h2>
        </div>
        <form method="post" class="row g-2">
            <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Full name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="enter your Full name">
            </div>
            <div class="col-md-6 offset-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="enter your user name">
            </div>
            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="enter your email ">
            </div>

            <div class="col-md-6 offset-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
            </div>
            <div class="col-md-6 offset-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="enter your date of birth">
            </div>
            <div class="col-md-5 offset-3">
                <label for="phone" class="form-label">phone:</label>
                <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div class="col-md-5 offset-3">
                <label for="Gender" class="form-label">Gender:</label>
                <label for="male" class="form-label">Male</label><input type="radio" name="Gender" id="male" value="Male">
                <label for="female" class="form-label">Female</label><input type="radio" name="Gender" id="female" value="female">
            </div>

            <div class="col-md-5 offset-3">
                <label for="adharno" class="form-label">Adhar no:</label>
                <input type="text" name="adharno" minlength="12" maxlength="12" class="form-control" id="adharno" placeholder="Enter adhar">
            </div>
            <!-- <div class="col-md-5 offset-3">
                <label for="prof-_pic" class="form-label">Profile pic</label>
                <input type="file" name="prof-_pic" class="form-control" id="">
            </div> -->
            <div class="col-md-5 offset-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" rows="2" cols="40"></textarea>

            </div>
            <div class="col-md-5 offset-3">
                <label for="accounttype">Account Type:</label>
                <select name="accounttype" id="accounttype">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <option value="saving"> Saving Account</option>
                    <option value="current"> Current Account</option>
                </select>
                <br>
                <div class="col-md-5 offset-3">
                    <label for="accountno" class="form-label">Account No:</label>
                    <input type="tel" minlength="12" maxlength="12" name="accountno" class="form-control" id="accountno">
                </div>
                <div class="col-md-5 offset-3">
                    <label for="openingbalance" class="form-label">Opening Balance:</label>
                    <input type="number" name="openingbalance" class="form-control" id="openingbalance">
                </div>

                <div class="col-md-6 offset-4">

                    <button type="Submit" name="Add" class="">ADD</button>
                    <button type="Reset" value="Cancel" class="">Cancel</button>

                </div>
            </div>
        </form>
</body>