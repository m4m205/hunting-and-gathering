<?php  if ($this->session->userdata('loggedin_user')==""){
    redirect();
} ?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded ">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="/logged"><img class="image_hag"  alt="hag" src=<?= base_url ("Assets/images/hag.png" )?>></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link col-sm-4 form-group" href=<?= base_url("Loggedout") ?>><span class="text-danger">Logout</span> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="document.getElementById('Messages_btn').submit();"><span class="text-success">Messages</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="document.getElementById('profile').submit();"><span class="text-primary">My Profile</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-primary">
          Filter users by </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="#" onclick="document.getElementById('head').submit();">Head</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('hand').submit();">Hand</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('ear').submit();">Ear</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('eye').submit();">Eye</a>
           <a class="dropdown-item" href="#" onclick="document.getElementById('body').submit();">Body</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('other').submit();">Other</a>
        </div>

      </li>
    </ul>
     <form action="/Logged/search_for" method="POST" class="form-inline col-sm-8 form-nav navbar-form navbar-right";">
    <input class="form-control" name="search" type="text" placeholder="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>




</nav>