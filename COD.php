<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> Cart | LaKshu </title>
  </head>
<link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top"role="navigation"style="background:;border:10px double white;border-radius:20px;">
 <div class="header" style="color:white;padding:3px;"align="center"><h1><u>LaKshu's Canteen an Service </u></h1></div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fas fa-home"> LaKshu | Home</i></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mycanteen.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><i class="fas fa-utensils">  Food Zone </i></a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"> Cart 
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </i></a></li>
            <li><a href="logout_u.php"><i class="fas fa-sign-out-alt"> Log Out </i></a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>



        <div class="container" style="height:100%;width:100%;background-color:red;border:10px double yellow;border-radius:20px;padding:20px;margin-top:0px;color:black">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><i class="far fa-thumbs-up"> Order Placed Successfully.</i></h1>
          </div>
       
        <br><div class="container" style="width:100%;background-color:skyblue;border:10px double white;border-radius:20px;padding:20px;margin-top:50px;color:black">

<h2 class="text-center"> Thank you for Ordering at LaKshu Canteen The ordering process is now complete.</h2>



?>
 <?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>


<div class="container"align="left">
<h3 class="text-center"> <strong> <?php echo " Today is " . date("y/m/d h:i:sa l")."<br>"; echo"RollNumber :";
 echo $_SESSION['login_user2'];?><br>Your Order Number :</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>
  <center><button onclick="window.print()">Print</button></center>
</body>
</html>