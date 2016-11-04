<?php
include('session.php');
include 'db.php';
$them=$_POST['theme'];
$att=$_POST['att'];
$quer=mysqli_query($conn,"INSERT INTO attbook VALUES('','$login_session','$them','$att')");
?>

<!DOCTYPE html>
<html>
<head>
  <title>themepark</title>  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/cat.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/slide.css">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/sllide.js"></script>


</head>
<body>
<style type="text/css">
  #park{
    width: 100%;
  }
  #themimg{
    height: 100px;
    width:100px;
  
  }
</style>



<div class="container-fluid">
    <!-- Second navbar for categories -->
   
    
    <!-- Second navbar for sign in -->
    
    
    <!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Theme Park</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="book.php">Book</a></li>
            <li><a href="logout.php">Logout</a></li>
          
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
   
</div><!-- /.container-fluid -->


<?php
echo 'Booked as '.$login_session;
?>

</body>
</html>