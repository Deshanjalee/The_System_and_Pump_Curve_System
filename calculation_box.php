<?php
	include "connection.php";
	include "navbar.php";
	
	
?>

<html>
 <head>
 	<title>Flow</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<style type="text/css">
	section
	{
		margin-top: -20px;
	}
.box2
{
    height: 3200px;
    width: 650px;
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
	<div class="log1_img">
		<br> <br><br>
			<div class="box2" style="margin-top: 20px;">
				
					<h1 style="text-align: center;font-size: 35px;">Calculation Form</h1><br> 
					<h1 style="text-align: center; font-size: 25px;">Flow Rate</h1>
					
			
		<h2 style="color: white;font-size: 25px; ">Percentage Calculate</h2> 

<?php

if (isset($_POST["Fr"])) {
 //	$percent= $_POST["percent"];
    $Fr= $_POST["Fr"];

 
    $answer1 = (0/100) * $Fr;	//Fr = Flow rate
    $answer2 = (25/100) * $Fr;
    $answer3 = (50/100) * $Fr;
    $answer4 = (75/100) * $Fr;
    $answer5 = (100/100) * $Fr;
    $answer6 = (110/100) * $Fr;
    $answer7 = (125/100) * $Fr;
    
  
   
 //  $T= $_POST["T"];
   
  
   $answer8 = $answer1/20;		//  Fr/T 
   $answer9 = $answer2/20;
   $answer10 = $answer3/20;
   $answer11 = $answer4/20;
   $answer12 = $answer5/20;
   $answer13 = $answer6/20;
   $answer14 = $answer7/20;
   
//   $d= $_POST["d"];

   $v1 = ($answer8/3600)/((3.14/4)*0.25**2);				//	v = (Fr/3600)/((3.14/4)*0.2**2)
   $answer15 = $v1;
   $v2 = ($answer9/3600)/((3.14/4)*0.25**2);
   $answer16 = $v2;
   $v3 = ($answer10/3600)/((3.14/4)*0.25**2);
   $answer17 = $v3;
   $v4 = ($answer11/3600)/((3.14/4)*0.25**2);
   $answer18 = $v4;	
   $v5 = ($answer12/3600)/((3.14/4)*0.25**2);
   $answer19 = $v5;	
   $v6 = ($answer13/3600)/((3.14/4)*0.25**2);
   $answer20 = $v6;	
   $v7 = ($answer14/3600)/((3.14/4)*0.25**2);
   $answer21 = $v7;	

//   $b= $_POST["b"];
  
//    $k= $_POST["k"];

   $F1 = (3*0.6*($answer15**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v1
   $answer22 = $F1;
   $F2 = (0*0.4*($answer15**2))/(2*9.81);
   $answer23 = $F2;
   $F3 = (1*0.3*($answer15**2))/(2*9.81);
   $answer24 = $F3;
   $F4 = (6*0.15*($answer15**2))/(2*9.81);
   $answer25 = $F4;
   $F5 = (1*0.5*($answer15**2))/(2*9.81);
   $answer26 = $F5;
   $F6 = (1*3.7*($answer15**2))/(2*9.81);
   $answer27 = $F6;

  
   $F7 = (3*0.6*($answer16**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v2
   $answer28 = $F7;
   $F8 = (0*0.4*($answer16**2))/(2*9.81);
   $answer29 = $F8;
   $F9 = (1*0.3*($answer16**2))/(2*9.81);
   $answer30 = $F9;
   $F10 = (6*0.15*($answer16**2))/(2*9.81);
   $answer31 = $F10;
   $F11 = (1*0.5*($answer16**2))/(2*9.81);
   $answer32 = $F11;
   $F12 = (1*3.7*($answer16**2))/(2*9.81);
   $answer33 = $F12;

   $F13 = (3*0.6*($answer17**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v3
   $answer34 = $F13;
   $F14 = (0*0.4*($answer17**2))/(2*9.81);
   $answer35 = $F14;
   $F15 = (1*0.3*($answer17**2))/(2*9.81);
   $answer36 = $F15;
   $F16 = (6*0.15*($answer17**2))/(2*9.81);
   $answer37 = $F16;
   $F17 = (1*0.5*($answer17**2))/(2*9.81);
   $answer38 = $F17;
   $F18 = (1*3.7*($answer17**2))/(2*9.81);
   $answer39 = $F18;

   $F19 = (3*0.6*($answer18**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v4
   $answer40 = $F19;
   $F20 = (0*0.4*($answer18**2))/(2*9.81);
   $answer41 = $F20;
   $F21 = (1*0.3*($answer18**2))/(2*9.81);
   $answer42 = $F21;
   $F22 = (6*0.15*($answer18**2))/(2*9.81);
   $answer43 = $F22;
   $F23 = (1*0.5*($answer18**2))/(2*9.81);
   $answer44 = $F23;
   $F24 = (1*3.7*($answer18**2))/(2*9.81);
   $answer45 = $F24;

   $F25 = (3*0.6*($answer19**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v5
   $answer46 = $F25;
   $F26 = (0*0.4*($answer19**2))/(2*9.81);
   $answer47 = $F26;
   $F27 = (1*0.3*($answer19**2))/(2*9.81);
   $answer48 = $F27;
   $F28 = (6*0.15*($answer19**2))/(2*9.81);
   $answer49 = $F28;
   $F29 = (1*0.5*($answer19**2))/(2*9.81);
   $answer50 = $F29;
   $F30 = (1*3.7*($answer19**2))/(2*9.81);
   $answer51 = $F30;

   $F31 = (3*0.6*($answer20**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v6
   $answer52 = $F31;
   $F32 = (0*0.4*($answer20**2))/(2*9.81);
   $answer53 = $F32;
   $F33 = (1*0.3*($answer20**2))/(2*9.81);
   $answer54 = $F33;
   $F34 = (6*0.15*($answer20**2))/(2*9.81);
   $answer55 = $F34;
   $F35 = (1*0.5*($answer20**2))/(2*9.81);
   $answer56 = $F35;
   $F36 = (1*3.7*($answer20**2))/(2*9.81);
   $answer57 = $F36;

   $F37 = (3*0.6*($answer21**2))/(2*9.81);			//	Fittings head = (#kv**2)/2g	---- v7
   $answer58 = $F37;
   $F38 = (0*0.4*($answer21**2))/(2*9.81);
   $answer59 = $F38;
   $F39 = (1*0.3*($answer21**2))/(2*9.81);
   $answer60 = $F39;
   $F40 = (6*0.15*($answer21**2))/(2*9.81);
   $answer61 = $F40;
   $F41 = (1*0.5*($answer21**2))/(2*9.81);
   $answer62 = $F41;
   $F42 = (1*3.7*($answer21**2))/(2*9.81);
   $answer63 = $F42;

   $S1 = ($answer22 + $answer23 + $answer24 + $answer25 + $answer26 + $answer27);		//	sum = hf1+hf2+hf3+hf4+hf5+hf6
   $answer64 = $S1;
   $S2 = ($answer28 + $answer29 + $answer30 + $answer31 + $answer32 + $answer33);
   $answer65 = $S2;
   $S3 = ($answer34 + $answer35 + $answer36 + $answer37 + $answer38 + $answer39);
   $answer66 = $S3;
   $S4 = ($answer40 + $answer41 + $answer42 + $answer43 + $answer44 + $answer45);
   $answer67 = $S4;
   $S5 = ($answer46 + $answer47 + $answer48 + $answer49 + $answer50 + $answer51);
   $answer68 = $S5;
   $S6 = ($answer52 + $answer53 + $answer54 + $answer55 + $answer56 + $answer57);
   $answer69 = $S6;
   $S7 = ($answer58 + $answer59 + $answer60 + $answer61 + $answer62 + $answer63);
   $answer70 = $S7;

if(isset($Q) || isset($L) || isset($C) || isset($D) || isset($_POST['submit']))	{	

$Q=$_POST['q'];
$answer71 =$Q;
$L=$_POST['l'];
$answer72 =$L;
$C=$_POST['c'];
$answer73 =$C;
$D=$_POST['d'];
$answer74 =$D;


   $hf1 = (10.65*(($Q*(0/100))**1.85)*$L)/(($C**1.85)*($D**4.87));
//	echo "The value of hf1 is:";
 $answer75 = $hf1;

$hf2 = (10.65*(($Q*(25/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

//   echo "The value of hf2 is:";
 $answer76 = $hf2;

$hf3 = (10.65*(($Q*(50/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer77 = $hf3;

$hf4 = (10.65*(($Q*(75/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer78 = $hf4; 

$hf5 = (10.65*(($Q*(100/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer79 = $hf5;

$hf6 = (10.65*(($Q*(110/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer80 = $hf6;

$hf7 = (10.65*(($Q*(125/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer81 = $hf7; 


$answer82 = $answer75 + 31 + $answer64; 	//total head = fraction head + static head + fittings
$answer83 = $answer76 + 31 + $answer65; 
$answer84 = $answer77 + 31 + $answer66;
$answer85 = $answer78 + 31 + $answer67; 
$answer86 = $answer79 + 31 + $answer68;
$answer87 = $answer80 + 31 + $answer69;
$answer88 = $answer81 + 31 + $answer70;

 }
}

 ?>

<!-- <html>
 <head>
 	<title>Flow</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<style type="text/css">
	section
	{
		margin-top: -20px;
	}
.box2
{
    height: 2500px;
    width: 650px;
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
	<div class="log1_img">
		<br> <br><br>
			<div class="box2" style="margin-top: 20px;">
				
					<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Flow Rate</h1>
					<h1 style="text-align: center;font-size: 25px;">Calculation Form</h1><br> 
			


	<h2 style="color: white; ">Percentage of Flow Rate Calculate <a href="http://www.tutorialsmade.com/php-percentage-calculater-script/"></a></h2> -->
	<form action="" method="post">
    <!--   <input size="7" type="text" name="percent" value="<?php echo isset($percent) ? $percent : '';?>" placeholder="Enter percent value"/>% of -->
       <input size="10" type="text" name="Fr" value="<?php echo isset ($Fr) ? $Fr :'';?>" placeholder="Enter the value Fr" />
       <input value="Calculate" style="color: black;" type="submit" /> 
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer1) ? $answer1: ''; ?>" placeholder="The value of Fr1 is :" style="color: black;" class="disabled-cursor" disabled /> 0%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer2) ? $answer2: ''; ?>" placeholder="The value of Fr2 is :" style="color: black;" class="disabled-cursor" disabled /> 25%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer3) ? $answer3: ''; ?>" placeholder="The value of Fr3 is :" style="color: black;" class="disabled-cursor" disabled /> 50%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer4) ? $answer4: ''; ?>" placeholder="The value of Fr4 is :" style="color: black;" class="disabled-cursor" disabled /> 75%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer5) ? $answer5: ''; ?>" placeholder="The value of Fr5 is :" style="color: black;" class="disabled-cursor" disabled /> 100%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer6) ? $answer6: ''; ?>" placeholder="The value of Fr6 is :" style="color: black;" class="disabled-cursor" disabled /> 110%
       <input size="14" type="text" name="a-ans" value="<?php echo isset($answer7) ? $answer7: ''; ?>" placeholder="The value of Fr7 is :" style="color: black;" class="disabled-cursor" disabled /> 125%

       <h1 style="text-align: center;font-size: 25px;">Flow (Fr/T)</h1><br> 
       <h2 style="color: white;font-size: 15px; ">Operating Hours = 20hrs</h2> 
<!--       <input size="10" type="text" name="T" value="<?php echo isset ($answer51) ? $answer51 :'';?>" placeholder="Enter the value T" /> 
       <input value="Enter" style="color: black;" type="submit" /> -->

	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer8) ? $answer8: ''; ?>" placeholder="The value of (Fr/T)1 is :" style="color: black;" class="disabled-cursor" disabled /> 0%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer9) ? $answer9: ''; ?>" placeholder="The value of (Fr/T)2 is :" style="color: black;" class="disabled-cursor" disabled /> 25%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer10) ? $answer10: ''; ?>" placeholder="The value of (Fr/T)3 is :" style="color: black;" class="disabled-cursor" disabled /> 50%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer11) ? $answer11: ''; ?>" placeholder="The value of (Fr/T)4 is :" style="color: black;" class="disabled-cursor" disabled /> 75%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer12) ? $answer12: ''; ?>" placeholder="The value of (Fr/T)5 is :" style="color: black;" class="disabled-cursor" disabled /> 100%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer13) ? $answer13: ''; ?>" placeholder="The value of (Fr/T)6 is :" style="color: black;" class="disabled-cursor" disabled /> 110%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer14) ? $answer14: ''; ?>" placeholder="The value of (Fr/T)7 is :" style="color: black;" class="disabled-cursor" disabled /> 125%

	   <h1 style="text-align: center;font-size: 25px;">Velocity</h1><br> 
	   <h2 style="color: white;font-size: 15px; ">Pipe diameter = 0.25m</h2> 
<!--	   <input size="10" type="text" name="d" value="<?php echo isset ($d) ? $d :'';?>" placeholder="Enter the value d (m)" /> 
       <input value="Enter" style="color: black;" type="submit" /> -->

	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer15) ? $answer15: ''; ?>" placeholder="The value of V1 is :" style="color: black;" class="disabled-cursor" disabled /> 0%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer16) ? $answer16: ''; ?>" placeholder="The value of V2 is :" style="color: black;" class="disabled-cursor" disabled /> 25%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer17) ? $answer17: ''; ?>" placeholder="The value of V3 is :" style="color: black;" class="disabled-cursor" disabled /> 50%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer18) ? $answer18: ''; ?>" placeholder="The value of V4 is :" style="color: black;" class="disabled-cursor" disabled /> 75%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer19) ? $answer19: ''; ?>" placeholder="The value of V5 is :" style="color: black;" class="disabled-cursor" disabled /> 100%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer20) ? $answer20: ''; ?>" placeholder="The value of V6 is :" style="color: black;" class="disabled-cursor" disabled /> 110%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer21) ? $answer21: ''; ?>" placeholder="The value of V7 is :" style="color: black;" class="disabled-cursor" disabled /> 125%

	    <h1 style="text-align: center;font-size: 25px;">Fraction Head Fittings</h1><br> 
			

<!--	   <input size="10" type="text" name="b" value="<?php echo isset ($b) ? $b :'';?>" placeholder="Enter the value of Bend Number " />
	   <input value="Enter" style="color: black;" type="submit" /> 
	   <input size="10" type="text" name="k" value="<?php echo isset ($k) ? $k :'';?>" placeholder="Enter the value k value " />
	   <input value="Enter" style="color: black;" type="submit" /> -->
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer22) ? $answer22: ''; ?>" placeholder="The value of F1 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer23) ? $answer23: ''; ?>" placeholder="The value of F2 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer24) ? $answer24: ''; ?>" placeholder="The value of F3 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer25) ? $answer25: ''; ?>" placeholder="The value of F4 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer26) ? $answer26: ''; ?>" placeholder="The value of F5 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer27) ? $answer27: ''; ?>" placeholder="The value of F6 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V1)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer28) ? $answer28: ''; ?>" placeholder="The value of F7 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer29) ? $answer29: ''; ?>" placeholder="The value of F8 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer30) ? $answer30: ''; ?>" placeholder="The value of F9 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer31) ? $answer31: ''; ?>" placeholder="The value of F10 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer32) ? $answer32: ''; ?>" placeholder="The value of F11 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer33) ? $answer33: ''; ?>" placeholder="The value of F12 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V2)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer34) ? $answer34: ''; ?>" placeholder="The value of F13 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer35) ? $answer35: ''; ?>" placeholder="The value of F14 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer36) ? $answer36: ''; ?>" placeholder="The value of F15 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer37) ? $answer37: ''; ?>" placeholder="The value of F16 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer38) ? $answer38: ''; ?>" placeholder="The value of F17 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer39) ? $answer39: ''; ?>" placeholder="The value of F18 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V3)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer40) ? $answer40: ''; ?>" placeholder="The value of F19 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer41) ? $answer41: ''; ?>" placeholder="The value of F20 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer42) ? $answer42: ''; ?>" placeholder="The value of F21 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer43) ? $answer43: ''; ?>" placeholder="The value of F22 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer44) ? $answer44: ''; ?>" placeholder="The value of F23 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer45) ? $answer45: ''; ?>" placeholder="The value of F24 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V4)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer46) ? $answer46: ''; ?>" placeholder="The value of F25 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer47) ? $answer47: ''; ?>" placeholder="The value of F26 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer48) ? $answer48: ''; ?>" placeholder="The value of F27 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer49) ? $answer49: ''; ?>" placeholder="The value of F28 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer50) ? $answer50: ''; ?>" placeholder="The value of F29 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer51) ? $answer51: ''; ?>" placeholder="The value of F30 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V5)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer52) ? $answer52: ''; ?>" placeholder="The value of F31 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer53) ? $answer53: ''; ?>" placeholder="The value of F32 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer54) ? $answer54: ''; ?>" placeholder="The value of F33 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer55) ? $answer55: ''; ?>" placeholder="The value of F34 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer56) ? $answer56: ''; ?>" placeholder="The value of F35 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer57) ? $answer57: ''; ?>" placeholder="The value of F36 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V6)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer58) ? $answer58: ''; ?>" placeholder="The value of F37 is :" style="color: black;" class="disabled-cursor" disabled /> 90 deg bend (V7)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer59) ? $answer59: ''; ?>" placeholder="The value of F38 is :" style="color: black;" class="disabled-cursor" disabled /> 45 deg bend (V7)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer60) ? $answer60: ''; ?>" placeholder="The value of F39 is :" style="color: black;" class="disabled-cursor" disabled /> 22.5 deg bend (V7)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer61) ? $answer61: ''; ?>" placeholder="The value of F40 is :" style="color: black;" class="disabled-cursor" disabled /> 11.25 deg bend (V7)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer62) ? $answer62: ''; ?>" placeholder="The value of F41 is :" style="color: black;" class="disabled-cursor" disabled /> Valves (V7)
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer63) ? $answer63: ''; ?>" placeholder="The value of F42 is :" style="color: black;" class="disabled-cursor" disabled /> Non-Return (V7)

	   <h1 style="text-align: center;font-size: 25px;">Fraction Head Fittings (sum)</h1><br> 

	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer64) ? $answer64: ''; ?>" placeholder="The value of S1 is :" style="color: black;" class="disabled-cursor" disabled /> (V1) 0%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer65) ? $answer65: ''; ?>" placeholder="The value of S2 is :" style="color: black;" class="disabled-cursor" disabled /> (V2) 25%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer66) ? $answer66: ''; ?>" placeholder="The value of S3 is :" style="color: black;" class="disabled-cursor" disabled /> (V3) 50%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer67) ? $answer67: ''; ?>" placeholder="The value of S4 is :" style="color: black;" class="disabled-cursor" disabled /> (V4) 75%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer68) ? $answer68: ''; ?>" placeholder="The value of S5 is :" style="color: black;" class="disabled-cursor" disabled /> (V5) 100%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer69) ? $answer69: ''; ?>" placeholder="The value of S6 is :" style="color: black;" class="disabled-cursor" disabled /> (V6) 110%
	   <input size="14" type="text" name="a-ans" value="<?php echo isset($answer70) ? $answer70: ''; ?>" placeholder="The value of S7 is :" style="color: black;" class="disabled-cursor" disabled /> (V7) 125%


	   <h1 style="text-align: center;font-size: 25px;">Fraction Head</h1><br> 

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



	
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer75) ? $answer75: ''; ?>" placeholder="The value of hf1 (Q1) is" style="color: black;" class="disabled-cursor" disabled /> 0%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer76) ? $answer76: ''; ?>" placeholder="The value of hf2 (Q2) is" style="color: black;" class="disabled-cursor" disabled /> 25%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer77) ? $answer77: ''; ?>" placeholder="The value of hf3 (Q3) is" style="color: black;" class="disabled-cursor" disabled /> 50%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer78) ? $answer78: ''; ?>" placeholder="The value of hf4 (Q4) is" style="color: black;" class="disabled-cursor" disabled /> 75%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer79) ? $answer79: ''; ?>" placeholder="The value of hf5 (Q5) is" style="color: black;" class="disabled-cursor" disabled /> 100%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer80) ? $answer80: ''; ?>" placeholder="The value of hf6 (Q6) is" style="color: black;" class="disabled-cursor" disabled /> 110%
<input size="14" type="text" name="a-ans" value="<?php echo isset ($answer81) ? $answer81: ''; ?>" placeholder="The value of hf7 (Q7) is" style="color: black;" class="disabled-cursor" disabled /> 125%  

<h1 style="text-align: center; font-size: 25px;">Static Head</h1>
<h2 style="color: white;font-size: 15px; ">Static Head = Static high - Static low</h2> 
<h2 style="color: white;font-size: 15px; ">Static Head = 31m - 0m = 31m</h2> 
<h1 style="text-align: center; font-size: 25px;">Total Head</h1>

<input size="14" type="text" name="a-ans" value="<?php echo isset($answer82) ? $answer82: ''; ?>" placeholder="The value of Total Head 1 is :" style="color: black;" class="disabled-cursor" disabled />  0%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer83) ? $answer83: ''; ?>" placeholder="The value of Total Head 2 is :" style="color: black;" class="disabled-cursor" disabled />  25%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer84) ? $answer84: ''; ?>" placeholder="The value of Total Head 3 is :" style="color: black;" class="disabled-cursor" disabled />  50%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer85) ? $answer85: ''; ?>" placeholder="The value of Total Head 4 is :" style="color: black;" class="disabled-cursor" disabled />  75%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer86) ? $answer86: ''; ?>" placeholder="The value of Total Head 5 is :" style="color: black;" class="disabled-cursor" disabled />  100%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer87) ? $answer87: ''; ?>" placeholder="The value of Total Head 6 is :" style="color: black;" class="disabled-cursor" disabled />  110%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer88) ? $answer88: ''; ?>" placeholder="The value of Total Head 7 is :" style="color: black;" class="disabled-cursor" disabled />  125%	
    


<!--
<h1 style="text-align: center;font-size: 25px;">Fraction Head</h1><br> 

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
if(isset($Q) || isset($L) || isset($C) || isset($D) || isset($_POST['submit']))		
{
$Q=$_POST['q'];
$answer71 =$Q;
$L=$_POST['l'];
$answer72 =$L;
$C=$_POST['c'];
$answer73 =$C;
$D=$_POST['d'];
$answer74 =$D;

//$percent= $_POST["percent"];
//$hf= $_POST["hf"];

           
$hf1 = (10.65*(($Q*(0/100))**1.85)*$L)/(($C**1.85)*($D**4.87));
//	echo "The value of hf1 is:";
 $answer75 = $hf1;

$hf2 = (10.65*(($Q*(25/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

//   echo "The value of hf2 is:";
 $answer76 = $hf2;

$hf3 = (10.65*(($Q*(50/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer77 = $hf3;

$hf4 = (10.65*(($Q*(75/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer78 = $hf4; 

$hf5 = (10.65*(($Q*(100/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer79 = $hf5;

$hf6 = (10.65*(($Q*(110/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer80 = $hf6;

$hf7 = (10.65*(($Q*(125/100))**1.85)*$L)/(($C**1.85)*($D**4.87));

 $answer81 = $hf7; 

 } 

?>

<input size="14" type="text" name="answer75" value="<?php echo isset ($answer75) ? $answer75: ''; ?>" placeholder="The value of hf1 (Q1) is" style="color: black;" class="disabled-cursor" disabled /> 0%
<input size="14" type="text" name="answer76" value="<?php echo isset ($answer76) ? $answer76: ''; ?>" placeholder="The value of hf2 (Q2) is" style="color: black;" class="disabled-cursor" disabled /> 25%
<input size="14" type="text" name="answer77" value="<?php echo isset ($answer77) ? $answer77: ''; ?>" placeholder="The value of hf3 (Q3) is" style="color: black;" class="disabled-cursor" disabled /> 50%
<input size="14" type="text" name="answer78" value="<?php echo isset ($answer78) ? $answer78: ''; ?>" placeholder="The value of hf4 (Q4) is" style="color: black;" class="disabled-cursor" disabled /> 75%
<input size="14" type="text" name="answer79" value="<?php echo isset ($answer79) ? $answer79: ''; ?>" placeholder="The value of hf5 (Q5) is" style="color: black;" class="disabled-cursor" disabled /> 100%
<input size="14" type="text" name="answer80" value="<?php echo isset ($answer80) ? $answer80: ''; ?>" placeholder="The value of hf6 (Q6) is" style="color: black;" class="disabled-cursor" disabled /> 110%
<input size="14" type="text" name="answer81" value="<?php echo isset ($answer81) ? $answer81: ''; ?>" placeholder="The value of hf7 (Q7) is" style="color: black;" class="disabled-cursor" disabled /> 125%

	<h1 style="text-align: center; font-size: 25px;">Static Head</h1>
	<h2 style="color: white;font-size: 15px; ">Static Head = Static high - Static low</h2> 
	<h2 style="color: white;font-size: 15px; ">Static Head = 31m - 0m = 31m</h2> 
	
	
<!--    <form method="post">
      <table>

      <tr>
       <td> <input type="text" name="x" value="" placeholder="Enter X value"/> </td>
       </tr> 
       <tr>
       <td> <input type="text" name="y" value="" placeholder="Enter Y value"/> </td>
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
$X=$_POST["x"];
$answer83 =$X;
$Y=$_POST["y"];
$answer84 =$Y;
$hs = $answer83-$answer84;
// echo "The value of hs is:" ;
 $answer85 = $hs;  
} 
?>

<input size="14" type="text" name="answer85" value="<?php echo isset ($answer85) ? $answer85: ''; ?>" placeholder="The value of hs is" class="disabled-cursor" disabled />	-->
<!--
<h1 style="text-align: center; font-size: 25px;">Total Head</h1>
<h2 style="color: white;font-size: 15px; ">Total Head = Fraction Head + Static Head + Fraction Head (Fittings) </h2>





<?php
if(isset($answer) || isset($L) || isset($C) || isset($D) || isset($_POST['submit']))		
{

$answer82 = $answer75 + 31 + $answer64; 
$answer83 = $answer76 + 31 + $answer65; 
$answer84 = $answer77 + 31 + $answer66;

}
?>




<input size="14" type="text" name="a-ans" value="<?php echo isset($answer82) ? $answer82: ''; ?>" placeholder="The value of Total Head 1 is :" style="color: black;" class="disabled-cursor" disabled />  0%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer83) ? $answer83: ''; ?>" placeholder="The value of Total Head 2 is :" style="color: black;" class="disabled-cursor" disabled />  25%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer84) ? $answer84: ''; ?>" placeholder="The value of Total Head 3 is :" style="color: black;" class="disabled-cursor" disabled /> (V3) 50%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer67) ? $answer67: ''; ?>" placeholder="The value of S4 is :" style="color: black;" class="disabled-cursor" disabled /> (V4) 75%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer68) ? $answer68: ''; ?>" placeholder="The value of S5 is :" style="color: black;" class="disabled-cursor" disabled /> (V5) 100%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer69) ? $answer69: ''; ?>" placeholder="The value of S6 is :" style="color: black;" class="disabled-cursor" disabled /> (V6) 110%
<input size="14" type="text" name="a-ans" value="<?php echo isset($answer70) ? $answer70: ''; ?>" placeholder="The value of S7 is :" style="color: black;" class="disabled-cursor" disabled /> (V7) 125%
-->


</div>
</div>
</section>



 </body>
 </html> 