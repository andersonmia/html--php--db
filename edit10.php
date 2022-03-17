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
            <form action="group10.php" method="post">
        
        <h2>Edit Information</h2>
        <div class="info">                            
                <input type="text" name="firstname" id="firstname" placeholder="Firstname">                                    
                <input type="text" name="lastname" id="lastname" placeholder="Lastname">      
                <input type="email" name="email" id="email" placeholder="E-mail">           
                <input type="text" name="username" id="username" placeholder="Username">           
                <input type="password" name="password" id="password" placeholder="Password">            
                <input type="password" name="confirm" id="confirm" placeholder="Confirm password">            
            <button type="submit">Create Account</button>
        </div>
    </form>
        }
    }
</body>
</html>