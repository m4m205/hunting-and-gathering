
<div class="container">
	<br>
    <h1 class="well">Registration Form</h1> <br>

				<!-- <form action="Login/check_register" method="POST"> -->
				 <?php echo form_open_multipart(base_url('Login/check_register')); ?>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label >Last Name</label>
								<input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="text" name="email" placeholder="Enter Your Email Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter password Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Re-enter Password</label>
								<input type="password" name="confirm_password" placeholder="Re-enter password" class="form-control">
							</div> 
						</div>
							
						<div class="form-group">
								<label>Looking for</label>
								<input type="text" name="look_for" placeholder="Enter what you are looking for.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">Choose your strong side</div>
						<div class="row">	
								
						<select name="category" class="col-sm-4 form-control">
							<option value="Heads">Head</option>
							<option value="Hands">Hand</option>
							<option value="Eyes">Eye</option>
							<option value="Ears">Ear</option>
							<option value="Body">Body</option>
							<option value="Others">Other</option>
						</select> **Please choose which side is your gift**
						</div><br>
							
						<!-- <input type="file" name="userfile"  enctype="multipart/form-data" />	 -->						
					<div class="form-group">

						<div class="form-group">
								<label>Links with your portfolio</label>
								<input type="text" name="link" placeholder="Place your portfolio links" class="form-control">
						</div>

						<label>Story</label>
						<textarea name="story" cols="79" rows="4" placeholder="Enter your story here.." wrap="soft"></textarea>

					</div>
					
				</div>
					<input class="btn btn-success form-group" type="submit" name="action" value="register">				
			</div>						
				
				</form> 
				</div>
	</div>
	</div>


