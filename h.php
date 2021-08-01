
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <style type="text/css"> 
  	.logo{
  		height: 50px;
  		width: 50px;
  	}
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="admin.png" class="logo">
    </div>  
  <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" href="stuadd.php"><span class="fa fa-pen"></span>Student Add</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="stuedit.php" ><span class="fa fa-pen"></span>Student Edit</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="update.php"><span class="fa fa-file"></span>Update Doc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="permission.php"><span class="fa fa-cloud"></span>Permission</a>
    </li>
  
  </ul>
</nav>
