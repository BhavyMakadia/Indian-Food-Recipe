<?php
$cid=$_GET['id'];
$Rid=$_GET['rid'];
$con = mysqli_connect("localhost", "root", "", "foodrecipes");
	
	$qu = "Delete from r_rating WHERE user_id=$cid AND recipe_id=$Rid;";
	
	$res = mysqli_query($con,$qu);
	if($qu)
	{
		?>
		<script>
		window.location="../material-dashboard-master/rating.php";
		</script>
	<?php
	}
	else
	{
		?>
		<script>
		alert("Error");
		window.location="../material-dashboard-master/rating.php";
		</script>
	<?php
	}
	
	
?>
