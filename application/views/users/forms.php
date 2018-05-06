<h1>login</h1>
<form action="<?= base_url('users_process'); ?>" method="POST">
	<input type="text" name="email" placeholder="Your Email">
	<input type="Password" name="pass" placeholder="Your Password">
<input type="hidden" name="action" value="login">
	<input type="submit" value="LogIn"> 
</form>


<h1>registration</h1>
<form action="<?= base_url('users_process'); ?>" method="POST">
	<input type="text" name="fname" placeholder="Your name">
	<input type="text" name="lname" placeholder="Your family is here or not">
	<input type="text" name="email" placeholder="Your Email">
	<input type="Password" name="pass" placeholder="Your Password">
	<input type="Password" name="repass" placeholder="repeat Password">
	<input type="hidden" name="action" value="register">
	<input type="submit" value="Register Now"> 
</form>