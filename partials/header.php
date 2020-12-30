<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/stackoverflow">Coding-War</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/stackoverflow">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Categories</a>
      </li>
   
     <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact-us</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="about.php">About-us</a>
      </li>
    </ul>
    <div class ="row mx-2">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class ="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#loginModel">Login</button>
        <button class ="btn btn-outline-success ml-2" data-toggle="modal" data-target="#signupMdel">Signup</button>
  </div>
</nav> ';

include 'partials/loginModel.php'; 
include 'partials/signupMdel.php'; 


if (isset($_GET['signupsucess']) && ($_GET['signupsucess'])=="true") {
echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong> User Register sucessful...
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}

?>