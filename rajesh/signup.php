
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#sub').click(function(){
      $ph=$('#phone');
      if($ph.val().length!=10){
        alert($ph.val().length);
        return false;
      }
    })
  })
</script>
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
          <a class="navbar-brand" href="#">SignUp</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
      
          
          </ul>
            </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
   
</div><!-- /.container-fluid -->

<form action="signupst.php" method="post">
	Name:<input type="text" name="name" required=""><br>
	Email:<input type="email" name="email" required=""><br>
	Phone Number (in format xxx-xxx-xxxx):<input type="tel" name="phone" pattern="^\d{3}-\d{3}-\d{4}$" required=""><br>
	Password:<input type="password" name="password" required=""><br>
	<input type="submit" id="sub">
</form>

      


</body>
</html>



