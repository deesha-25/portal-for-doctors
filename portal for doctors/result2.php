<?php 
error_reporting(0);
$dbserver="localhost";
$dbuser="root";
$dbpwd="";
$dbname="patients";
$conn=new mysqli($dbserver,$dbuser,$dbpwd,$dbname);
if ($conn->connect_error){
    die("connection failes".$dbconnect->connect_error);
}
$sql="INSERT INTO `details` (`PATIENT NAME`, `CONTACT`, `AGE`, `GENDER`, `TIME`, `DATE`, `DEPARTMENT`) VALUES ('".$_POST['name']."', '".$_POST['Contact']."', '".$_POST['Age']."', '".$_POST['Gender']."', '".$_POST['Time']."', '".$_POST['Date']."', '".$_POST['Dept']."')";
if($conn->query($sql)==TRUE){
echo "submitted sucessfully";
}
else{
echo "error".$sql."<br>".$conn->error;
}
$conn->close();
?>



