<?php
 
 $firstName = $_POST['fn'];
 $lastName = $_POST['ln'];
 $gender = $_POST['sex'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $number = $_POST['no'];

//  connecting to the database
$conn = new mysqli('localhost','andersonmia','&2005&','form');
if ($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into registration(firstname,lastname,gender,email,password,number) values(?,?,?,?,?,?");
    $stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
    $stmt->execute();
    echo "Registration complete!";
    $stmt->close();
    $conn ->close();
}
?>