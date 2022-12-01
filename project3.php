<?php
$host="localhost";
$user="root";
$password="";
$db="website";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['ID'])){
    
    $ID=$_POST['ID'];
    $password=$_POST['password'];
    
    $sql="select * from person where ID='".$ID."'AND Password='".$password."' limit 1";
    
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