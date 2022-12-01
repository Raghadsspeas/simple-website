<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Addbuottn'])){
    
    $img=$FILES['myfile']['name'];
    $imgtmp=$FILES['myfile']['img_tmp'];
    $url='images/';
    $type=$_POST['types'];
        move_uploaded_file($imgtmp, $url.$img);
    $sql="insert into courses (Course, type) values('$img', '$type')";
    
         $result=mysqli_query($conn, $sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

      }
       mysqli_close($conn);
?>