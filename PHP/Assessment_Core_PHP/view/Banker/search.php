<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>

<body>
    <form action="" method="post">
        <label for="serach">Account no </label>
        <input type="text" name="accountno" placeholder="enter your Account number" id="search" required>
        <button type="submit" class="btn btn-primary" name="serach" id="" type="button">Search</button>
    </form>
    <?php
    if (isset($_POST['serach'])) { ?>
        <table class="table table-success table-striped">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Account No</th>
                    <th>Account Type</th>
                    <th>Balance</th>
                </tr>

            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($SerchRes['Data']);
                // echo "</pre>";

                $srno = 0;
                foreach ($SerchRes['Data'] as $key => $value) {
                    $srno++ ?>
                    <tr>

                        <td><?php echo $value->fullname; ?></td>
                        <td><?php echo $value->accountno; ?></td>
                        <td><?php echo $value->accounttype; ?></td>
                        <td><?php echo $value->openingbalance . " Rs"; ?></td>
                    </tr>

                <?php  }
                ?>



            </tbody>
        </table>
    <?php } 


    ?>



</body>

</html>