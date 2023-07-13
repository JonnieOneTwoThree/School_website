<?php
$Name = $_POST['Name'];
$AdmissionNumber = $_POST['Admission Number'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirm password'];

if (!empty($Name) || !empty($AdmissionNumber) || !empty($Password) || !empty($Confirmpassword)){
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "kabete poly";

    //creating a connection
    $conn = new mysqli($host, $dbUserName, $dbPassword, $dbName);
    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'. mysqli_connect());
    }
    else{
        $SELECT = "SELECT emailfrom register where UserName = ? Limit 1";
    }
}
else{
    echo"All Fields Are Required";
    die();
}
?>