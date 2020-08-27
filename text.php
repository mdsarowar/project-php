Md. Nazrul Islam 181-35-24804:55 PM
 <?php  

 $k=$_GET['g'];
 $a=$_GET['f'];
 $b=$_GET['i'];
 $c=$_GET['w'];

 $x= $a*12;
  $y= $x+$b;

 $idw= $y*2.54;
 if ($k == "male") {
   echo "IBW : ",$idw-100," kg";
}

  if($k =="female") {
   echo "IBW : ",$idw-105," kg";
}
 $u= $y*0.0254;
 $bmi= $c/($u*$u);
  echo "<br>\n";
  echo "BMI : ",$bmi," kg/m<sup>2</sup>";
 ?>
<!DOCTYPE html>
<html>
<body>
	<form action="testt.php" method="get">
	Gender :<br>
	<input name="g"><br>

	feet:<br>
	<input name="f"><br>
	inch:<br>
	<input name="i"><br>
	weight:<br>
	<input name="w">

	<br></br>

	<button type="submit">calculation</button>
</form>

</body>
</html>