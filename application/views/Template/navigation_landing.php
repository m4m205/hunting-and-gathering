<?php echo link_tag('Assets/css/style.css'); ?> 
<div class="col-sm-12">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          
          <img class="image_hag"  alt="hag" src=<?= base_url ("Assets/images/hag.png" )?> >    
          

       <div class="login_navigation col-sm-6 "> 
        <form action="<?= base_url('Login'); ?>" method="POST" class="form-inline2">
                  <input type="email" name="email" placeholder="Your Email">Email
                  <input type="password" name="password" placeholder="Your Password">Password
                  <input type="hidden" name="action" value="Login">
                  <input class="btn_log btn-success" type="submit" name="" value="Login"> 
        </form>
      </div>
      
    </nav>
</div>
<br><br><br><br>