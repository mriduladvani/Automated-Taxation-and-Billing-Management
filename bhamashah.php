
<!DOCTYPE html>

-->
<html>

<head>
<title>Login</title><meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
         </div> 
      
     
     <button name="submit" type="submit" class="btn btn-success center-block" onclick="checkbid()">Proceed</button>
     

      </form>
   </div>
  </div>   
 <!--End of bootstrapped form. -->
 <script type="text/javascript">
   function checkbid()
   {
    var x= document.getElementById('user').value;
    var y= "WDYYYGG";
    var n= x.localeCompare(y);
    if(n==0)
    {
      window.open("http://localhost/Automated-Taxation-and-Billing-Management/index.php");
    }
   }
 </script>
</body>
</html>
