<?php
include 'h.php';
?>
<style type="text/css">
  	.div{
  		height: 100%;
  		width: 100%;
  		border:1 px solid brown;
  	}
  </style>
  <br>
  <h2>Student edit </h2>
<form class="form-inline" action="detailedit.php" method="POST">
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
<br>
<br>

 <?php
    $con=mysqli_connect('127.0.0.1','root','','kaju');
    $query="SELECT * FROM STUDENTEDIT";
     $so=mysqli_query($con,$query);
    if(mysqli_num_rows($so)>0)
{
  echo "<center><form action='stuedit.php' method='POST'><table class='table table-dark table-hover'><tr><th>id</th><th>name</th><th>course</th><th>email</th><th>passward</th></tr>";
  while($row=mysqli_fetch_assoc($so))
  {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['course']."</td><td>".$row['email']."</td><td>".$row['passward']."</td></tr></center>";
  }       
}
echo "</table>";
echo"<span style='color:red'>";
if(isset($_GET['msg']))
{
  echo $_GET['msg'];
}
echo "</span>";
?>

<!--  <form action="#" name="StudentRegistration" onSubmit="return(validate());">

<table cellpadding="4" width="50%" bgcolor="99FFFF" align="center"

  cellspacing="4">


<tr>

  <td colspan=4>

  <center><font size=10><b>Student edit</b></font></center>

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
<!--<br>

<table class="table table-hover">
      <thead>
        <tr>
          <th>Year</th>
          <th>Class</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td>1</td>
          <td>fhjkj</td>
          
        </tr>
        <tr>
          <td>2</td>
          <td>kjkjh</td>
          
        </tr>
        <tr>
          <td>3</td>
          <td>hhfj</td>
          
        </tr>

</tbody>
</table>-->
<?php
include 'f.php';
?>

