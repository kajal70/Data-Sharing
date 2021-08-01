<?php
$con=mysqli_connect('127.0.0.1','root','','kaju');

$table="CREATE TABLE  IF NOT EXISTS STUDENTADD(id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(10)NOT NULL,
course VARCHAR(10)NOT NULL,
email VARCHAR(20)NOT NULL,
passward VARCHAR(10)NOT NULL 
)";
mysqli_query($con,$table);



if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$passward=$_POST['pswd'];
  $value="INSERT INTO STUDENTADD(name,course,email,passward)values('$name','$course','$email','$passward')";
if(mysqli_query($con,$value)){

header("Location:stuadd.php");

}else{

echo "error";
header("Location:stuadd.php");
}
	
}
	?>