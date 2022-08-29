<?php
require('connection.php');
extract($_POST);
if(isset($save))
{


$e=$_POST['e'];
$a=$_POST['a'];


$query="INSERT INTO `feedback` (`id`, `email`, `message`) VALUES(NULL,'$e', '$a')";
$res=mysqli_query($conn,$query);

if($res)
header('location:index.php');



}



 else{
?>
<br/>
<h2>Feedback</h2>
<form method="post" action="feedback.php">
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<br/>
	
	<div class="row">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<br/>
	<div class="row">
		<div class="col-sm-4">Enter Your Message</div>
		<div class="col-sm-5">
		<input type="textarea" name="a" class="form-control" style="width: 400px;height: 200px;" /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Send Query" name="save" class="btn btn-success"/>
		
		</div>
	</div>
		
		</div>
		
	</div>
	
	
</form>	<?php }?>