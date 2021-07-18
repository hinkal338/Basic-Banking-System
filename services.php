<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <title>Services</title>
    <style>
        #div_center {
            display:flex; 
            align-items:center ; 
            justify-content:center;"
        }
        
    </style>
</head>

<body >
    <?php
        include 'navbar.php';
    ?>
    <div class="row activity text-center">

            <div class="col-md act">
                <br><br><br><br>
                <img src="Images\customers.png" style="height:300px; width:300px;" class="img-fluid" alt="customers image">
                <br><br>
                <a href="showcustomers.php"><button>View all Customers</button></a>
            </div>
            <div class="col-md act">
                <br><br><br><br>
                <img src="Images\transfer money.jpg" style="height:300px; width:300px;" class="img-fluid" alt="tranfer money image" >
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act" >
                <br><br><br><br>
                <img src="Images\transaction history.jpg" style="height:300px; width:300px;" class="img-fluid" alt="transaction history image">
                <br><br>
                <a href="transactionhistory.php"><button >View Transfer History</button></a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div id="div_center">
        <a href="index.php" ><button >Back</button></a>
    </div>