<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <style>
    *{
        font-family: 'Mate SC', serif;
        color:white;
    }
     body{
           
           background:url(img/bg3.jpg);
           background-repeat: no-repeat;
           background-size: cover;
           color: rgb(216, 111, 111);
           color: rgb(197, 193, 193);
           color: white;
            

       }
        .left {
            /* border: 2px solid red; */
            display: inline-block;
            position: absolute;
            left: 60px;
            top: 30px;


        }
        .left div {
            text-align: center;
            line-height: 9px;
            font-size: 20px;
        }
        .right {
            padding: 0px;
            /* border: 2px solid red; */
            display: inline-block;
            position: absolute;
            right: 34px;
            top: 26px;



        }

        .btn1{
            margin: 0px 9px;
            background-color: black;
            color: white;
            padding: 4px 14px;
            border: 2px solid rgb(229, 221, 238);
            border-radius: 7px;
            font-size: 18px;
            cursor: pointer;
            font-family: 'Mate SC', serif;
            
        }
        .btn1:hover {
            background-color: rgb(102, 99, 99);
        }
        .mid {
            /* if we want to centre the box with the help of margin auto then there are three conditions 
            1.display: block 2.width should be set 3. then use margin auto*/
            /* border: 2px solid red; */
            width: 18%;
            margin: 18px auto;
            display: block;

        }
        .navbar {
            display: inline-block;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            text-decoration: none;
            padding: 34px 23px;
            font-size: 18px;
        }

        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: thistle;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>


<header class="header">
        <!-- Left box for name of bank -->
        <div class="left">
            <div><b>Apna Bank</b></div>
        </div>
        <!-- right box for buttons -->
        <div class="right">
        <a href="transfermoney.php">
            <button class="btn1">Transaction</button>
            </a>
            <a href="transactionhistory.php">
            <button class="btn1">History</button>
            </a>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li>
                    <a href="#" class="active"><b>Home</b></a>
                </li>
                <li>
                    <a href="#"><b>About Us</b></a>
                </li>
                
                
            </ul>
        </div>

    </header>
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
</body>
</html>