<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if($this->input->post("logout")== null){
	
	redirect();
}

var_dump($_POST) ; echo "<hr>";
var_dump($this->session->all_userdata());
?>


<!DOCTYPE html>
<html class="container">
<head>
	<title>You Loggedout</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
</head>
<body>
<h2>Byeeeeeee!</h2>
</body>
</html>