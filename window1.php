<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="button1.js"></script>
	<link rel="stylesheet" href="button1.css">
	 <link rel="stylesheet" href="styles.css">
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	 <style>
	 body{
	 	
	 	background-size: cover;
	 	background-color: #E0E0E0;
	 }
      p {
        font-family: 'Sedgwick Ave', cursive;
        font-size: 12px;
      }
      h5 {
      	font-family: 'IBM Plex Serif', serif;
      	font-size: 25px;
      }
      #bottom{
      	width: 1000px;
      	font-family: 'Sedgwick Ave', cursive;
        font-size: 20px;
        color: #ff3a14;
        position: center;
        margin: 10.66%;
      }
      
    </style>
	<title>Go Italia</title>
	<link rel="icon" type="image/ico" href="titlelogo.png" />

</head>

<body>
	<h1 align="center"><img src="italialogo.png" width="500px;" style="margin-top: 2%;"> </h1>

		<div class="container">                      <!-- Container starts here for the whole table in clock wise order-->
	  
	    
	  <div class="row align-items-center">
	  	<div class="col">
					      <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 1</h5></center>
				  <?php 
				  $sql = "select id from porder";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>
	    <div class="col">
					      <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 2</h5></center>
				  <?php 
				  $sql = "select id from porder2";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../../sp/sp1/index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../../sp/sp1/index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>
	    <div class="col">
					      <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 3</h5></center>
				  <?php 
				  $sql = "select id from porder3";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../../sp/sp2/index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../../sp/sp2/index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>
	    <div class="col">
					      <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 4</h5></center>
				  <?php 
				  $sql = "select id from porder4";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../../sp/sp3/index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../../sp/sp3/index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>

	    <div class="col">
					     <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 5</h5></center>
				  <?php 
				  $sql = "select id from porder5";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../../sp/sp4/index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../../sp/sp4/index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>
	    <div class="col">
					     <div class="card" style="width: 18rem;">
				  <img class="card-img-top" >
				  <div class="card-body"> 
				  	<center><h5 class="card-title">Table - 6</h5></center>
				  <?php 
				  $sql = "select id from porder6";
				  $result = mysqli_query($connection, $sql);
				  if (mysqli_num_rows($result)>0) {
				  echo "<center><a href='../../sp/sp5/index.php' class='btn btn-danger'>MENU</a></center>";
				}
				else {
					echo "<center><a href='../../sp/sp5/index.php' class='btn btn-primary'>MENU</a></center>";
				}

				   ?>                                                         
				    
				   
				    
				  </div>
				</div>
	    </div>
	  </div>

	
	</div>
<!-- 	<button type="button" class="btn btn-light">Add Table</button> -->



</body>

</html>