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
    $id=$_GET['treadid'];
  $sql="SELECT * FROM `treads` WHERE t_id = $id";
    $result =mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {


      $title=$row['t_title'];
      $desc=$row['t_desc'];


    }
  

    ?>



    <?php 
$sowalert=false;
$method=$_SERVER['REQUEST_METHOD'];
if ($method=='POST') {
  //Insert into db
  $comment=$_POST['comments'];

   $sql="INSERT INTO `comment` ( `comment_content`, `t_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0', current_timestamp())";
    $result =mysqli_query($conn,$sql);
    $sowalert=true;

if ($sowalert) {
echo '

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success !</strong> Your Cooments is added Succesfuuly..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

';
}

}

 ?>


<div class="container">
<div class="jumbotron">
  <h1 class="display-4"><?php echo $title; ?></h1>
  <p class="lead"><?php echo $desc; ?></p>
  <hr class="my-4">
  <p>No Spam / Advertising / Self-promote in the forums. ...
Do not post copyright-infringing material. ...
Do not post “offensive” posts, links or images. ...
Do not cross post questions. ...
Do not PM users asking for help. ...
Remain respectful of other members at all times.</p>
<p><b>Posted By <b>:Nishant Singh</p>
</div>
<h1 py-2>Post a Comments</h1>

      <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">

 
<div class="form-group">
    <label for="exampleFormControlTextarea1">Your Comment</label>
    <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Post Comment</button>

    
      </form>





<h1 class="mt-4">Discussion</h1>

       <?php
 
       $id=$_GET['treadid'];

      $sql="SELECT * FROM `comment` WHERE t_id = $id";
      $result =mysqli_query($conn,$sql);

      while ($row=mysqli_fetch_assoc($result)) {
   

        $comment_id=$row['cooment_id'];
        $content=$row['comment_content'];
        $comment=$row['comment_time'];

  echo '
  <div class="media my-3">
    <img src="images/download.jpg" width="34px" class="mr-3" alt="...">
    <div class="media-body">
    <p class="font-weight-bold my-0">Anonyomus User at '. $comment.'</p>
  '.$content.'
    </div>
  </div>';}
    

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