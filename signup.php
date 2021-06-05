<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styletest.css">    
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelHolics - Sign Up</title>
</head>
<body>
    <div class="header">
    <div class="logo"> <a href="index.php"> <img src="images/Logo.png" alt="Logo"> </a> </div> 
        <div class="nav">
            
            <a href="browse.php" > BROWSE </a> 
            <a href="login.php" > LOGIN </a>
            <a href="signup.php" > REGISTER </a>
            
        </div>          
        </div>
    </div>
    <button 
        id="dark-mode-toggle" 
        class="dark-mode-toggle"
    >
            <svg 
            width="100%" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 496 496"
            >
                <path 
                fill="currentColor" 
                d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" 
                transform="translate(-8 -8)"/>
            </svg>
    </button>
    <div class="signup">
        
            <h2> Sign Up </h2>
            
                <form action="signup.inc.php" method="post"> 
                    <input type="text" name="name" placeholder="Full Name..."><br />
                    <input type="text" name="email" placeholder="Email..."><br />
                    <input type="text" name="uid" placeholder="Username..."><br />
                    <input type="password" name="pwd" placeholder="Password..."><br />
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br />
                    <button type="submit" name="submit"> Sign Up </button>
                </form>

                <p> Do you already have an account? <a href="login.php">Sign In</a></p>
                
            
        
   
    </div>
    <script src="darkmode.js"></script>
</body>
</html>