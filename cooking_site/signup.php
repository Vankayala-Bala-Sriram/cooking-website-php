<?php 
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login_index.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body bgcolor="black">

<style type="text/css">
    
    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        background-color: #04AA6D;
    color: white;
    padding: 14px 130px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
    }

    #box{

        background-color: grey;
        position: absolute;
    top: 2.5cm;
    right: 150px;
    margin: 20px;
    max-width: 500px;
    padding: 40px;
    }

    #imgcontainer {
    text-align: left;
    margin-top: 1.5cm;
    margin-left: 2.5cm;
    }

    img.avatar {
    width: 30%;
    border-radius: 60%;
    border: 3px solid black;
    }

    </style>

    <div id="box">
        
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

            <input id="text" type="text" placeholder="Enter Username" name="user_name"><br><br>
            <input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>

            Already have account <a href="login.php">Click to Login</a><br><br>
        </form>
    </div>

    <div id="imgcontainer">
        <img src="images/logo.jpg" alt="Avatar" class="avatar" style="width:40%;">
    </div>

    
</body>
</html>

