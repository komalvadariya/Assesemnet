<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2 p-3 mb-2 ">
        <a class="text-dark" href="admin">HOME</a>
        <h1 class="text-center" >Book data</h1>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>SR.NO</th>
                    <th>FULLNAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL ID</th>
                    <th>PHONE</th>
                    <th>ACTION</th>
                </tr>

            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($bookdata['Data']);
                // echo "</pre>";
                // $i = 0;
                // foreach ($ViewcustomerRes['Data'] as $key => $value) {
                //     $i++ ?>
                //     <tr>
                //         <td><?php echo $i; ?></td>
                //         <td><?php echo $value->fullname; ?></td>
                //         <td><?php echo $value->email; ?></td>
                //         <td><?php echo $value->phone; ?></td>
                //         <td><?php echo $value->booking_date; ?></td>
                //         <td><?php echo $value->number_of_adults; ?></td>
                //         <td><?php echo $value->number_of_children; ?></td>
                //         <td>
                //             <a class="text-dark" href="editcustomer?id=<?php echo $value->id; ?>">Edit</a>
                //            &nbsp; <a class="text-dark" href="deletecustomer?id=<?php echo $value->id; ?>">Delete</a>
                //         </td>
                //     </tr>

                // <?php   
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>