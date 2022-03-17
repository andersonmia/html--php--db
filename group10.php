<?php
$firstname=$_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
// echo var_dump($_POST);

if($password!=$confirm){
    echo "<h1>Wrong password confirmation</h1>";
}elseif(($firstname=="")||($lastname=="")||($email=="")||($username=="")){
    echo "<h1>Please fill in all the requirements</h1>";
}else{
$code = hash("SHA512",$password);

define("HOST","localhost");
$db_server = "localhost";
$db_user = "andersonmia";
$db_password = "&2005&";
$db_name = "groupwork";
$connection = mysqli_connect(HOST,$db_user,$db_password,$db_name);

//connecting to the database
if(!$connection){
    echo "Error has occured:".mysqli_error($connection);
}else{
    $query = "INSERT INTO group10(firstname,lastname,email,username,password) VALUES('$firstname','$lastname','$email','$username','$code')";
    $insert = mysqli_query($connection,$query) or die("Error occured ".mysqli_error($connection));
    if($insert){
        echo "<h1>Data added succesfully</h1>";
    }else{
        echo "<h1>Unsuccessful attempt</h1>";
    }
}
}

?> 
