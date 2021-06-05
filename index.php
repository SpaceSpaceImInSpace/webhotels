<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styletest.css">    
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelHolics - Welcome</title>
</head>
<body>
    <div class="header">
        <div class="headerMoto">
            <img src="images/Logo.png" alt="Logo"> 
            
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
        
    <div class="container"> 
        <div class="card"> <h2>Browse</h2>
        
            <div class="content">
                <h2> </h2>
                <h3> Browse</h3>
                <p> Find The Hotel Of Your Preference </p>
                <a href="browse.php"> Show Me</a>
            </div>
        </div>
        <div class="card1"> <h2>Login</h2>
            <div class="content">
                <h2> </h2>
                <h3> Login</h3>
                <p> Log Into Your HotelHolics Account To Make A Booking </p>
                <a href="login.php"> Login Now </a>
            </div>
        </div>    
        <div class="card2"> <h2>Register</h2>
            <div class="content">
                <h2>  </h2>
                <h3> Register</h3>
                <p> Make An Account On HotelHolics So You Can Promote Your Hotel </p>
                <a href="signup.php"> Register Now </a>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".card"),{
		max: 10,
		speed: 400,
        });
    </script>
    <script>
        VanillaTilt.init(document.querySelector(".card1"),{
		max: 10,
		speed: 400,
        });
    </script>
    <script>
        VanillaTilt.init(document.querySelector(".card2"),{
		max: 10,
		speed: 400,
        });
    </script>
    <script src="darkmode.js"></script>
</body>
</html>