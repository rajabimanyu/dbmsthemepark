<?php
include('session.php');
include 'db.php';
$name=$_POST['name'];
$time=$_POST['time'];
$agelimit=$_POST['agelimit'];
$price=$_POST['price'];
$desc=$_POST['desc'];
$them='th3';
$at=$_POST['att'];
echo $name;
echo $time;
echo $agelimit;
echo $price;
echo $desc;
echo $them;
echo $at;
$quer=mysqli_query($conn,"UPDATE att SET name='$name', agelimit='$agelimit', price='$price', description='$desc', timeat='$time' WHERE att='$at' AND them='$them'");
if($quer){
    echo 'inserted';
}else{
    echo "not";
}
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
  <link rel="stylesheet" type="text/css" href="css/adminform.css">
  <script type="text/javascript" src="js/adminform.js"></script>


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
 #hide{
    display: none;
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
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
   
</div><!-- /.container-fluid -->


<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="adth2.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">attraction 1</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="agelimit" placeholder="agelimit" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="time" placeholder="time" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="price" placeholder="price" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="description" name="desc" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
                    <input type="text" name="them" id="hide" value="th2">
                    <input type="text" name="att" id="hide" value="att1">
            
        <input type="submit" id="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>

          <form role="form" action="adth2.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">attraction 1</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="agelimit" placeholder="agelimit" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="time" placeholder="time" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="price" placeholder="price" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="description" name="desc" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
             <input type="text" name="them" id="hide" value="th2">
                    <input type="text" name="att" id="hide" value="att2">
        <input type="submit" id="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>

          <form role="form" action="adth2.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">attraction 1</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="agelimit" placeholder="agelimit" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="time" placeholder="time" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="price" placeholder="price" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="description" name="desc" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
             <input type="text" name="them" id="hide" value="th2">
                    <input type="text" name="att" id="hide" value="att3">
        <input type="submit" id="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>

          <form role="form" action="adth2.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">attraction 1</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="agelimit" placeholder="agelimit" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="time" placeholder="time" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="price" placeholder="price" required>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="description" name="desc" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
             <input type="text" name="them" id="hide" value="th2">
                    <input type="text" name="att" id="hide" value="att4">
        <input type="submit" id="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>


     
    </div>
</div>
</div>


</body>
</html>