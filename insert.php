<?php
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$food=$_POST['food-type'];
$plate=$_POST['plate'];
$connect =mysqli_connect('localhost','root','','angel_k');
if(!$connect)
{
	echo "connection error";
}
else
{
	$sql ="INSERT INTO restau(id,name,phone_number,email,food,plate) VALUES('','$name','$number','$email','$food','$plate')";

}

$run=mysqli_query($connect,$sql);

if($run==TRUE)
 {
	echo "records inserted";
 }
else
{
	echo "not inserted";
}
?>