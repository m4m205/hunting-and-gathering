<div class="container">
<h2 class="welcome well "> <span class="user_class">  <?= $this->session->userdata('loggedin_user')["first_name"]  ?></span>, you can see users by category</h2>


<div class="well">
		
	<?php
		// var_dump($all_info);
		foreach ($all_info as $key => $value) {
			echo "<div class='user-by-cat'><span class='user_span'>Name</span>: {$value['first_name']}" . " " . $value["last_name"] ."<br>". "<span class='user_span'>Looking For</span>: </span>{$value['looking_for']}" . "<form method='POST' action='/Logged/show_profile'><br><button class='btn btn-success' type='submit' name='view_profile' value={$value["idusers"]}>View Profile</button></form></div>"; 
		}

	  ?>
	  

	  <!-- hidden form needed for navBar -->
	  <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
	  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>

	  <form id="head" action="Logged" method="Post"><input type="hidden" name="action" value="Head"></form>
	  <form id="hand" action="Logged" method="Post"><input type="hidden" name="action" value="Hand"></form>
	  <form id="ear" action="Logged" method="Post"><input type="hidden" name="action" value="Ear"></form>
	  <form id="eye" action="Logged" method="Post"><input type="hidden" name="action" value="Eye"></form>
	  <form id="body" action="Logged" method="Post"><input type="hidden" name="action" value="Body"></form>
	  <form id="other" action="Logged" method="Post"><input type="hidden" name="action" value="Other"></form>

	  
	  <!-- End of hidden form needed for navBar -->
</div><hr><hr>
</div>

