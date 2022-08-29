<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	img{

		align-items: center;
		width: 100%;
		heigth: 10%;

	}
	body{
		background-color: #f2f2f2;

	}
	.container-1
	{
		position: relative;
		top: 20px;
		width: 100%;
		height: 500px;
		background-image: url('images/background.jpeg') ;
		opacity: 75%;
		
		
	}
	.mar
	{
		position: relative;
		top: 30px;
		font-family: times new roman bold;
		font-size: 30px;
		color: #00FF00;
		background: black;
	}
	.Notice
	{
		color: #00FF00;
	}
</style>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#f2f2f2">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong> Notice Board</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	<li><a href="index.php?option=feedback"><span class="glyphicon glyphicon-feedback"></span>Feedback</a></li>
		<li><a href="index.php?option=ratings"><span class="glyphicon glyphicon-rating"></span>Ratings</a></li>


	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in"></span> AdminLogin</a></li>
    </ul>



</div>
</nav>	
<div class="container">
	<div class="row">
	<!-- container -->
	<div class="container-1">
		<div class="mar"><marquee>
			<a href="index.php?option=login" class="Notice">Important Notifications</a>
				</marquee>
		</div>
</div>
		
	</div>
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="feedback")
			{
			include('feedback.php');
			}
			else if($opt=="ratings")
			{
			include('ratings.php');
			}
		}
		else
		{
		
		
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"> Developed by  Jeevan and Pawan </a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>