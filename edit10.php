<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD GROUP WORK</title>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css);
form{
    border-color: rgb(241, 38, 174) orangered;
    border-style: solid;
    border-radius: 12px;
    width: 50%;
    background-color: aliceblue;
    margin: 1.5% auto;
}
input{
    border: none;
    outline: none;
    background-color: white;
    width: 90%;
}

button{
    border-radius: 12px;
    background-image: linear-gradient(45deg, rgb(241, 38, 174) 0%, orangered 50%); 
    border: none;
    color: aliceblue;
    padding: 0.6%;
    margin: 2% auto;
    width: 20%;
}
.info{
    display: flex;
    flex-direction: column;
    margin-top: 5%;
    border:2px solid red;
}
h1{
    color: blue;
}
h2{
    color: gray;
}
h1,h2{
    text-align: center;
}
img{
    margin-left: 0px 2px;
    width: 4%;
}
::placeholder{
    color: blueviolet;
}
*{
    color: rgb(241, 38, 174);
}
    </style>
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
        $id = $_GET['id'];
        $query = "SELECT * FROM group10 WHERE id='$id'";
        $select = mysqli_query($connection,$query) or die(mysqli_connect_error());
        $user = $connection -> query($query);
        if($select){
            while($row = $user->fetch_assoc()){
            ?>                    
        <h2>Edit Information</h2>
        <form action="update10.php" method="post">
        <div class="info"> 
            <label for="firstname">Firstname</label>    
            <input type="hidden" name="id" id="id" placeholder="Id" value="<?php echo $row['id']?>">                           
        </div>
        <div class="info">
            <label for="firstname"></label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php echo $row['firstname']?>">                                    
        </div>
        <div class="info">
            <label for="firstname"></label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname" value="<?php echo $row['lastname']?>">      
        </div>
        <div class="info">
            <label for="firstname"></label>
            <input type="email" name="email" id="email" placeholder="E-mail" value="<?php echo $row['email']?>">           
        </div>
        <div class="info">
            <label for="firstname"></label>
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $row['username']?>">           
        </div>
        <div class="info">
            <label for="firstname"></label>
            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $row['password']?>">         
        </div>
            <button type="submit"><a href="view.php">Update</a></button>

    </form>
    <?php
        }
    }
    }
    ?>
</body>
</html>