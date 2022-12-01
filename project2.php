<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
 die ("Connection failed: " . mysqli_connect_error());
// or you can use else {} instead of die
}


if(isset($_POST['stubutton'])){
    
    $NAME=$_POST['Name'];
    $ID=$_POST['ID'];
    $EMAIL=$_POST['Emali'];
    $PASSWORD=$_POST['Password'];
    $TYPE='Student';
    
    $sql="insert into person (Name, ID, Email, Password, Type) values('$NAME', '$ID', '$EMAIL', '$PASSWORD', '$TYPE')";
     if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


      }
if(isset($_POST['docbutton'])){
    
    $NAME=$_POST['Name'];
    $ID=$_POST['ID'];
    $EMAIL=$_POST['Emali'];
    $PASSWORD=$_POST['Password'];
    $TYPE='Doctor';
    
    $sql="insert into person (Name, ID, Email, Password, Type) values('$NAME', '$ID', '$EMAIL', '$PASSWORD', '$TYPE')";
     if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


      }


//close connection
mysqli_close($conn);

?>