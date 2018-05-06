<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//var_dump($this->session->userdata('loggedin_user'));

var_dump($_POST) ; echo "<hr>";
var_dump($this->session->all_userdata());  echo "<hr>";

if($this->session->userdata("loggedin_user")== null){
	
	redirect();
}
?>

<!DOCTYPE html>
<html class="container">
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
</head>
<body>
	<div class="group" >
		<h3 class="text">* Hallo *</h3>
		<h3 class="text">Your information is:</h3><hr width="70%" ;"><br>
		<h4>Your first name is: <?php  echo ( $this->session->userdata("loggedin_user")["first_name"]);  ?></h4><br>
		<h4>Your last name is: <?php echo ( $this->session->userdata("loggedin_user")["last_name"]); ?></h4><br>
		<h4>Your Email is: <?php  echo ( $this->session->userdata("loggedin_user")["email"]);?></h4><br>
		 

		<form method="POST" action="Login/logout">
		<input class="btn_log" type="submit" name="logout" value="logout">
		</form>
		<form method="POST" action="Post/show">
		<input class="btn_log" type="submit" name="show_post" value="show_post">
		</form>
	</div>	


	


</body>
</html>