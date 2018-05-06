<?php if($this->input->post('action', true)==='login') {
 	echo validation_errors() .'</p><p>';
 }?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Landing Page</title>
 	<meta charset="utf-8">
 </head>
 <body>
 <form action="<?= base_url('login'); ?>" method="POST">
 	<input type="text" name="email1" placeholder="Your email" value="<?= set_value('email1');?>">
 	<input type="password" name="pass" placeholder="password">
 	<input type="hidden" name="action" value="login">
 	<input type="submit" value="login">
 </form>
 <br><br>

 </body>
 </html>
 
 