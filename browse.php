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

    <div class="header">
        <div class="logo">
            <a href="index.php"> <img src="images/Logo.png" alt="Logo"> </a>
        </div>
            <div class="nav">
                <a href="browse.php" > BROWSE </a>
                <a href="login.php" > LOGIN </a>
                <a href="signup.php" > REGISTER </a>
            </div>
    </div>
    <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "webhotel";

    try {
        $connect = new PDO("mysql:host=$host;dbname=$database",$username,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Database Connection Done';

        $query = "SELECT * FROM hotels";

        $data = $connect->query($query);

        // echo ' <div class="hotels">
        //             <div>hotel_name</div>
        //             <div>county</div>
        //             <div>address</div>
        //             <div>phone</div>
        //             <div>pic</div>
        //         </div> ';

        foreach ($data as $row)
        {
            echo '<div class="hotels">
                        <div>'.$row["hotel_name"].'</div>
                        <div>'.$row["county"].'</div>
                        <div>'.$row["address"].'</div>
                        <div>'.$row["phone"].'</div>
                        <div>'.$row["pic"].'</div>
                    </div>';
        }

    }
    catch (PDOException $error)
    {
        $error ->getMessage();
    }
     ?>
    <!-- <h1>WELCOME</h1>
    <a href="logout.php?logout=true">Logout</a> -->

    <button id="dark-mode-toggle"class="dark-mode-toggle">
        <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
            <path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/>
        </svg>
    </button>

    <script src="darkmode.js"></script>

</body>
</html>
