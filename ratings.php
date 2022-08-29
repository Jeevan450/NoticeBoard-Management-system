<?php
require('connection.php');
extract($_POST);
if(isset($save))
{


$name=$_POST['name'];
$email=$_POST['email'];
$rate=$_POST['rate'];



$query="INSERT INTO `ratings` (`srno`, `user`, `email`, `rating`) VALUES (NULL, '$name', '$email', $rate)";
$res=mysqli_query($conn,$query);

if($res)
header('location:index.php');



}



 else{
?>
<br/>
<h2>Ratings</h2>
<form method="post" action="ratings.php">
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<br/>

	<div class="row">
		<div class="col-sm-4">Name</div>
		<div class="col-sm-5">
		<input type="text" name="name" class="form-control"/></div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="email" class="form-control"/></div>
	</div>
	
	<br/>
	<div class="row">
		<div class="col-sm-4">Rate Us</div>
		<div class="col-sm-5">
		<input type="text" name="rate" class="form-control"  placeholder="In range of 1 to 5" /></div>
	</div>
	<br/>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Send Query" name="save" class="btn btn-success"/>
		
		</div>
	</div>
		
		</div>
		
	</div>
	
	
</form>	<?php }?>