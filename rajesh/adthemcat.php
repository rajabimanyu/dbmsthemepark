<?php
include('session.php');
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
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
   
</div><!-- /.container-fluid -->


<div class="container">
 
    <hr>
            <div class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                          <a href="adth1.php">  <img class="lib-img-show" src="images/th1.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
Disney world                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
     This park is famous for roller coaster
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="adth2.php"><img class="lib-img" src="images/th2.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
Wonderland                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                               This park is famous for wave pool
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="adth3.php"><img class="lib-img-show" src="images/th3.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
MGP                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                This park is famous for giant wheel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="adth4.php"><img class="lib-img" src="images/th4.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
Veega Land                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                             This park is famous for car race
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>