<html>
<head>
    <title> Signup | LaKshu </title>
  </head>
<link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
<link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
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
          <a class="navbar-brand" href="index.php">LaKshu | Home</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
    
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
      
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>
   
    



    <div class="container" style="color:red;margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary" style="width:80%;border:5px double white;border-radius:10px;padding:3px;">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body" style="background-color:skyblue;color:white;">
          
        <form role="form" action="customer_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> <i class="far fa-address-card"> Full Name: </i> </label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
             
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="rollno"><span class="text-danger" style="margin-right: 5px;">*</span> <i class="fas fa-user"> Rollno:</i> </label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="rollno" type="text" name="rollno" placeholder="Your rollno" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span><i class="far fa-envelope"> Email:</i> </label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="email" type="email" name="email" placeholder="Email" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
             <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span><i class="far fa-id-badge"> Contact:</i> </label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="contact" type="text" name="contact" placeholder="Contact" required="">
                            
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
          <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span><i class="fas fa-map-marker-alt"> Address: </i></label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="address" type="text" name="address" placeholder="Address" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
           <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> <i class="fas fa-key"> Password: </i></label>
            <div class="input-group">
              <input class="form-control" style="margin-right:100px;" id="password" type="password" name="password" placeholder="Password" required="">
                          
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
   <div class="anim">Developed by kUtTy</div>
    </body>
</html>