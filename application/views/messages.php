<div class="message_container container">
<h3 class="welcome">Mail Box of: <span class="post_box_user_welcome"> <?= $this->session->userdata('loggedin_user')["first_name"]  ?></span></h3>
<?php 


// var_dump($this->session->userdata('loggedin_user'));
 ?>



<div class="in_out_box well"> 
	<h4 class="messagebox_color">Inbox</h4>
	
	<?php 
 	
	foreach ($inbox as $key => $value) {
	  	echo  "<p class='from_user'> From: <span class='user_span'>{$value['sender_name']}</p> <br> <p class='from_user'>Sent at: {$value['created_at']} </p><br><br>" . $value['text_message'] . "<form method='POST' action='/Logged/show_profile'><button class='btn btn-success' name='view_profile' value= {$value['id_user']}>Reply</button></form>" . "<form method='POST' action='/Logged/delete_message'><button class='btn btn-success' name='delete' value={$value['id_message']}>DELETE</button></form>" . "<br><br>";
	  } ;

	 ?>

</div>



<div class="in_out_box well"> <!-- outbox -->
	<h4 class="messagebox_color">Outbox</h4>
	<?php 
 	
	foreach ($outbox as $key => $value) {
	  	echo "<p class=from_user> Sent to: <span class='user_span'>{$value['recipient_name']} </span></p> <br><p class='from_user'>Sent at: {$value['created_at']} </p><br> <div class='red_line well'>". $value['text_message'] . "</div><br><br>";
	  }  ;

	 ?>
</div>


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

</div>
    
    