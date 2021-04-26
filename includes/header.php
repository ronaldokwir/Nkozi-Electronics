<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">



    <title>Nkozi Electronics</title>
</head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="img/https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="img/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="img/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
 integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="img/homepage.js"></script>
<body width="100%">  
          
  <div class="main">
    <div class="TopMost"><img src="img/logo.jpg" width="60px" height="65px"> &nbsp; &nbsp;<font color="rgba 0 0 0 0" id="formatting">
      N</font> <div class="" id="formatting">
      kozi </div>&nbsp; &nbsp;
    <font color="rgba 0 0 0 0" id="formatting">
        E</font> <div id="formatting">lectronics </div><div class="Account">
          <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto  ">
                <li class="nav-item" id="user" >
                    <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<b  class=\"nav-item ml-md-3\">
                            <a class='px-2' class=\"btn btn-primary login-up\" href=\"signin.php\"><i class='fas fa-user-circle'></i>Account</a>
                                </b>";
                        } else {
                            echo " <b  class=\"nav-item ml-md-3\">
                                <a class='px-1' class=\"btn btn-primary nav-link\" href=\"index.php?\"><i class='fas fa-user-circle'></i>(" . $_SESSION['username'] . ")<br> <b>(-Logout-)</b></a>
                                </b>";
                        }
                        ?>
                  </center>
                   <div class="dropdown-menu" id="account">
                    <form class="px-4 py-3" method="post" action="includes/config.php">
                    <center> <figcaption id="user-account">Account</figcaption></center>
                      <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                          <label class="form-check-label" for="dropdownCheck">
                            Remember me
                          </label>
                        </div>
                      </div>
                      <button type="submit" name="signin-customer" class="btn btn" id="signin">Sign in</a></button>
                    </form>
                    
                    <a class="dropdown-item" href="register.php" id="create-account">New around here? Sign up</a>
                    <a class="dropdown-item" href="#" id="create-account">Forgot password?</a>
                  </div>
                
                </li>
              </ul>
              
            </div></div>
          </div> <li class="nav-item dropdown" id="order">
            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="order">More</a>
             <ul class="dropdown-menu" id="mylist">
              <li><a class="dropdown-item" href="#"><i class="far fa-smile"></i>&nbsp;&nbsp;Place your order now</a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-sort-amount-up-alt"></i>&nbsp;&nbsp;Track your order </a></li>
               <li><a class="dropdown-item" href="#"> <i class="far fa-heart"></i>&nbsp;&nbsp;Wishlist </a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-gifts"></i> &nbsp;&nbsp;Rewards </a></li>
               <li><a class="dropdown-item" href="#"><i class="fas fa-gift"></i>&nbsp;&nbsp;Gift Cards </a></li>
               
          
             </ul></li>
        </nav></div>
        
        
<div class="Navbar">
   <nav class="navbar navbar-expand-sm navbar-white">
             
    <div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    
    <li class="nav-item  active" >
      <a class="nav-link " href="index.php" >  Home</a>
   </li>
   
    <li class="nav-item ">
       <a class="nav-link " href="AboutUs.php">  About Us</a>
       
        
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="cate">  Product Categories</a>
       <ul class="dropdown-menu" id="category">
         <li><a class="dropdown-item" href="Tech Accessories.php"> Tech Accessories</a></li>
         <li><a class="dropdown-item" href="T.vs & Computers.php"> TVs </a></li>
         <li><a class="dropdown-item" href="T.vs & Computers.php#computers">Computers </a></li>
         <li><a class="dropdown-item" href="watches.php">Wearable Technology </a></li>
         <li><a class="dropdown-item" href="phones.php"> Cell Phones </a></li>
         <li><a class="dropdown-item" href="cameras.php"> Cameras </a></li>
         <li><a class="dropdown-item" href="networking.php">Wi-Fi & Networking </a></li>
         <li><a class="dropdown-item" href="batteries.php"> Batteries & Calculators </a></li>
         <li><a class="dropdown-item" href="Appliances.php"> Other Home Appliances </a></li>
       </ul></li>
       <li class="nav-item dropdown" >
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="cate" >Services </a>
     
          <ul class="dropdown-menu" id="services">
            <li><a class="dropdown-item" href="#" id="services-list"><h5>We offer the following services; </h5></a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>1.</span>&nbsp; Shopping Assistance  </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"> <span>2.</span>&nbsp;Warranties & Rebates </a></li>
            <li><a class="dropdown-item" href="#" id="services-list"><span>3.</span>&nbsp;Shipping & Delivery </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>4.</span>&nbsp;System maintenance & Repair </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>5.</span>&nbsp;Network Installations </a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>6.</span>&nbsp;Software Support</a></li>
            <li><a class="dropdown-item" href="#"  id="services-list"><span>7.</span>&nbsp; Cater for Lost or Damaged Packages </a></li>
          </ul></li>
          </div>
    <li class="nav-item active">
      <a class="nav-link " href="AboutUs.php#contact-us"  id="cate">  Contact Us</a>
       
   </li>
  
</li></li></ul></li></ul>
     <!-- navbar-collapse 
     
     .//  from cart side -left..
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
  </nav>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for products & brands" aria-label="Search" 
aria-describedby="btnGroupAddon">
 <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search" id="search-icon" ></i></div>

</div>&nbsp; 
<div class="input-group1">
<a href="cart.php">
<div class="cart_count ">

  <?php
  echo '<i class="fas fa-shopping-cart fa-1.8x text-center" ></i>';
    if (isset($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
        echo "<span id=\"cart_count\" class=\"text-primary \">$count</span>";
          } else {
          echo "<span id=\"cart_count\" class=\"text-primary\">0</span>";
      }

      ?>
 </div>  
</a>
  </div>
</div>
<hr width="100%">
