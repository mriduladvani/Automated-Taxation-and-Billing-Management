<h1> <!DOCTYPE html>
<html lang="en">

  <?php 
 
$conn=mysqli_connect("localhost","root","","rajasthan-hackathon");

//Check Connection
 if(mysqli_connect_errno())
   { 
    echo "Failed to connect".mysqli_connect_error();
   }   

$query= "SELECT * FROM atbm";
$result= mysqli_query($conn,$query);
$extractarray= mysqli_fetch_array($result);

?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ATBM User Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
    td{
      padding: 20px;
    }
  </style>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>ATBM User Login</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="bhamashah.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">WDYYYGG</h5>
                    
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                          <span>Taxes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.php">Property tax</a></li>
                          <li><a  href="panels.php">Income tax</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Bills</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Water</a></li>
                          <li><a  href="gallery.php">Electricity</a></li>
                          <li><a  href="todo_list.php">Natural Gas</a></li>
                      </ul>
                  </li>
<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-thumbs-up"></i>
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Helpline Number</button>
                      </a>
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Contact us for any assistance regarding the system: Department of IT and communication, Rajasthan</p>
        <p>Ph.No : 141-5153222-21124 Email oic.website@rajasthan.gov.in</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

      
            <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
        <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <div class="row mtbox">
                      <!--<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class="li_heart"></span>
                  <h3>933</h3>
                        </div>
                  <p>933 People liked your page the last 24hs. Whoohoo!</p>
                      </div>
                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class="li_cloud"></span>
                  <h3>+48</h3>
                        </div>
                  <p>48 New files were added in your cloud storage.</p>
                      </div>-->
                  <center><h1>Since you have chosen to discontinue with providing access to your bank account details, you need to pay the bills manually.</h1>
                  <br>
                  <button class="btn btn-primary" data-toggle="collapse" data-target="#demo">Proceed to pay!</button>
                  <div id="demo" class="collapse">
					<button class="btn btn-primary" data-toggle="collapse" data-target="#creditcard">Credit Card</button>
										<button class="btn btn-primary" data-toggle="collapse" data-target="#debitcard">Debit Card</button>
			      </div>
			      <div id="creditcard" class="collapse">
			      			      <table>
			      	<form>
			      		<tr>
			      			<td>Card Nos.</td>
			      			<td id="cnos"><input type="text" name=""></td>
			      		</tr>
			      		<tr><td>Expiry Date:</td>
			      		<td id="ed"><input type="calendar" name=""></td></tr>
			      		<tr>
			      			<td>CVV no.:</td>
			      			<td id="pw"><input type="text" name=""></td>
			      		</tr>
			      		
			      		<tr><td><button class="btn btn-warning">Pay the amount</button></td></tr>
			      	</form>
			      </table>
			      </div>
			      <div id="debitcard" class="collapse">
			      			      <table>
			      	<form>
			      		<tr>
			      			<td>Card Nos.</td>
			      			<td id="cnos"><input type="text" name=""></td>
			      		</tr>
			      		<tr><td>Expiry Date:</td>
			      		<td id="ed"><input type="calendar" name=""></td></tr>
			      		<tr>
			      			<td>Net Banking Password:</td>
			      			<td id="pw"><input type="text" name=""></td>
			      		</tr>
			      		
			      		<tr><td><button class="btn btn-warning">Pay the amount</button></td></tr>
			      	</form>
			      </table>
			      </div>

				  </center>
                    <!--  THE DASHBOARD TABLE THAT CONSISTS OF ALL THE DETAILS OF THE RESPECTIVE BHAMASHAH IDENTITY USER-->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
               
      </section>



      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top: 40px;">
          <div class="text-center">
              Rajasthan Hackathon 2017
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  <!--
  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
       return false;
        });
  </script>
  -->
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
Provided</h1>