
<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="formheader text-center  mt-2 ">

        <h2><b>Deposite</b></h2>

    </div>
    <table "text-align:center"  border="1">
        <thead>
            <tr>
                <form method="post">
            <tr>
                <th>
                    <div class="col-12">
                        <label for="">Acoount No:</label>
                        <input type="text" class="form-control" name="accountno" id="accountno" required>
                    </div>
                </th>
            </tr>
            <tr>
                <th>
                    <div class="col-12"  >
                        <label for="" >Deposite Amount:</label>
                        <input type="text" class="form-control" name="amount" id="amount" required><br>
                    </div>
                </th>
            </tr>
            <th>

                <div class="col-12">
                    <input type="submit" class="btn btn-success" name="deposite" value="deposite">
                </div>

            </th>
            </form>
            </tr>



        </thead>
    </table>
    <table>
        <thead>

            <tr>
                <th> Avilable  Total Balance in Bank </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b><?php echo $openingBal; ?>Rs</b></td>
            </tr>
        </tbody>
    </table>
</body>

</html>