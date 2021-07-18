<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h3 class="text-center pt-4">Customer Details</h3>
        
       <br>
       <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Cust_Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Balance</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';

            $sql ="select * from customers";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['c_id']; ?></td>
            <td class="py-2"><?php echo $rows['c_name']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
    </div>
    <br>
    <div style="display:flex; align-items:center ; justify-content:center;">
        
        <a href="services.php" ><button >Back</button></a>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>