<?php


$con= new mysqli("localhost","root","","report");
if(isset($_POST['submit']))
{
	$cname=$_POST['cname'];

	$pname=$_POST['pname'];

	$dname=$_POST['dname'];

	$sql="INSERT INTO reporttable(cname,pname,dname) VALUES('$cname','$pname','$dname')";
	if($con->query($sql))
	{
     echo "";

	}
else
{
	echo " insert fail";
}

}
else
{

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	.sp{

		width: 300px;
		height: 150px;
		background-color: pink;
		margin-left: 500px;
		margin-top:250px ;
		border: 1px solid black;
		border-radius: 15px;

	}
	h3
	{
		margin-top: 50px;
		margin-left: 30px;
	}
	.ali{
		margin-top: 200px;
		margin-left: 120px;
		text-decoration: none;
		background-color: blue;
		padding: 7px;
		border-radius: 6px;
		border: 1px solid white;
		color: white;
	}
</style>
<body>
	<div class="sp">
		<h3>Your response has been recorded!!!</h3>
		<a href="report.php" class="ali">Ok</a>

	</div>

</body>
</html>
