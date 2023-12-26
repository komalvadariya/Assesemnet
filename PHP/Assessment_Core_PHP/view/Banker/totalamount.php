<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all customer</title>
</head>

<body>

    <div class="container">
        <div class="formheader text-center mt-2">
            <h2><b>Total Amount in Bank</b> </h2>
        </div>
        <table class="table table-hover" border="1">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Bank description</th>
                    <th scope="col">Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($Amountres['Data']['totalbal']);
                // echo "</pre>";
                    foreach ($Amountres['Data']['totalbal'] as $key => $value) { ?>
                        <tr>
                            <td>Total Balance:</td>
                            <td><?php echo $value; ?></td>
                        </tr>

                <?php    }
                ?>



            </tbody>
        </table>

    </div>

</body>

</html>