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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: login_index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" placeholder="Enter Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>

	<div id="imgcontainer">
        <img src="images/logo.jpg" alt="Avatar" class="avatar" style="width:40%;">
    </div>

	
</body>
</html>