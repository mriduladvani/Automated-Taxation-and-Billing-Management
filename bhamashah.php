<!DOCTYPE html>
<!--
<?php session_start(); 
$_SESSION['is_admin']=false;
?>
-->
<html>

<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
  <script src="bootstrap-3.3.7-dist/js/jquery-1.12.4.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" target="_blank" href="http://bhamashah.rajasthan.gov.in/content/raj/bhamashah/en/home.html#">Bhamashah</a>
    </div>
    <!--<ul class="nav navbar-nav">
      <li><a href="oilloginform.php">Oil Corp. Login</a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active "><a href="#">AI Employee Login</a></li>
    </ul>-->
  </div>
</nav>
<!-- Navbar-->

<!-- Form -->
  <div class="container">
   <div class="col-md-4 col-md-offset-4 well" style="margin-top:10%">
                         <h2>Login Form:</h2>
     <form  method="post">
	 
         <div class="form-group">
	     <label for="user">Bhamashah ID:</label>
         <input type="text" name="user" class="form-control" id="user" placeholder="Enter your 7-digit ID" required >
         </div>
	     <div class="form-group has-warning has-feedback">
	     <label for="pass">Password:</label>
	     <input type="password" name="pass" class="form-control has-warning" id="pass" required>
	     <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
	     <span class="help-block">A combination of letters & numbers.</span>
         </div>	
	    
		 
		 <button name="submit" type="submit" class="btn btn-success center-block">Proceed</button>
		 

      </form>
   </div>
  </div>   
 <!--End of bootstrapped form. -->
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","ai");

//Check Connection
 if(mysqli_connect_errno())
   { 
    echo "Failed to connect".mysqli_connect_error();
   }   

$query= "SELECT username,password FROM employee";
$result= mysqli_query($conn,$query);

$user = isset($_POST['user']) ? $_POST["user"]  : NULL; 
$pass = isset($_POST['pass']) ? $_POST["pass"]  : NULL;
 /*
	mysqli_num_rows function returns the number of rows in a result set.
		mysqli_fetch_array fetches a result row as an array. 
	*/
	if(isset($_POST['submit']))
  {
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)) 
		{ 
	     
	    if ($user == $row['username'] && $pass == $row['password'])
		    {
				$_SESSION['is_admin'] = true;
				header("location: enterdetails.php");
		    }        
		else
		  {
           $_SESSION['is_admin'] = false;
		   echo '<script language="javascript">';
           echo 'alert("Please Enter Correct Username/Password Combination")';
           echo '</script>';
	      }
		  
		}
		
	}
  }	
mysqli_close($conn);	

?>-->
<!--SOURCE CODE BY RAGHAV ARORA AND SONALI MENDIRATTA GURU TEGH BAHADUR INSTITUTE OF TECHNOLOGY ,RAJOURI GARDEN>