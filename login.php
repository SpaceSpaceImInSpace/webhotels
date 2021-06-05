<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:browse.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}

		}
		else
		{
			$errors[] = "Email address is not valid";
		}

	}
	else
	{
		$errors[] = "Email and Password are required";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styletest.css">
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelHolics - Sign In</title>
</head>
<body>
    <!-- Header  -->
    <div class="header">
        <div class="logo"> <a href="index.php"> <img src="images/Logo.png" alt="Logo"> </a> </div>
            <div class="nav">
                <a href="browse.php" > BROWSE </a>
                <a href="login.php" > LOGIN </a>
                <a href="signup.php" > REGISTER </a>
            </div>
    </div>

    <!-- Login Form -->
    <div class="signup">
        <h2> Sign In </h2>
        <?php
            if(isset($errors) && count($errors) > 0)
            {
                foreach($errors as $error_msg)
                {
                    echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                }
            }
        ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="text" name="email" placeholder="Enter Email">
                <input type="password" name="password" placeholder="Enter Password">
                <button type="submit" name="submit"> Log In </button>
            </form>
                <p>You don't have an account?<a href="login.php">Register Now!</a></p>
    </div>
    <!-- Dark Mode -->
    <button id="dark-mode-toggle" class="dark-mode-toggle">
        <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
            <path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/>
        </svg>
    </button>

    <script src="darkmode.js"></script>
</body>
</html>
