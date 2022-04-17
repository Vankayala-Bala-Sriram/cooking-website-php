<!-- index page after login -->
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooking School - Find Recipe </title>
    <link rel="icon" href="images/logo.jpg" type="icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="Index.php">
    <link rel="php" href="recipe page.php">
    <!-- <link rel="html" href="signup.php">
    <link rel="html" href="login.php"> -->
    <link rel="html" href="login_index.php">
    <link rel="html" href="logout.php">

</head>

<body>

    <div class="container">

        <header>

            <img src="images/logo.jpg" alt="logo" width="150px" height="100px">

            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="login_Index.php">home</a>
                <a href="recipe page.php">Recipes</a>
                <!-- <a href="login.php">login</a>
                <a href="signup.php">Sign in</a> -->
                <a href="#footer">contact</a>
                <a href="#footer">About us</a>
				
				<a href="logout.php">Hello, <?php echo $user_data['user_name']; ?></a>

            </nav>

        </header>

        <!-- home section  -->

        <section class="home">

            <div class="content">
                <h3>Learn Cooking</h3>
                <p>Make the vegetables look colorful, make the dishes tasteful.<br>Make your health delightful.</p>
                <a href="#" class="btn">Learn more</a>
            </div>

            <div class="image">
                <img src="images/fresh-vegetable-greek-salad-close-up_2829-19508.jpg" alt="" width="100px" height="500px">
            </div>

        </section>


        <!-- footer section  -->

        <section id="footer">

            <div class="box-container">

                <div class="box">
                    <h3>about us</h3>
                    <p>We make cooking easier for you</p>
                    <p>Delicious food recipes helps you in cooking</p>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="login_Index.php">Home</a>
                    <!-- <a href="login.php">Login</a> -->
                    <a href="recipe page.php">Recipes</a>

                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">linkedin</a>
                </div>

                <div class="box">
                    <h3>contact us</h3>
                    <p> <i class="fas fa-phone"></i> +91 1234567890 </p>
                    <p> <i class="fas fa-envelope"></i> Recipepage@gmail.com </p>
                    <p> <i class="fas fa-map-marker-alt"></i> Andhra Pradesh, India - 540012 </p>
                </div>

            </div>



        </section>

    </div>
    <!-- custom js file link -->
    <script src="script.js"></script>


</body>

</html>