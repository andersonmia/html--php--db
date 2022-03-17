<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

define("HOST","localhost");
$db_user = "andersonmia";
$db_password = "&2005&";
$db_name = "groupwork";
$connection = mysqli_connect(HOST,$db_user,$db_password,$db_name);
if(!$connection){
    echo mysqli_connect_error();
}else{
    $passcode = hash("SHA512",$password);
    $query = "UPDATE group10 set firstname="$firstname", lastname="$lastname", email="$email",username="$username",password="$passcode" WHERE id = $id";
    $update = ($connection,$query);
    if($update){
        echo "<h1>Data updated succesfully</h1>";
    }else{
        echo "<h1>Data updation failed!</h1>";
    }
}
?>
<a href="view.php">Check the results</a>