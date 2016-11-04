<form action="newimg.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="image" value="upload"></input>
	<input type="submit" name="submit"></input>
</form>
<?php
require 'db.php';
$imagename=mysqli_real_escape_string($conn,$_FILES["image"]["name"]);
$imagedata=mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));
$imagetype=mysqli_real_escape_string($conn,$_FILES["image"]["type"]);
if (substr($imagetype, 0,5)=="image") {
$quer=mysqli_query($conn,"INSERT INTO att VALUES('','','','','','','','','$imagedata')");
if($quer){
	echo "uploaded";
}else{
	echo mysql_error($quer);
}
}
?>
