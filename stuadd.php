<?php
$con=mysqli_connect('127.0.0.1','root','','kaju');

  if(!$con){
  
  die("connection failed". mysqli_connect_error());
}else{
  
  
  echo"connection sucessfully";
  }
  $sql="CREATE DATABASE IF NOT EXISTS kaju";
if(mysqli_query($con,$sql)){
  echo"database created sucessfully";
}
else
{
  
die("Error!!!!". mysqli_error());  
  }

  $table="CREATE TABLE IF NOT EXISTS kakakak(id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(10) NOT NULL, 
  email VARCHAR(15) NOT NULL,
  address VARCHAR(40) )";

if(mysqli_query($con,$table))
{
  echo "TABLE CREATED";
}
  else{
  
  die("table error". mysqli_error());
  
  }
   $value="INSERT INTO kakakak(name,email,address)values('kajal','qqq@gmail.com','gkp')";
mysqli_query($con,$value);
?>








<?php
include 'h.php';
?>
<style type="text/css">
  	.div{
  		height: 100%;
  		width: 100%;
  		border:1 px solid brown;
  	}
  	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 0px 5px 10px;
}



.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 400px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
  </style>
  <br>

<!--  <form action="#" name="StudentRegistration" onSubmit="return(validate());">

<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"

  cellspacing="4">


<tr>

  <td colspan=4>

  <center><font size=10><b>Student Registration Form</b></font></center>

  </td>

  </tr>


<tr>

  <td>Name</td>

  <td><input type=text name=textnames id="textname" size="30"></td>

  </tr>


<tr>

  <td>Class with year</td>

  <td><input type="text" name="fathername" id="textname" size="30"></td>

  </tr>

  <tr>

  <td>Email</td>

  <td><input type="text" name="email" id="textname" size="30"></td>

  </tr>


<tr>

  <td>Password</td>

  <td><input type="text" name="pass"

  id="textname" size="30"></td>

  </tr>


<tr>

  <td>Submit</td>

  <td><input type="submit" value="submit form" size="10">

  

  </tr>

</td>
</tr>
</table>
</form>-->
<h2>Student Registration </h2>
<form class="form-inline" action="detail.php" method="POST">
	 <label for="Name">Name:</label>
  <input type="name" id="email" placeholder="Enter name" name="name">
   <label for="course">Course(year):</label>
  <input type="couse" id="email" placeholder="Enter course(year)" name="course">

  <label for="email">Email:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" placeholder="Enter password" name="pswd">
 
  <input type="submit" name="submit" value="Submit">
</form>
<br>
<center><h3><i>List of all students</i></h3>
	<div class="dropup"style="float: right";>
		<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">year<span class="caret"></span>
		</button>
		<div class="dropup"style="float: right";>
		<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Class<span class="caret"></span>
		</button>
		</div></div></center>
    

 <?php
    $con=mysqli_connect('127.0.0.1','root','','kaju');
 
$query="SELECT * FROM STUDENTADD";
$so=mysqli_query($con,$query);
if(mysqli_num_rows($so)>0){ ?>
  <center><form action='stuadd.php' method='POST'>
  <table class= 'table table-dark table-hover'>
  <tr>
    <th>id</th>
    <th>name</th><th>course</th><th>email</th><th>pass</th>
    <th colspan='2'>Action</th>
  </tr>
  <?php 
  while($row=mysqli_fetch_assoc($so))
    { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['passward']; ?></td>
      <td><a href="del.php?id=<?php echo $row['id'];?>">Delete</a></td>
      <td><a href="edit.php?id=<?php echo $row['id'];?>">Update</a></td></td>
    </tr>

    <?php
  }     
}
?>
<!--<h2>Student Registration </h2>
<form class="form-inline" action="">
	 <label for="Name">Name:</label>
  <input type="name" id="email" placeholder="Enter name" name="name">
   <label for="course">Course(year):</label>
  <input type="couse" id="email" placeholder="Enter course(year)" name="course">

  <label for="email">Email:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" placeholder="Enter password" name="pswd">
 
  <button type="submit">Submit</button>
</form>-->
</table>

<?php
include 'f.php';
?>