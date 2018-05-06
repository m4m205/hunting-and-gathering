<h1 align="center" class="user_class welcome_name blink_me">H  u  n  t  i  n  g  A  n  d  G  a  t  h  e  r  i  n  g </h1>

<?php 

 ?>

<h2 align="center" >Welcome, <span class="user_class"> <?= $this->session->userdata('loggedin_user')["first_name"]  ?>,</span><br></h2>
<h3 align="center"> Please select a category bellow to see users:  </h3>

<form id="head" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit"  name="act" value="Head" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Head"><br><br>

</form>
<form id="hand" action="Logged" method="Post" align="center">

	<input class="btn-primary btn-lg stretch" type="submit" name="act" value="Hand" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Hand"><br><br>
</form>
<form id="ear" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Ear" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Ear"><br><br>
</form>	


<form id="eye" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Eye" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Eye"><br><br>

</form>
<form id="body" action="Logged" method="Post" align="center">
	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Body" style="height:140px; width:60% ">
	<input type="hidden" name="action" value="Body"><br><br>
</form>


<form id="other" action="Logged" method="Post" align="center">

	
	<input class="btn-primary btn-lg" type="submit" name="act" value="Other" style="height:140px; width:60%">
	<input type="hidden" name="action" value="Other"><br><br>
	</form>

 <!-- hidden form needed for navBar -->
 <form id="Messages_btn" method="post" action="/Logged/go_to_messages" ><input type="hidden" name="mail"></form>
  <form id="profile" method='POST' action='/Logged/show_profile'><input type="hidden" name="view_profile" value="<?= $this->session->userdata('loggedin_user')['idusers']?>"></form>
  
  

    <!-- End of hidden form needed for navBar -->