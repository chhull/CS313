<?php
session_start();
include_once('dbConnect.php');
$_SESSION["id"];
$_SESSION["name"];
$id;
$passError = "";
$error = "";
$pass = "";
$pattern = '/^(?=\D*\d)[^ ]{6,}$/';

if (isset($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
	$username1 = htmlspecialchars($_POST['username1']);
    $password1 = htmlspecialchars($_POST['password1']);
	$password2 = htmlspecialchars($_POST['password2']);
	
	 if (!empty($username1) && !empty($password1)) {
		$pass = getUserPassword($username1);
		
		if (password_verify($password1, $pass)) {
		   $id = getUserId($username1, $pass);
		   if (!empty($id)) {
			   $_SESSION["id"] = $id;
			   $_SESSION['name'] = $username1;
              header('Location: Week06.php');
			  die();
           }
		} else {
			$id = "";
		   $passError =  "Password does not match";
		}
    
	}
    if (empty($username1 ) && !empty($name)) {
		if ((strlen($password) < 7) || (!preg_match($pattern, $password))) {
			$pass = "Password needs to be at least 7 characters long and have one number";
		} 
		else {
	      $pass = "";
		  if (empty($name) || empty($username) || empty($password) || empty($email) || empty($address)) {
			     $error = "you must fill in all the text fields";
			     echo "<script type='text/javascript'>alert(\"$error\");</script>";
		  }
		  else {
		     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			 $id = setUser($name, $username, $hashedPassword, $address, $email);
			 $id1 = getUserId($username, $hashedPassword);
			 echo $id1;
			 if($id1 != "") {
				$_SESSION["id"] = $id;
			    $_SESSION['name'] = $username;
		
                header('Location: Week06.php');
				die();
             }else {
			    $id = "";
				
			    $error = "unable to create account, Please reenter your information";
            	echo "<script type='text/javascript'>alert(\"$error\");</script>";				 
			 }
		  }
		
		}
	}
	
}
	

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="prove.js"></script>
</head>
<body>
<h1>Sign In Page</h1>

<div id="row">
<h1 id="form" >If you have an account, Please sign in</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">

<p id="form">
  
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username1" name="username1" 
  value="<?php echo $username1 ?>" ><br><br>
  <label for="password">Password</label>
  <input type="password" onkeyup="signinCheck();" placeholder="Password" id="password1" name="password1">
  <span id='message'></span><br>
  <label for="password">Password</label>
  <input type="password" onkeyup="signinCheck(password1, password2, message, message1); " placeholder="Password" id="password2" name="password2">
  <span id='message1'></span><br>
  <span class="error"> <?php echo $passError ?></span><br><br>
  <br><br><br><br><br><br><br><br><br></p><p><input id="sign" class="button" type="submit" name="submit" value="Sign In">
  </p>
</form>
</div>
<div id="row2">
  <h1>To create an account, Please Fill in the Textboxes Below</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p id="form">
  <label for="name">Name</label>
  <input onkeyup="test();" type="text" placeholder="Name" id="name" name="name" required >
  <br />
  <label for="username">User Name</label>
  <input onkeyup="test();" type="text" placeholder="user Name" id="username" name="username" required>
  <br />
  <label for="email">Email</label>
  <input onkeyup="test();" type="email" placeholder="Email Address" id="email" name="email" required>
  <br />
  <label for="address">Address</label>
  <input onkeyup="test();" type="text" placeholder="Address" id="address" name="address" required>
  <br>
  <span id="idpassText">use at least one number and 7 characters</span><br>
  <label for="password">Password</label>
  <input type="password" onkeyup="check();" oninput="passwordCheck();" pattern="^(?=\D*\d)\S{7,}$" placeholder="Password" id="password" name="password">
  <span id='message2'></span><br>
  <label for="password">Password</label>
  <input type="password" onkeyup="check();"placeholder="Password" id="1password" name="1password">
  <span id='message3'></span><br>
  <br /><span class="error"> <?php echo $error ?></span><br />
  </p><p><input class="button" id="create" type="submit" name="submit" value="Create Account">
  <p id="submitWarning" ></p>
  
 
</p>
</form>
</div>


</body>
</html>