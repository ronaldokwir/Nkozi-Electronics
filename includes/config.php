<?php
session_start();


$username = "";
$email    = "";
$pass1    = "";
$pass2    = "";
$errors = array();

$connect = mysqli_connect('localhost', 'root', '');

$Mydatabase = "CREATE DATABASE IF NOT EXISTS nkozi_electronics";
mysqli_query($connect, $Mydatabase);

$useDB = "USE nkozi_electronics";
mysqli_query($connect, $useDB);

$users = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(50),
	regdate DATE
		)";
mysqli_query($connect, $users);

$product = "CREATE TABLE IF NOT EXISTS products (
		product_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (300) NOT NULL,
		product_type VARCHAR (25) NOT NULL,
		product_store VARCHAR (50) NOT NULL,
        product_price FLOAT,
		-- created datetime NOT NULL,
 		modified datetime NOT NULL,	
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $product);

$cart = "CREATE TABLE IF NOT EXISTS cart (
	cart_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $cart);

$wishlist = "CREATE TABLE IF NOT EXISTS wishlist (
	cart_id int(11) NOT NULL,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $wishlist);

$payments = "CREATE TABLE IF NOT EXISTS payments (
	pay_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	method int(11) NOT NULL,
	cname int(11) NOT NULL,
	cnum int(11) NOT NULL,
	expiration int(11) NOT NULL
	)";
mysqli_query($connect, $payments);

/*** Inserting product categories Security  */
$tvs = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (1,'LG 24 Class 720p 60Hz LED HDTV - 24LF454B ', 'tvs','Nkozi-Electronics',694200, NOW(),'/Nkozi-Electronics/img/tvs/tv1.webp'),
	(2,'Sony 55 4K Ultra HD LED Smart Android TV (KD55X750H) ', 'tvs','Nkozi-Electronics',1694200, NOW(),'/Nkozi-Electronics/img/tvs/tv1.webp'),
	(3,'Element 32 720p HD LED Roku TV ', 'tvs','Nkozi-Electronics',584550, NOW(),'/Nkozi-Electronics/img/tvs/tv2.webp'),
	(4,'LG 24 Class 720p 60Hz LED HDTV - 24LF454B ', 'tvs','Nkozi-Electronics',694200, NOW(),'/Nkozi-Electronics/img/tvs/tv3.webp'),
	(5,'Element 55 4K UHD Roku TV ', 'tvs','Nkozi-Electronics',1350200, NOW(),'/Nkozi-Electronics/img/tvs/tv4.webp'),
	(6,'LG 24 Class 720p 60Hz LED HDTV - 24LF454B ', 'tvs','Nkozi-Electronics',694200, NOW(),'/Nkozi-Electronics/img/tvs/tv5.webp'),
	(7,'Samsung 65 Smart 4K Crystal HDR UHD ', 'tvs','Nkozi-Electronics',2578000, NOW(),'/Nkozi-Electronics/img/tvs/tv6.webp'),
	(8,'LG 24 Class 720p 60Hz LED HDTV - 24LF454B ', 'tvs','Nkozi-Electronics',694200, NOW(),'/Nkozi-Electronics/img/tvs/tv7.webp'),
	(9,'Samsung 470 32 HD LED-LCD TV -1366 x 768 HD  - Direct LED backlit technology', 'tvs','Nkozi-Electronics',1405000, NOW(),'/Nkozi-Electronics/img/tvs/tv9.webp'),
	(10,'Samsung 32 Class 720p 60Hz LED HDTV ', 'tvs','Nkozi-Electronics',694200, NOW(),'/Nkozi-Electronics/img/tvs/tv10.webp')
	";
mysqli_query($connect, $tvs);

/*** Inserting product categories watch and plumbing  */
$watch = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (11,'Samsung Galaxy Active2 Smartwatches','watch','Nkozi-Electronics',140000,NOW(),'/Nkozi-Electronics/img/watch/watch1.webp'),
	(12,'Sewer Valley tap','watch','Nkozi-Electronics',17000,NOW(),'/Nkozi-Electronics/img/watch/watch4.webp'),
	(13,'Timex Easy Reader 156F','watch','Nkozi-Electronics',40000,NOW(),'/Nkozi-Electronics/img/watch/watch2.webp'),
	(14,'Timex sReader Watch-Leather Strap','watch','Nkozi-Electronics',17000,NOW(),'/Nkozi-Electronics/img/watch/watch5.webp'),
	(15,'Primary kepa 24-7 OClock','watch','Nkozi-Electronics',60000,NOW(),'/Nkozi-Electronics/img/watch/watch6.webp'),
	(16,'Women Timex Easy','watch','Nkozi-Electronics',100000,NOW(),'/Nkozi-Electronics/img/watch/watch7.webp'),
	(17,'Brown-Long Distance Pipe','watch','Nkozi-Electronics',40000,NOW(),'/Nkozi-Electronics/img/watch/watch8.webp'),
	(18,'Men Easy Field','watch','Nkozi-Electronics',100000,NOW(),'/Nkozi-Electronics/img/watch/watch9.webp'),
	(19,'Casio Ana-Digital Watch','watch','Nkozi-Electronics',70000,NOW(),'/Nkozi-Electronics/img/watch/watch10.webp')";
mysqli_query($connect, $watch);

/*** Inserting product categories phone and Equipment  */
$phone = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (20,'Samsung Galaxy S10e 128GB ROM 6GB RAM','phone','Nkozi-Electronics',700000,NOW(),'/Nkozi-Electronics/img/phones/fon1.webp'),
	(21,'Samsung Galaxy A20s 32GB ROM 3GB Ram A207F/DS','phone','Nkozi-Electronics',900000,NOW(),'/Nkozi-Electronics/img/phones/fon2.webp'),
	(22,'Samsung Galaxy S9 Plus 64GB ROM 6GB RAM G965 GSM','phone','Nkozi-Electronics',1750000,NOW(),'/Nkozi-Electronics/img/phones/fon3.webp'),
	(23,'Simple Mobile Prepaid LG Journey (16GB)','phone','Nkozi-Electronics',1900000,NOW(),'/Nkozi-Electronics/img/phones/fon4.webp'),
	(24,'AT&T Prepaid Altcatel Insight Phone (16GB) - Black','phone','Nkozi-Electronics',750000,NOW(),'/Nkozi-Electronics/img/phones/fon5.webp'),
	(25,'New Android Smart Phone 360 Q','phone','Nkozi-Electronics',2029000,NOW(),'/Nkozi-Electronics/img/phones/fon6.webp'),
	(26,'Tracfone Pre-Paid Apple iPhone 7 (32GB)','phone','Nkozi-Electronics',750000,NOW(),'/Nkozi-Electronics/img/phones/fon7.webp'),
	(27,'Apple iPhone 11 Pro','phone','Nkozi-Electronics',3900000,NOW(),'/Nkozi-Electronics/img/phones/fon8.webp'),
	(28,'Apple iPhone 11','phone','Nkozi-Electronics',2175000,NOW(),'/Nkozi-Electronics/img/phones/fon9.webp')";
mysqli_query($connect, $phone);

/*** Inserting product categories Building camera  */
$camera = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (29,'Sony W800/B 20MP Digital Camera with 5X Optical Zoom','camera','Nkozi-Electronics',240000,NOW(),'/Nkozi-Electronics/img/cameras/cam1.webp'),
	(30,'Sony Alpha a6100 Mirrorless Digital Camera','camera','Nkozi-Electronics',2200000,NOW(),'/Nkozi-Electronics/img/cameras/cam2.webp'),
	(31,'Canon EOS REBEL T7 EF18-55mm + EF 75-300mm Double Zoom KIT','camera','Nkozi-Electronics',1500000,NOW(),'/Nkozi-Electronics/img/cameras/cam3.webp'),
	(32,'Canon PowerShot SX540 HS Long Zoom Digital Camera','camera','Nkozi-Electronics',900000,NOW(),'/Nkozi-Electronics/img/cameras/cam4.webp'),
	(33,'Sony Alpha a6400 24.2MP Mirrorless Digital Camera','camera','Nkozi-Electronics',1200000,NOW(),'/Nkozi-Electronics/img/cameras/cam5.webp'),
	(34,'Polaroid OneStep+ Camera (9010) Black','camera','Nkozi-Electronics',5000000,NOW(),'/Nkozi-Electronics/img/cameras/cam6.webp'),
	(35,'Concrete Block','camera','Nkozi-Electronics',2000000,NOW(),'/Nkozi-Electronics/img/cameras/cam7.webp'),
	(36,'Nikon D3500 18-55mm Kit','camera','Nkozi-Electronics',850000,NOW(),'/Nkozi-Electronics/img/cameras/cam8.webp'),
	(37,'Nikon COOLPIX W150 13.2MP Waterproof Digital Camera','camera','Nkozi-Electronics',900000,NOW(),'/Nkozi-Electronics/img/cameras/cam9.webp'),
	(38,'Panasonic Lumix DC-ZS200 Digital','camera','Nkozi-Electronics',1800000,NOW(),'/Nkozi-Electronics/img/cameras/cam10.webp')
	";
mysqli_query($connect, $camera);

/*** Inserting product categories electronic  */
$kitchen = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
VALUES 
(39,'NutriChef Professional Home Kitchen 5 Speed Digital Countertop Blender', 'kitchen', 'Nkozi-Electronics', 900000, NOW(), '/Nkozi-Electronics/img/kitchen/blender1.webp'),
(40,'Blender Combo 1200W','kitchen','Nkozi-Electronics',190000,NOW(),'/Nkozi-Electronics/img/kitchen/blender2.webp'),
(41,'NutriBullet Blender Combo 1200W Skullcandy','kitchen','Nkozi-Electronics',550000,NOW(),'/Nkozi-Electronics/img/kitchen/blender3.webp'),
(42,'Bella Electricl Blender','kitchen','Nkozi-Electronics',900000,NOW(),'/Nkozi-Electronics/img/kitchen/tvs/blender4.webp'),
(43,'Cuisinart Pure Precision 8-Cup Pour-Over-Coffee Brewer','kitchen','Nkozi-Electronics',700000,NOW(),'/Nkozi-Electronics/img/kitchen/brewer1.webp'),
(44,'Mr. Coffee Coffee Maker Black','kitchen','Nkozi-Electronics',750000,NOW(),'/Nkozi-Electronics/img/kitchen/brewer2.webp'),
(45,'Mr. Coffee All-in-One At-Home Pour Over Coffee Maker BlackElectrofied-Glass Plate','kitchen','Nkozi-Electronics',850000,NOW(),'/Nkozi-Electronics/img/kitchen/brewer3.webp'),
(46,'Over-Coffee Brewer','kitchen','Nkozi-Electronics',700000,NOW(),'/Nkozi-Electronics/img/kitchen/brewer4.webp'),
(47,' Blenny Plus 6qt Programmable Cook','kitchen','Nkozi-Electronics',750000,NOW(),'/Nkozi-Electronics/img/kitchen/cooker1.webp'),
(48,'Crock Pot 6qt Cook and Carry Programmable Slow Cooker','kitchen','Nkozi-Electronics',800000,NOW(),'/Nkozi-Electronics/img/kitchen/cooker2.webp'),
(49,'7qt Programmable Cook & Carry','kitchen','Nkozi-Electronics',720000,NOW(),'/Nkozi-Electronics/img/kitchen/cooker3.webp'),
(50,'Stain Top Irritating Cook','kitchen','Nkozi-Electronics',375000,NOW(),'/Nkozi-Electronics/img/kitchen/cooker4.webp')
";
mysqli_query($connect, $kitchen);


if (isset($_POST['register_user'])) {
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
	$if_user_exist = "SELECT * FROM users WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);

	if (empty($username)) {
		array_push($errors, "Please enter Username..!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already exist!");
	}
	if (empty($email)) {
		array_push($errors, "enter Email..!");
	}
	if (empty($pass1)) {
		array_push($errors, "Enter Password..!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Different Password, Did't match..!");
	}

	if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "INSERT INTO users (username, email, password, regdate) 
					  VALUES('$username', '$email', '$password', NOW())";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = mysqli_insert_id($connect);
		setcookie('user', $username, time() + (86400 * 2), "/");
		header('location: ../index.php?Signup=Successful..');
	}
}
 /** Sign in User control .. */

if (isset($_POST['signin-customer'])) {
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Enter Your Email Pliz..");
	}
	if (empty($password)) {
		array_push($errors, "User Password Required..");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connect, $query);
		//compare results from table users with actual user inputs
		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_assoc($results);
			$username = $row['username'];
			$uid = $row['id'];

			$_SESSION['username'] = $username;
			$_SESSION['id'] = $uid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: ../index.php?Login Successful..');
		} else {
			header("Location: ../signin.php?Error=Wrong User mail or password..!");
		}
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	header("location: ../index.php");
}
/**===================
 The code below retrieves all items added to cart
 * ================== */

if (isset($_POST['add'])) {
	//  print_r($_POST['product_id']);
	if (isset($_SESSION['cart'])) {

		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if (in_array($_POST['product_id'], $item_array_id)) {
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		} else {

			$count = count($_SESSION['cart']);
			$item_array = array(
				'product_qty' => $_POST['product_id'],
				'product_id' => $_POST['product_id']
			);


			$_SESSION['cart'][$count] = $item_array;
			header('location: cart.php');
		}
	} else {

		$item_array = array(
			'product_qty' => $_POST['product_id'],
			'product_id' => $_POST['product_id']
		);
		// Create new session variable
		$_SESSION['cart'][0] = $item_array;
		header('location: cart.php');
		// print_r($_SESSION['cart']);
	}
}


/*** MySQL other querries */

$querrypdts = "SELECT * FROM products";
$querrylatest = "SELECT * FROM products WHERE modified='2021-04-20 00:30:00'";
$querrytvs = "SELECT * FROM products WHERE product_type='tvs'";
$querrywatch = "SELECT * FROM products WHERE product_type='watch'";
$querryphone = "SELECT * FROM products WHERE product_type='phone'";
$querrycamera = "SELECT * FROM products WHERE product_type='camera'";
$kitchens = "SELECT * FROM products WHERE product_type='kitchen'";

$result = $connect->query($querrypdts);
if ($result->num_rows > 0) {
} else {
}


/*** Insert payments to the db */

if (isset($_POST['checkout'])) {
	$procedure = mysqli_real_escape_string($connect, $_POST['paymentMethod']);
	$custom_name = mysqli_real_escape_string($connect, $_POST['card-name']);
	$custom_number = mysqli_real_escape_string($connect, $_POST['num']);
	if (empty($procedure)) {
		array_push($errors, "Method Required");
	}
	if (empty($custom_name)) {
		array_push($errors, "Card name Required");
	}

	if (count($errors) == 0) {
		$uid = $_SESSION['id'];
		$query = "INSERT INTO payments (userid, method, cname, cnum, expiration, cvv) 
					  VALUES('$uid', '$procedure', '$custom_name', '$custom_number', '15-04-2021', '001')";
		mysqli_query($connect, $query);

		header('location: place.php');
	}
}