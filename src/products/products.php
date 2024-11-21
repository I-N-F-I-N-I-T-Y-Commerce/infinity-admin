<?php 
include("../database/connection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageLink = $_POST['shoe-image-link'];
    // $shoeName = $_POST['shoe-name'];
    // $brand = $_POST['brand'];
    // $price = $_POST['price'];
    // $stock = $_POST['stock'];
    // $category = $_POST['category'];
    // $speciality = $_POST['speciality'];

    // Process the data or save it to a database
    echo "Image Link: $imageLink<br>";
    // echo "Shoe Name: $shoeName<br>";
    // echo "Brand: $brand<br>";
    // echo "Price: $price<br>";
    // echo "Stock: $stock<br>";
    // echo "Category: $category<br>";
    // echo "Speciality: $speciality<br>";
}

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
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./products.css">
    <title>INFINITY Products</title>
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
                    <div class="button-container on-page" id="products">
                        <img src="../assets/shoes.png" alt=""  id="products-btn">
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
                <!-- * Here -->
                <div class="box1">
                    <div class="product-status">
                        <div class="product-title">Product Status</div>
                        <div class="status">
                            Need to Restock<br>
                            <p>13 Products</p>
                        </div>
                        <div class="product-stocks">
                            Total Stock<br>
                            <p>278 Products</p>
                        </div>
                    </div>
    
                    <div class="product-history">
                        <div class="history-title">History</div>
                            <div class="history-wrapper">
                                Created at<br><br>
    
                                <div class="history-content">
                                    <div class="content details">
                                        <p>November 23, 2024</p><p>1 Products Added</p><p>28</p><img id="interacton" src="" alt="key image"><br><br>
                                    </div>
                                    <div class="content details">
                                        <p>November 23, 2024</p><p>1 Products Added</p><p>28</p><img id="interacton" src="" alt="key image">
                                    </div>
                                </div>
    
                                <!-- <img src="../assets/like.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
                <form action="" method="post">
                    <div class="grid-container">
                        <div class="tab-title" style="color: #FFFFFF;">Table Tabs</div>
                        <div class="interactions">
                            <a style="color: #6CFACD;">INSERT</a> || 
                            <a style="color: #F6BC72;">UPDATE</a> || 
                            <a style="color: #FF0000;">DELETE</a> a product to our Database as limited 5 <a>Rows</a>
                        </div>
                        <div class="box earnings">
                            <div class="box tab1"></div>
                            <div class="box tab2"></div>
                            <div class="box tab3"></div>
                            <div class="box tab4"></div>
                            <div class="box tab5"></div>
                        </div>
                        <div class="dashboard">
                            <div class="pannel left">
                                <label for="shoe-image-link" class="shoe-link-title">Shoe Image Link</label>
                                <p class="tag-title">Recommend link from Cloudinary.com</p>
                                <textarea name="shoe-image-link" id="shoe-image-link"></textarea>

                                <label for="shoe-details">Shoe Details</label>
                                <textarea name="shoe-details" id="shoe-details"></textarea>
                            </div>

                            <div class="pannel right">
                                <div class="wrapper-1">
                                    <div class="shoe-name">
                                        <label for="shoe-name-input">Shoe Name</label>
                                        <input type="text" name="shoe-name" id="shoe-name-input">
                                    </div>
                                    <div class="brand">
                                        <label for="brand-input">Brand</label>
                                        <input type="text" name="brand" id="brand-input">
                                    </div>
                                </div>

                                <div class="wrapper-2">
                                    <div class="speciality">
                                        <label for="speciality-dropdown">Speciality</label>
                                        <select id="speciality-dropdown" name="speciality">
                                            <option value="Limited">Limited</option>
                                            <option value="Sale">Sale</option>
                                            <option value="Standard">Standard</option>
                                        </select>
                                    </div>
                                    <div class="category">
                                        <label for="category-dropdown">Category</label>
                                        <select id="category-dropdown" name="category">
                                            <option value="Kids">Kids</option>
                                            <option value="Women">Women</option>
                                            <option value="Men">Men</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="wrapper-3">
                                    <div class="price">
                                        <label for="price-input">Price</label>
                                        <input type="text" name="price" id="price-input" placeholder="₱">
                                    </div>
                                    <div class="stock">
                                        <label for="stock-input">Stock</label>
                                        <input type="text" name="stock" id="stock-input">
                                    </div>
                                </div>

                                <div class="wrapper-4">
                                    <div class="exp-date">
                                        <label for="exp-date-input">Expiration Date</label>
                                        <input type="text" name="exp-date" id="exp-date-input">
                                    </div>
                                    <div class="txt">
                                        <textarea name="notes" id="txt"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs navigations">
                            <button type="button" class="sqr up">
                                <img src="../assets/button-up.png" alt="Up Button">
                            </button>
                            <div class="sqr tab-num">1R</div>
                            <button type="button" class="sqr down">
                                <img src="../assets/button-down.png" alt="Down Button">
                            </button>
                        </div>
                    </div>

                    <div class="button-submit">
                        <button type="submit" id="submit">SUBMIT</button>
                    </div>
                </form>


                
            </div>

    </main>


    <script src="./product.js"></script>
</body>
</html>