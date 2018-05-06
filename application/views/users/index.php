<!-- INDEX.PHP -->
<!DOCTYPE html>
<html>
<head>

	<title>login</title>
	<meta charset="utf-8"/>
</head>
<body>

<h1>Connected</h1>


 
 
 <h1>Registration</h1>

 <p><?php
 if($this->input->post('action', true)==='register') {
 	echo validation_errors() .'</p><p>';
 }
 	$temp=$this->session->userdata('successMsg'); 
 		if($temp) {
 		echo $temp;
 		$this->session->unset_userdata('successMsg');
 		}
 ?></p>

 <form action="registration" method="POST">
 	<input type="text" name="fname" placeholder="Your name" value="<?=set_value('fname');?>">
 	<input type="text" name="lname" placeholder="Your last name" value="<?=set_value('lname');?>">
 	<input type="text" name="email" placeholder="Your email" value="<?=set_value('email');?>">
 	<input type="password" name="pass" placeholder="enter your password">
 	<input type="password" name="repass" placeholder="re-enter your password">
 	<input type="checkbox" name="category" value="1">Heads</option>
 	<input type="checkbox" name="category" value="2">Hands</option>
 	<input type="checkbox" name="category" value="3">Eyes</option>
 	<input type="checkbox" name="category" value="4">Ears</option>
 	<input type="checkbox" name="category" value="5">Body</option>
 	<input type="checkbox" name="category" value="6">Others</option>
 	<input type="text" name="skill" placeholder="What are you skills" value="<?=set_value('skill');?>">
 	<input type="text" name="link" placeholder="Add your link(s) to your portfolio" value="<?=set_value('link');?>">
 	<textarea name="story" placeholder="Describe project's you are working on"></textarea>
 	
 	
 	<input type="hidden" name="action" value="register">
 	<input type="submit" value="Register">
 </form>



</body>
</html>