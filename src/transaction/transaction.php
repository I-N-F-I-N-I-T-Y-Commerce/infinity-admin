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
    <link rel="stylesheet" href="./template.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="transaction.css">

    <title>INFINITY Transaction</title>
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
                    <div class="button-container not-on-page" id="dashboard">
                        <img src="../assets/dashboard (1).png" alt=""  id="dashboard-btn">
                        <p>Dashboard</p>
                    </div>
                </a>
            
                <a href="../transaction/transaction.php">
                    <div class="button-container on-page" id="transaction">
                        <img src="../assets/transaction.png" alt=""  id="transaction-btn">
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
    <main>
        <!-- TODO: Put your elements inside of the  `main-container` -->
        <div class="main-container">
            <section class="overview-cards">
                <div class="card">
                    <h3>Earnings</h3>
                    <p>0.00</p>
                </div>
                <div class="card">
                    <h3>Pending</h3>
                    <p>0.00</p>
                </div>
                <div class="card">
                    <h3>On Cart</h3>
                    <p>0 items</p>
                </div>
                <div class="card">
                    <h3>Canceled Deliveries</h3>
                    <p>0</p>
                </div>
            </section>        
            <!-- TODO: transaction table -->
            <section class="transaction">
                <div class="transaction-header">
                    <p>Date</p>
                    <p>Username</p>
                    <p>Method</p>
                    <p>Payment</p>
                    <p>Status</p>
                    <p>Items</p>
                </div>
            
                <div class="transaction-row">
                    <div class="transaction-col"><img src="../assets/calendar 1.png">10 Sept 2024</div>
                    <div class="transaction-col"><img src="../assets/profile-user (1).png">halimaw</div>
                    <div class="transaction-col"><img src="../assets/money.png">Cash on Delivery</div>
                    <div class="transaction-col cuba"><img src="../assets/cuba.png">25,000</div>
                    <div class="transaction-col"><img src="../assets/check-box.png">Fulfilled</div>
                    <div class="transaction-col"><img src="../assets/shopping-bag.png">10</div>
                </div>
            
                <div class="transaction-row">
                    <div class="transaction-col"><img src="../assets/calendar 1.png">10 Sept 2024</div>
                    <div class="transaction-col"><img src="../assets/profile-user (1).png">halimaw</div>
                    <div class="transaction-col"><img src="../assets/money.png">Cash on Delivery</div>
                    <div class="transaction-col cuba"><img src="../assets/cuba.png">25,000</div>
                    <div class="transaction-col"><img src="../assets/check-box.png">Fulfilled</div>
                    <div class="transaction-col"><img src="../assets/shopping-bag.png">10</div>
                </div>

                <div class="transaction-row">
                    <div class="transaction-col"><img src="../assets/calendar 1.png">10 Sept 2024</div>
                    <div class="transaction-col"><img src="../assets/profile-user (1).png">halimaw</div>
                    <div class="transaction-col"><img src="../assets/money.png">Cash on Delivery</div>
                    <div class="transaction-col cuba"><img src="../assets/cuba.png">25,000</div>
                    <div class="transaction-col"><img src="../assets/check-box.png">Fulfilled</div>
                    <div class="transaction-col"><img src="../assets/shopping-bag.png">10</div>
                </div>

                <div class="transaction-row">
                    <div class="transaction-col"><img src="../assets/calendar 1.png">10 Sept 2024</div>
                    <div class="transaction-col"><img src="../assets/profile-user (1).png">halimaw</div>
                    <div class="transaction-col"><img src="../assets/money.png">Cash on Delivery</div>
                    <div class="transaction-col cuba" ><img src="../assets/cuba.png">25,000</div>
                    <div class="transaction-col"><img src="../assets/check-box.png">Fulfilled</div>
                    <div class="transaction-col"><img src="../assets/shopping-bag.png">10</div>
                </div>

                <div class="transaction-row">
                    <div class="transaction-col"><img src="../assets/calendar 1.png">10 Sept 2024</div>
                    <div class="transaction-col"><img src="../assets/profile-user (1).png">halimaw</div>
                    <div class="transaction-col"><img src="../assets/money.png">Cash on Delivery</div>
                    <div class="transaction-col cuba"><img src="../assets/cuba.png">25,000</div>
                    <div class="transaction-col"><img src="../assets/check-box.png">Fulfilled</div>
                    <div class="transaction-col"><img src="../assets/shopping-bag.png">10</div>
                </div>
            
                <!-- Repeat for other transactions -->
            </section>
            <section class="navbar pagination">
                <div class="search-bar">
                    <form action="your_search_endpoint.php" method="GET"> <!-- Change the action to your search handling URL -->
                        <div class="image-container">
                            <button type="submit" id="search-btn" style="background: none; border: none;"> <!-- Change to button for better semantics -->
                                <img src="../assets/loupe 1.png">
                            </button>
                        </div>
                        <input class="inp-search" type="text" name="search" placeholder="             Search" required> <!-- Add name attribute for form submission -->
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>