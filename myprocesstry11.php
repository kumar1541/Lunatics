<!DOCTYPE html>

<html>

<head>
<style>
body
{
background-color:#D0D0D0;
}
</style>
</head>
<body>

<?php 
include('connection.php');
 echo "<br>";
echo "User selected state is=";
echo $pt=$_REQUEST['myInputName'];
 echo "<br>";
 echo "<br>";
$data=mysql_query("SELECT * FROM demo WHERE State LIKE'$pt%'");
	 echo " Corresponding Constituencies to selected state are given below<br>";
 echo "<br>";	
?>

<html>
<body>
<form action="myprocess22.php" method="POST">
<?php
	echo "<select name=\"variable\">"; // Open your drop down box
     
while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['Constituency']."'>".$row['Constituency']."</option>";
}

echo "</select>";// Close your drop down box

		
 echo "<br>";
 echo "<br>";	

?>
<input type="submit" value="submit">
</form>
</body>
</html>




















































































































































































































































































































































































































































































































































































































































































































































































































<!--<html>
<body>-
<form action="process2.php" method="post">
<button type="submit">submit</button>
</form>

</body>
</html>-->