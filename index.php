
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
    position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border:2px solid black;
    background-color: #9dc5c3;

        }
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->

        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1 style="color: black;"><i>Welcome to Sparks Bank</h1></i></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="user.png">
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="money.png" style="margin-top: 10px; height: 210px;">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
               <img src="transfer.png" style="margin-top: 
               20px; height: 270px; width: 300px;">
                <br>
                <a href="transactionhistory.php"><button >Transfer History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer style="background-color: gray; color: black;"    class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b><i>Sanskruti Gudgila</i></b></p>
    </footer>
    
</body>

</html>
