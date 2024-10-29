<?php 
include("../database/connection.php");
session_start();

if (isset($_SESSION["admin_id"])) {
    $account_id = $_SESSION["admin_id"];
    $username = $_SESSION["admin_username"];

    echo "$account_id Successfuly";
} else {
    header("Location: ../private/private.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../navigator/navigation.css">
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href="../global.css">
    <title>INFINITY Dashboard</title>
    <link rel="icon" href="../assets/icon_admin_crown_0006_T1F_icon.ico" sizes="16x16" type="image/x-icon">
</head>
<body>
     <!-- * navigation -->
     <div class="main-container">
        <nav class="navigation-container">
            <header class="header">
                <div class="branding">
                    <div class="logo-container">
                        <img class="logo-icon" loading="lazy" alt="" src="../assets/logo.svg" />
                    </div>
                    <b class="tag-name">I N F I N I T Y</b>
                </div>
                <a href="../authentication/logout.php" class="sign-up">Administration Page</a>
            </header>
    
            <nav class="navigator">
                <!-- TODO: Change for administration suited navigator -->
                <a href="../dashboard/dashboard.php">
                    <div class="button-container on-page" id="dashboard">
                        <img src="../assets/dashboard.png" alt=""  id="dashboard-btn">
                        <p>Dashboard</p>
                    </div>
                </a>
            
                <a href="../transaction/transaction.php">
                    <div class="button-container not-on-page" id="transaction">
                        <img src="../assets/transaction (1).png" alt=""  id="transaction-btn">
                        <p>Transaction</p>
                    </div>
                </a>

                <a href="../feedbacks/feedbacks.php">
                    <div class="button-container not-on-page" id="feedbacks">
                        <img src="../assets/review (1).png" alt=""  id="feedbacks-btn">
                        <p>Feedbacks</p>
                    </div>
                </a>
               
                <a href="../products/products.php">
                    <div class="button-container not-on-page" id="products">
                        <img src="../assets/shoes (1).png" alt=""  id="products-btn">
                        <p>Products</p>
                    </div>
                </a>
               
            </nav>
        </nav>
        <script src="../navigator/navigator.js"></script>
    </div>
    <!-- * navigation -->

    <!-- * main -->
    <main>
        <!-- TODO: Put your elements inside of the  `main-container` -->
        <div class="main-container">

            <div class="grid-container">
                <div class="box earnings"><a href="../transaction/transaction.html">Earnings</a></div>
                <div class="box products"><a href="../products/products.html">Products</a></div>
                <div class="box dashboard">Dashboard</div>
                <div class="box feedback-status"><a href="../feedbacks/feedbacks.html">Feedbacks Status</a></div>
                <div class="box activity-log-status">Activity log Status</div>
              </div>
        </div>
    </main>
    <!-- * main -->

</body>
</html>