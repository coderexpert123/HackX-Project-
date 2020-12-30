<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php  include 'partials/header.php' ?>
    <?php  include 'partials/dbconnect.php' ?>

    <?php
    $id=$_GET['catid'];


    $sql="SELECT * FROM `categories` WHERE c_id = $id";
    $result =mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {

  

      $catname=$row['c_name'];
      $catdesc=$row['c_desc'];


    }
  

    ?>

<?php 
$sowalert=false;
$method=$_SERVER['REQUEST_METHOD'];
if ($method=='POST') {
  //Insert into db
  $th_title=$_POST['title'];
  $th_desc=$_POST['desc'];
   $sql="INSERT INTO `treads` ( `t_title`, `t_desc`, `t_c_id`, `t_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
    $result =mysqli_query($conn,$sql);
    $sowalert=true;

if ($sowalert) {
echo '

<div class="alert alert-succe alert-dismissible fade show" role="alert">
  <strong>Hllw User ! </strong>Your Question is Added Succesfuuly Please wait community to respond..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

';
}

}

 ?>

<div class="container mt-3">
<div class="jumbotron ">
  <h1 class="display-4">Welcome To <?php echo $catname; ?></h1>
  <p class="lead"><?php echo $catdesc; ?></p>
  <hr class="my-4">
  <p>No Spam / Advertising / Self-promote in the forums. ...
Do not post copyright-infringing material. ...
Do not post “offensive” posts, links or images. ...
Do not cross post questions. ...
Do not PM users asking for help. ...
Remain respectful of other members at all times.</p>
  <a class="btn btn-danger btn-lg" href="contact.php" role="button">Contact Us</a>
</div>











<div class="container">
  <h1 py-2>Ask a  Question</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Elborate Your Concern..</label>
    <input type="email" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Keep Your tittle as crisp as possible.</small>
  </div>
 

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Submit</button>

    
      </form>
</div>

<h1 class="mt-4">Browse Question</h1>

     <?php
      $noResult=true;
     $id=$_GET['catid'];

    $sql="SELECT * FROM `treads` WHERE t_c_id = $id";
    $result =mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
    $noResult=false;

      $id=$row['t_id'];
      $title=$row['t_title'];
      $desc=$row['t_desc'];
      $time=$row['timestamp'];

echo '
<div class="media my-3">
  <img src="images/download.jpg" width="34px" class="mr-3" alt="...">
  <div class="media-body">

<p class="font-weight-bold my-0">Anonyomus User at '. $time.'</p>
<h5 class="mt-0"><a class="text-dark" href="treads.php?treadid='.$id.'">'.$title.'</a></h5>
'.$desc.'
  </div>
</div>';

    }
   if ($noResult) {
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Congrats ! </strong> Be First person to ask a question
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
   }

    ?>

  

</div>
<?php  include 'partials/footer.php'  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>