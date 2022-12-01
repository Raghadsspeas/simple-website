<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$sql= "SELECT ".$_POST["Sportsactivities"]." FROM courses WHERE type='Sports'";
$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {

 while($row = mysqli_fetch_assoc($result)) {
 echo $row["photo1"]. "<br>" . $row["photo2"]. "<br>".$row["photo3"]. "<br>";
 }
} else {
 echo "0 results";
}
$checkbox1 = $_POST['Sportsactivities'] ;  
if ($_POST["submit" ]=="submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO person (Courses) VALUES ('".$checkboxl[$i]. "')";  
mysql_query($query) or die(mysql_error());  
}  
echo "Record is inserted";  
}  
mysqli_close($conn);


?>