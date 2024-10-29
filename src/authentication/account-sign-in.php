<?php
include("../database/connection.php");

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_name = $_POST["adminname"];
    $admin_email = $_POST["email"];
    $password = $_POST["password"];


    $sql = $conn->prepare("SELECT admin_id, username, password, email FROM admin WHERE username = ?");
    $sql->bind_param("s", $admin_name);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0 ) {

        $row = $result->fetch_assoc();
        $finded_admin = $row["username"];
        $finded_email = $row["email"];
        $finded_password = $row["password"];
        $finded_admin_id = $row["admin_id"];

        if (password_verify($password, $finded_password)) {
            $_SESSION["admin_username"] = $finded_admin;
            $_SESSION["admin_email"] = $finded_email;
            $_SESSION["admin_id"] = $finded_admin_id;

            header("Location: ../dashboard/dashboard.php");
            exit();
        }
    }

    $sql->close();
    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY Login Admin</title>
    <link rel="icon" href="../assets/icon_admin_crown_0006_T1F_icon.ico" sizes="16x16" type="image/x-icon">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./account-sign-in.css">
</head>
<body>
    <div class="sign-in-form-container">
        <div class="form-container sign-in">
            <label for="notify-message" id="notify-adminname"></label><br>
            <label for="notify-message" id="notify-password"></label><br>
            <label for="notify-message" id="notify-email"></label><br>

            <h1>Administration Page</h1>
            <h3>Welcome to <span class="highlight1">INFINITY</span></h3>
    

            <!-- * Put the php file here in ` action ` attribute -->
            <form action="" onsubmit="return checkInputCredentials()" name="sign-in-form" method="POST">
                <label for="adminname">Admin</label><br>
                <input type="text"  class="correct" autocomplete="adminname" name="adminname" id="input-adminname"><br>
               
                <label for="email" id="email">Email Address</label><br>
                <input type="text" class="correct" name="email" id="input-email">

                <label for="password" id="password">Password</label><br>
                <input type="password" class="correct" name="password" autocomplete="current-password" id="input-password"><br>
                <img src="../assets/ICON-HIDE-VIEW-0004.png" id="hide-password" alt="">
           
                <hr>
                <input type="submit" value="Log In">
            </form>
            <!-- <a href="../dashboard/dashboard.html"><input type="submit" value="Log In"></a> -->
            <!-- * ^ ^ ^form on up ^ ^ ^ * -->


            <img src="../assets/ICON-ADMIN-CROWN-0006.png" id="crowny" alt="">

            <p id="help-desk"> Company Administration Page, if you need any help, you can contact our <span id="help-desk-highlight">Help Desk</span>✨. </p>
        </div>
        <div class="image-banner">
            <img src="../assets/IMG-BANNER-ADMIN-SIGNIN-0002.jpg" alt="">
            <div class="logo-name-container">
                <h1>INFINITY</h1>
                <div class="third-circle"></div>
            </div>
            <div class="fourth-circle"></div>
            <div class="fifth-circle"></div>
            <div class="crown-container">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <img src="../assets/ICON-ADMIN-CROWN-0005.png" alt="">
            </div>
        </div>

       
    </div>

    <script src="./account-sign-in.js"></script>
</body>
</html>