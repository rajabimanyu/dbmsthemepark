<?php
include('session.php');
include 'db.php';

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


<div class="container">
 
    <hr>

            <div class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                
                          <a href="th1.php">  
                           <?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att1'");
while ($res=mysqli_fetch_assoc($query)) {
  @$img=$res['img'];


   echo '<img class="lib-img-show" style="width:258.750px;height:206.997px" src="data:image/jpeg;base64,'.base64_encode($img).'"></a>';
 }
                          ?>
                        </div>
                        <div class="col-md-6">
                        <?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att1'");
while ($res=mysqli_fetch_assoc($query)) {
  @$img=$res['img'];
  @$img = base64_encode($img);
  @$src= 'data: '.mime_content_type($img).';base64,'.$img;


   echo '
                            <div class="lib-row lib-header">
                            <h>"'.$res['named'].'"</h>
                              <div class="lib-header-seperator"></div>
                            </div>
                           
     
                           <div class="lib-row lib-desc">
                             Agelimit:"'.$res['agelimit'].'"</br>
                             Price: RS."'.$res['price'].'"</br>
                             Description:"'.$res['description'].'"</br>
                             Time:"'.$res['timeat'].'"
                            </div>';
}
                           
                            ?>
                            <form action="bookatt.php" method="post">
                                <input type="text" name="theme" id="hide" value="th1">
                                <input type="text" name="att" id="hide" value="att1">
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="th2.php">
<?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att2'");
while ($res=mysqli_fetch_assoc($query)) {
  @$img=$res['img'];
  @$img = base64_encode($img);
  @$src= 'data: '.mime_content_type($img).';base64,'.$img;


   echo '<img class="lib-img-show" style="width:258.750px;height:206.997px" src="'.$src.'"></a>';
 }
                          ?>

                        </div>
                        <div class="col-md-6">
                         <?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att2'");
while ($res=mysqli_fetch_assoc($query)) {
     
                            echo '
                            <div class="lib-row lib-header">
                                                        <h>"'.$res['named'].'"</h>

                              <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                 <div class="lib-row lib-desc">
                             Agelimit:"'.$res['agelimit'].'"</br>
                             Price: RS."'.$res['price'].'"</br>
                             Description:"'.$res['description'].'"</br>
                             Time:"'.$res['timeat'].'"
                            </div>';
}
                            ?>
                            </div>
 <form action="bookatt.php" method="post">
                                <input type="text" name="theme" id="hide" value="th1">
                                <input type="text" name="att" id="hide" value="att2">
                                <input type="submit">
                            </form>                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="th3.php">
<?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att3'");
while ($res=mysqli_fetch_assoc($query)) {
  @$img=$res['img'];
  @$img = base64_encode($img);
  @$src= 'data: '.mime_content_type($img).';base64,'.$img;


   echo '<img class="lib-img-show" style="width:258.750px;height:206.997px" src="'.$src.'"></a>';
 }
                          ?>

                        </div>
                        <div class="col-md-6">
                      <?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att3'");
while ($res=mysqli_fetch_assoc($query)) {
     
                            echo '
                            <div class="lib-row lib-header">
                                                        <h>"'.$res['named'].'"</h>

                              <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                 <div class="lib-row lib-desc">
                             Agelimit:"'.$res['agelimit'].'"</br>
                             Price: RS."'.$res['price'].'"</br>
                             Description:"'.$res['description'].'"</br>
                             Time:"'.$res['timeat'].'"
                            </div>';
}
                           
                            ?>                            </div>
 <form action="bookatt.php" method="post">
                                <input type="text" name="theme" id="hide" value="th1">
                                <input type="text" name="att" id="hide" value="att3">
                                <input type="submit">
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="th4.php">
<?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att4'");
while ($res=mysqli_fetch_assoc($query)) {
  @$img=$res['img'];
  @$img = base64_encode($img);
  @$src= 'data: '.mime_content_type($img).';base64,'.$img;


   echo '<img class="lib-img-show" style="width:258.750px;height:206.997px" src="'.$src.'"></a>';
 }
                          ?>


                        </div>
                        <div class="col-md-6">
                        <?php
                            $query=mysqli_query($conn,"SELECT * FROM att WHERE them='th1' AND att='att4'");
while ($res=mysqli_fetch_assoc($query)) {
  echo '
                            <div class="lib-row lib-header">
                             <h>"'.$res['named'].'"</h>
                              <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
   
     
                            <div class="lib-row lib-desc">
                             Agelimit:"'.$res['agelimit'].'"</br>
                             Price: RS."'.$res['price'].'"</br>
                             Description:"'.$res['description'].'"</br>
                             Time:"'.$res['timeat'].'"
                            </div>';
}
                           
                            ?>                            </div>
 <form action="bookatt.php" method="post">
                                <input type="text" name="theme" id="hide" value="th1">
                                <input type="text" name="att" id="hide" value="att4">
                                <input type="submit">
                            </form>                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>