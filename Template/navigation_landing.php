<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
      </ul>
      <div class="header">
          <form action="<?= base_url('login'); ?>" method="POST">
        <input type="text" name="email1" placeholder="Your email" value="<?= set_value('email1');?>">
        <input type="password" name="pass" placeholder="password">
        <input type="hidden" name="action" value="login">
        <input type="submit" value="login">
          </form>
         </div>
      
    </div>
           
  </nav>
</div>