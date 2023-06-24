<?php
	include "connection.php";
	include "navbar.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fraction fitting Head</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<style type="text/css">
	section
	{
		margin-top: -20px;
	}
.box1
{
    height: 400px;
    width: 450px;
    background-color: black;
    margin: 0px auto;
    opacity: .8;
    color: white;
    padding: 20px;
}
label
{
	font-size: 18px;
	font-weight: 600;
}	
</style>
</head>
<body>

	<section>
	<div class="log_img">
		<br> <br><br>
			<div class="box1" style="margin-top: 20px;">
				
					<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Fraction fitting Head</h1>
					<h1 style="text-align: center;font-size: 25px;">Calculation Form</h1><br> 

<form method="post">
<table>
<tr>
<td> <input type="text" name="k" value="" placeholder="Enter k value"/> </td>
</tr>
<tr>
<td> <input type="text" name="v" value="" placeholder="Enter v value"/> </td>
</tr>
<tr>
<td> <input type="text" name="g" value="" placeholder="Enter g value"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="submit" style="color: black; width: 70px;height: 30px"/>
</td>
</tr>
</table>
</form>
	
<?php
if(isset($_POST['submit']))
{
$k=$_POST["k"];
$v=$_POST["v"];
$g=$_POST["g"];

$hF = $k * (($v**2)/(2*$g));
    echo "The value of hF is:";
    $answer = $hF; 
}

?>

<input size="14" type="text" name="answer" value="<?php echo isset ($answer) ? $answer: ''; ?>" placeholder="The value of hs is" class="disabled-cursor" disabled />

</div>
	</div>
</section>

</boad>
</html>