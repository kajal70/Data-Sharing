<?php
$con = mysqli_connect('127.0.0.1','root','' ,'kaju');
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $sql= "DELETE FROM STUDENTADD where id=$id";
}
  if(mysqli_query($con,$sql))
{
	header("location:stuadd.php?msg=delete successfully");
}else
{

header("location:stuadd.php?msg=delete successfully");
	
}