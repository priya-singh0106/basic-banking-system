<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apna Bank</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
   <style>
       *{
        margin: 0;
           padding: 0;
           box-sizing: border-box; 
       }
       body{
           
           background:url(img/bg1.jpg);
           background-repeat: no-repeat;
           background-size: cover;
           color: rgb(216, 111, 111);
           color: rgb(197, 193, 193);
           color: white;
            font-family: 'Mate SC', serif;

       }
       .container h1{
           margin-top: 20.607427055702917vh;
           margin-left: 4.5092838196286475vh;
           font-size: 50px;
           text-decoration:underline;
           }
           .container h4{
            font-size: 20px;
           margin-left: 4.5092838196286475vh;
           }
           .buttons{
               margin-top: 23px;
           }
           .buttons button{
            
            display: block;
            width: 240px;
            margin-left: 4.5092838196286475vh;
            border: 3px solid goldenrod;
            font-size: 18px;
            padding: 7px;
            border-radius: 10px;
            font-family: 'Mate SC', serif;
            background:none;
            color:white;
            cursor: pointer;
           }
           .btn:hover{
               background-color: rgb(124, 122, 122);
               color: rgb(240, 175, 175);
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
        <h1>Apna Bank</h1>
        <h4>A bank at your doorstep!!</h4>
        <div class="buttons">
            <a href="transfermoney.php">
            <button class="btn" ><b>Make a Transaction</b></button>
        </a>
            </div>
            <div class="buttons">
                <a href="transactionhistory.php">
            <button class="btn"><b>Transaction History</b></button>
        </a>
        </div>
    </div>

    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
</body>
</html>