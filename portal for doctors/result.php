<?php 
$dbserver="localhost";
$dbuser="root";
$dbpwd="";
$dbname="form";
$conn=new mysqli($dbserver,$dbuser,$dbpwd,$dbname);
if ($conn->connect_error){
    die("connection failes".$dbconnect->connect_error);
}
$sql="INSERT INTO `register` (`NAME`, `AGE`, `GENDER`, `CREATE PASSWORD`, `CONFIRM PASSWORD`) VALUES ('".$_POST['name']."', '".$_POST['age']."', '".$_POST['gender']."', '".$_POST['password']."', '".$_POST['confirm']."')";
if($conn->query($sql)==TRUE){
echo "submitted sucessfully";
}
else{
echo "error".$sql."<br>".$conn->error;
}
$conn->close();

?>