<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nkozi Electronics</title>
</head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="img/https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="img/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="img/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
 integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="img/homepage.js"></script>
<style>
    body {
	color:black;
	font-family: 'Times New Roman', Times, serif;
}
.form-control {		
    min-height: 41px;
    box-shadow: none;
    border-color: #e1e4e5;
}
.form-control:focus {
    border-color: #be1b21;
}
.form-control, .btn {        
    border-radius: 3px;
}
.signup-form {
    width: 500px;
    margin: 0 auto;
    padding: 30px 0;
    
}
.signup-form form {
    color: black;
    border-radius: 3px;
    border: 1px #be1b21 solid;
    margin-bottom: 15px;
    background: white;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.signup-form h3 {
    color: rgb(80, 77, 77);
    font-weight: bold;
    margin-top: 0;
}
.signup-form hr {
    margin: 0 -30px 20px;
}    
.signup-form .form-group {
    margin-bottom: 20px;
}
.signup-form label {
    font-weight: normal;
    font-size: 14px;
}
.signup-form .btn, .signup-form .btn:active {
    font-size: 16px;
    font-weight: bold;
    background: #be1b21 !important;
    border: none;
    min-width: 140px;
}
.signup-form a {
    color: black;
    text-decoration: underline;
}
.signup-form a:hover {
    color: #be1b21;
}
.signup-form form a {
    color: #be1b21;
    text-decoration: none;
}	
.signup-form form a:hover {
    text-decoration: underline;
}.store{
    background-image: url(Store.jpg);background-repeat: no-repeat;image-rendering: crisp-edges;background-size: cover;padding: 20px;
}.welcome{
   padding-left: 22%; font-family: Monotype Corsiva; font-size: 40PX; font-weight: bold; font-style: oblique; text-indent: 30px;
    color: rgb(197, 57, 57); text-shadow: 2px 2px 2px black;
 height: 50px;	
 overflow: hidden;
 position: relative;
}
.welcome h4 {
 font-size: 1.5em;
 color: rgb(197, 57, 57);
 position: absolute;
 width: 80%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: welcome 20s linear infinite;
 -webkit-animation: welcome 20s linear infinite;
 animation: welcome 20s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes welcome {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes welcome {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes welcome {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>
</head>
<body width="100%"><div class="main">
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
                  <a class="nav-link active" aria-current="page" href="#" id="user"><center><i class="fas fa-user-circle fa-2x"></i>
                  </center>
                   <center> <figcaption id="user-account">Account</figcaption></center></a><div class="dropdown-menu" id="account">
                    <form class="px-4 py-3"  id="f">
                      <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                          <label class="form-check-label" for="dropdownCheck">
                            Remember me
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn" id="signin"><a href="index.php">Sign in</a></button>
                    </form>
                    <div class="dropdown-divider"></div>
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
        
        
<div class="Navbar"> <nav class="navbar navbar-expand-sm navbar-white">
             
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
         <li><a class="dropdown-item" href="watches.php"> Speakers and Audio systems</a></li>
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
     <!-- navbar-collapse.// -->
  </nav>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for products & brands" aria-label="Search" 
aria-describedby="btnGroupAddon">
 <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search" id="search-icon" ></i></div>
</div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-cart fa-1.8x text-center" >
    Cart</i></div>
    <div class="store">
        <div class="welcome"><h4>WELCOME TO OUR ONLINE SHOP</h4></div>

  <div class="signup-form">
        <form action="includes/config.php" method="post">
            <h3>Sign Up Now</h3>
            <p>It's free and only takes a minute.</p>
            <hr>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="required">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" required="required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass1" required="required">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="pass2" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="register_user" class="btn btn- btn-block btn-lg">Sign Up</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>
                and <a href="#">Privacy Policy</a></p>
        </form>
        
    </div>
</div>

<?php

  include 'includes/footer.php';

?>