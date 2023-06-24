<?php
	include "connection.php";
	include "navbar.php";
	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Fraction Head</title>
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
    height: 500px;
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
				
					<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Fraction Head</h1>
					<h1 style="text-align: center;font-size: 25px;">Calculation Form</h1><br> 
					
					

<form method="post">
    <table>
       <tr>
       <td> <input type="text" name="q" value="" placeholder="Enter Q value"/> </td>
       </tr>
       <tr>
       <td> <input type="text" name="l" value="" placeholder="Enter L value"/> </td>
       </tr>
       <tr>
       <td> <input type="text" name="c" value="" placeholder="Enter C value"/> </td>
       </tr>
       <tr>
       <td> <input type="text" name="d" value="" placeholder="Enter D value"/> </td>
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
$Q=$_POST["q"];
$L=$_POST["l"];
$C=$_POST["c"];
$D=$_POST["d"];

//$percent= $_POST["percent"];
//$hf= $_POST["hf"];

           
$hf1 = (10.65*(($Q*(0/100))**1.85)*$L)/(($C**1.85)*($D**4.87));
//	echo "The value of hf1 is:";
 $answer1 = $hf1;

$hf2 = (10.65*(($Q*(25/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

//   echo "The value of hf2 is:";
 $answer2 = $hf2;

$hf3 = (10.65*(($Q*(50/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer3 = $hf3;

$hf4 = (10.65*(($Q*(75/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer4 = $hf4; 

$hf5 = (10.65*(($Q*(100/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer5 = $hf5;

$hf6 = (10.65*(($Q*(110/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer6 = $hf6;

$hf7 = (10.65*(($Q*(125/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer7 = $hf7; 

 } 

?>

<input size="14" type="text" name="answer1" value="<?php echo isset ($answer1) ? $answer1: ''; ?>" placeholder="The value of hf1 (Q1) is" style="color: black;" class="disabled-cursor" disabled /> 0%
<input size="14" type="text" name="answer2" value="<?php echo isset ($answer2) ? $answer2: ''; ?>" placeholder="The value of hf2 (Q2) is" style="color: black;" class="disabled-cursor" disabled /> 25%
<input size="14" type="text" name="answer3" value="<?php echo isset ($answer3) ? $answer3: ''; ?>" placeholder="The value of hf3 (Q3) is" style="color: black;" class="disabled-cursor" disabled /> 50%
<input size="14" type="text" name="answer4" value="<?php echo isset ($answer4) ? $answer4: ''; ?>" placeholder="The value of hf4 (Q4) is" style="color: black;" class="disabled-cursor" disabled /> 75%
<input size="14" type="text" name="answer5" value="<?php echo isset ($answer5) ? $answer5: ''; ?>" placeholder="The value of hf5 (Q5) is" style="color: black;" class="disabled-cursor" disabled /> 100%
<input size="14" type="text" name="answer6" value="<?php echo isset ($answer6) ? $answer6: ''; ?>" placeholder="The value of hf6 (Q6) is" style="color: black;" class="disabled-cursor" disabled /> 110%
<input size="14" type="text" name="answer7" value="<?php echo isset ($answer7) ? $answer7: ''; ?>" placeholder="The value of hf7 (Q7) is" style="color: black;" class="disabled-cursor" disabled /> 125%

	</div> 
</div>
</section>
<!--	<div class="log_img">
		<br> <br><br> 
			<div class="box2" style="margin-top: 20px;"> 
	<h1 style="text-align: center;font-size: 25px;color: white;">Percentage Calculate</h1><br>
	<h2 style="text-align: center;font-size: 25px;color: white; ">Percentage Calculate <a href="http://www.tutorialsmade.com/php-percentage-calculater-script/"></a></h2><br>
	<form action="" method="post">
       <input size="7" type="text" name="percent" value="<?php echo isset ($percent) ? $percent : '';?>" /> % of 
       <input size="10" type="text" name="hf" value="<?php echo isset  ($hf) ? $hf :'';?>" /> = 
       <input size="14" type="text" name="answer" value="<?php echo isset ($answer) ? $answer: ''; ?>" class="disabled-cursor" disabled />
	   <input value="Calculate" type="submit" /> 
	
	</form>	
	
	
	     </div> 
	</div>   -->

 
</body>
</html>
