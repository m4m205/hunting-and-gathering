<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 print_r($this->session->all_userdata());
	 
?>

<!DOCTYPE html>
<html class="container">
<head>
	<title>Posts</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
</head>
<body> 
<!--
	<div>
       Sended by: <a href="#"><?= $single_post['first_name'];?>  <?= $single_post['last_name']; ?></a><br>

    Created by :<?= $single_post['created_at'];?><br>
        <p><?= $single_post['post']; ?></p><br>    
        
        <form action="<?= base_url('post_action/'); ?>" method="post" >
            <input type="hidden" name="action" value="comment">
            <input type="hidden" name="post-id" value="<?= $single_post['id'];?>">
            <input type="text" name=“comment”>
            <input type="submit" value="creat comment">
            
        </form>
            <form action="<?= base_url('post_action/'); ?>" method="post">
            <input type="hidden" name="action" value="like">
            <input type="hidden" name="posts_id" value="<?= $single_post['id'];?>">
            <input type="submit" value="Like">
        </form>
        <hr>

		</div> 

		<?php
		
		if($user_current){
				}
		?> -->
		    <h1>Add Post</h1>
		    <?=  validation_errors();?>
		    <form action="<?= base_url('post/new_post'); ?>" method="post">
		        <label for="myTextId">Enter your text</label>
		        <textarea name="myText" id="myTextId" cols="100" rows="5"></textarea>
		        <input type="submit" value="Send your Post">
		        <input type="hidden" name="action" value="add">
		    </form>
</body>
</html>