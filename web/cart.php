<?php
session_start();

$t = $_GET['_delete'];
if ($t > -1) {
	unset($_SESSION["cart"][$t]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a><br>
<a href="/checkout.php">Checkout</a>
<h1>Shopping Cart</h1><br><br>

<?php
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
	?>
	<p> <?php
   echo $_SESSION["cart"][$i]; 
   ?>
   <br>
   <input type="text" placeholder="1" maxlength="4" size="4" id="num" name="num">
   <?php
   echo "<br>";
   echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$i}'>Delete</a>";
   ?>
   </p>
   <?php
}
?>

</body>
</html>
