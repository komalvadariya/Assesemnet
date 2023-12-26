<?php
// $dbDate = '	'; 
// $newDate = date('d/m/Y', strtotime($dbDate));

// echo $newDate;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all customer</title>
</head>

<body>

    <div class="formheader text-center  mt-2 ">

        <h2><b>View All Customer</b></h2>

    </div>
    <table class="table table-hover">
        <thead>

            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">fullname</th>
                <th scope="col">Email</th>
                <th scope="col">dob</th>
                <th scope="col">phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Aadhar No</th>
                <th scope="col">Address</th>
                <th scope="col">Account Type</th>
                <th scope="col">Account No</th>
                <th scope="col">Opening Balance</th>
                <!-- <th scope="col">Action</th> -->

            </tr>
        </thead>
        <tbody>
            <?php
            // echo "<pre>";
            // print_r($viewusers['Data']);
            // echo "</pre>";
            $i = 0;
            foreach ($viewusers['Data'] as $key => $value) {
                $i++ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value->fullname; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->dob; ?></td>
                    <td><?php echo $value->phone; ?></td>
                    <td><?php echo $value->Gender; ?></td>
                    <td><?php echo $value->adharno; ?></td>
                    <td><?php echo $value->address; ?></td>
                    <td><?php echo $value->accounttype; ?></td>
                    <td><?php echo $value->accountno; ?></td>
                    <td><?php echo $value->openingbalance; ?></td>
                    <td>
                       
                        <a href="edit?id=<?php echo $value->id; ?>">Edit</a>
                        <a href="delete?id=<?php echo $value->id; ?>">Delete</a>
                    </td>
                </tr>
                <?php  } ?>
        


        </tbody>
    </table>


</body>

</html>