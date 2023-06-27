<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>first</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">

<style media="screen">
  body {
    background-image: url(images/viewbgimg.png);
  }
</style>

<style>
	table
	{
		margin-left: 0px;
		color: white;
		font-weight: bold;
		border: 1px solid black;

	}
	.li{
		margin-top: 100px;
		margin-left: 600px;
		background-color: blue;
		border-radius: 5px;
		color: white;
		font-size: 20px;
		padding: 10px;
	}
	a:hover{
		color: white;
	}
.le{
		margin-top: 200px;
		border-radius: 10px;
		margin-left: 1200px;
		background-color: crimson;
		color: white;
		font-size: 20px;


		padding: 10px;
	}
	body
	{
		background-color: white;
	}
th
{

}



td {

}


	table
	{
table-layout: fixed;
	}


</style>

</head>
<body>
	<h1 align="center" style="color: white; font-weight: bold;">Welcome to Admin page</h1>
	<a href="homepage.php" class="le">Go To Home</a>
	<br><br><br>
	<div class="card_body">
		<div class="table-responsive">
			<table  class="table table-bordered">
  <thead>
    <tr>
    	 <th scope="col">S.No</th>

      <th scope="col">PROOF</th>
      <th scope="col">DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
    	<!-- <?php
    	$con= new mysqli("localhost","root","","report");
       $sl=0;
    	$query1=mysqli_query($con,"select * from reporttable");
    	while($row=mysqli_fetch_array($query1))
    	{
    		$sl++;


    	?>
    	<tr class="trow">
    		<td><?php echo $sl;?></td>
    		<td><?php echo $row['pname']; ?></td>
    		<td><?php echo $row['dname']; ?></td>



    		<!--<td><form action="first.php" method="post"><input type="submit" name="ins" value="Delete" style="padding:5px; width: 80px;"></form></td>-->

    	</tr>

    <?php  } ?>




    </tbody>
  </table>
  <br><br><br>


  <br><br><br>
  		</div>
  	</div>

  </body>
  </html> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style>

	body
	{
	 background-repeat: no-repeat;
	 background-position: center;

	}
	.help
  {
   margin-top: 100px;
   margin-left: 100px;
   width:410px;
   height:120px;
   color: red;
   font-style: italic;
   font-weight: bold;
   font-size: 20px;
   border:5px solid black;
   text-align: center;
   font-family: sans-serif;


  }


	/*div clsss for heading*/



	/*div clsss for table*/

	.tab
	{
	 margin-top: 0px;
	 margin-left: 100px;
	 border: 1px solid black;
	 margin-right: 450px;
	 width: 420px;
	 height: 1000px;
	 color: white;



	}
	/*table tag */
	table
	{
	 width: 420px;

	}


	.tle
	{

	 border: 5px solid black;
	}

	/*link tag for phone no*/
	a
	{
	 color: white;
	 text-decoration: none;
	}


	</style>
	<body>

		<body>
		 <div class="wh">
		 <div class="help">
		  <h1>HELPINE NUMBER</h1>
		 </div>
		 <div class="tab">
		 <table class="tle" cellspacing="10" cellpadding="10" border="2">

		   <tr class="tr">
		    <td>WomenHelpline (All india)</td>
		    <td><a href="tel:+91 1091">1091</td>

		   </tr>
		                        <tr>
		    <td>Police</td>
		    <td><a href="tel:+91 100">100</td>

		   </tr>

		   <tr>
		    <td>Women Helpline Domestic Abuse</td>
		    <td><a href="tel:+91 181"</a>181</td>
		   </tr>
		   <tr>
		    <td>National Commison For Women(Domestic violence 24x7 helpline for Sexual Violence and harrasment)</td>
		    <td><a href="tel:+91 7827170170">7827170170</td>
		   </tr>
		                        <tr>
		    <td>National Commison For Women</td>
		    <td><a href="tel:+91 011-26942369">011-26942369</td>
		   </tr>

		   <tr>
		    <td>Delhi Commision For Women</td>
		    <td><a href="tel:+91 011-23378044">011-23378044</td>
		   </tr>
		   <tr>
		    <td>Outer Delhi Helpline</td>
		    <td><a href="tel:+91 011-27034873">011-27034873</td>
		   </tr>
		   <tr>
		    <td>Student / Child Helpline</td>
		    <td><a href="tel:+91 1098">1098</td>
		   </tr>
		   <tr>
		    <td>National Human Right Commision </td>
		    <td><a href="tel:+91 9810298900">9810298900</td>
		   </tr>

		   <tr>
		    <td>National Commission for Women(STATE WISE)</td>
		    <td><a href="tel:+91 011-23237166">011-23237166</td>
		   </tr>
		   <tr>
		    <td>WomenHelpline (All india)</td>
		    <td><a href="tel:+91 861013329">1091</td>
		   </tr>

		   <tr>
		    <td>WomenHelpline (All india)</td>
		    <td><a href="tel:+91 861013329">1091</td>
		   </tr>
		   <tr>
		    <td>WomenHelpline (All india)</td>
		    <td><a href="tel:+91 861013329">1091</td>
		   </tr>










		  </table>




		 </div>
		</div>



	</body>
</html>
