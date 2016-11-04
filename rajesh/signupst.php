<?php
include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];

echo $name;
echo $email;
echo $phone;
echo $pass;
$id=rand(1,200);
$quer=mysqli_query($conn,"INSERT INTO login VALUES('$id','$name','$pass','dummy','dummy','$email','$phone')");
if($quer){
	header("location:index.php");
}else{
	echo "string";
}
?>