<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD GROUP WORK</title>
</head>
<body>
    <?php
    define("HOST","localhost");
    $db_user = "andersonmia";
    $db_password = "&2005&";
    $db_name = "groupwork";
    $connection = mysqli_connect(HOST,$db_user,$db_password,$db_name);
    if(!$connection){
        echo mysqli_connect_error();
    }else{
        $id = $_GET['$id'];
        $query = "SELECT * FROM group10";
        $select = ($connection,$query) or die(mysqli_connect_error());
        if($select){
            ?>
            <form action="update.php" method="post">
        
        <h2>Edit Information</h2>
        <form action="update10.php" method="post">
        <div class="info"> 
            <input type="hidden" name="id" id="id" placeholder="Id" value="<?php $row['id']?>">                           
                <input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php $row['firstname']?>">                                    
                <input type="text" name="lastname" id="lastname" placeholder="Lastname" value="<?php $row['lastname']?>">      
                <input type="email" name="email" id="email" placeholder="E-mail" value="<?php $row['email']?>">           
                <input type="text" name="username" id="username" placeholder="Username" value="<?php $row['username']?>">           
                <input type="password" name="password" id="password" placeholder="Password" value="<?php $row['password']?>">          
                            
            <button type="submit">Update Information</button>
        </div>
    </form>
    <?php
        }
    }
    ?>
</body>
</html>