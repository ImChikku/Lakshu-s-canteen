<?php
session_start();
?>

<html>

  <head>
    <title> About | LaKshu' </title>
  </head>
  <link rel="stylesheet" type = "text/css" href ="css\index.css">


  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
  <div class="img">
 <img src="images\backgr1.jpg"height="700"width="100%" ></div>

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
          <a class="navbar-brand" href="index.php">LaKshu | Home</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="aboutus.php">About</a></li>
            <li class="passive"><a href="contactus.php">Contact Us</a></li>
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
            <li><a href="foodlist.php">Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php">Log Out </a></li>
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
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

        <div class="container">
    <div class="wide"  style="height:80%;width:100%;background-color:skyblue;border:10px double white;border-radius:20px;padding:40px;margin-top:40px;"align="center"> 
        <div class="tagline">Life Is A<font color="red"><strong>Game</strong></font>Play To<font color="green"><strong><em>Win</em>.</strong></font>
        <h3 style="color: red">About the food in LaKshu Canteen</h3>
        <h3 style="color: blue">Order food & beverages online from Class. <h3 style="color:green">We didn't deliver food if you order something you must give the order id</h3><h3 style="color : green">  Chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit?</h3><h3 style="color : green"> We place no minimum order restrictions! Order in as little (or as much) as you'd like.</h3></h3>
  </div>
 </div>
<div class="anim">Developed by kUtTy</div> </div> </body>
</html>