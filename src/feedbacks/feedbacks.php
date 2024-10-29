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
    <link rel="stylesheet" href="./feedbacks.css">
    <link rel="stylesheet" href="../global.css">
    <title>INFINITY Feedbacks</title>
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
                    <div class="button-container bot-on-page" id="dashboard">
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
                    <div class="button-container on-page" id="feedbacks">
                        <img src="../assets/review.png" alt=""  id="feedbacks-btn">
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
            <!-- * Here -->\
            <div class="box1">
                <div class="reviews">
                    <div class="review-title">Reviews <img id="interacton" src="../assets/interactions.png" alt=""> </div>
                    <div class="on-site-ratings">
                        On Site Rating’s<br>
                        <p>56,203</p>
                    </div>
                    <div class="products-ratings">
                        Product Rating’s<br>
                        <p>594, 206</p>
                    </div>
                </div>

                <div class="good-reviews">
                    Product Good Reviews
                    <div class="good-reviews-count">
                        <p>543, 909</p>
                        <img src="../assets/like.png" alt="">
                    </div>
                </div>

                <div class="bad-reviews">
                    Product Bad Reviews
                    <div class="bad-reviews-count">
                        <p>50, 297</p>
                        <img src="../assets/dislike.png" alt="">
                    </div>
                </div>
            </div>


            <div class="box2">People's Review<br>
                <div class="peoples-review">
                    
                    <br>
                    <span>The People who reviews about our site</span>

                    <div class="dropdown">
                        <label for="sortReviews">Sort By:</label>
                        <select id="sortReviews">
                            <option value="good">Good Reviews</option>
                            <option value="bad">Bad Reviews</option>
                        </select>
                    </div>
                </div>
                <div class="good-review-container">

                    <div class="container1">

                        <a class="customerReview" href="#"> 
                            <div class="customer-review1"> 
                                <div class="customer-profile">
                                    <a id="userProfile" href="#"> <img id="user-profile" src="../assets/user.png"></a> 
                                    <a id="userName" href="#"> <p>Charles Babbage</p> </a> 
                                    <div class="star-rating">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/no-star.png" alt="">
                                    </div>
                                </div>
                                <p>"Impressive craftsmanship, though I must say, I was hoping for some more<br>
                                    mechanical parts. Perhaps in the next iteration? Either way, these shoes
                                    compute perfectly for long walks of contemplation."</p>
                            </div> 
                        </a>
                        

                        <div class="owner-reply">

                            <div class="admin-profile">
                                <a id="userProfileAdmin" href="#"> <img id="user-profile-admin" src="../assets/logo.svg"></a> 
                                <a id="userAdmin" href="#"> <p>I N F I N I T Y</p> </a> 
                                <img id="adminLogo" src="../assets/shield.png" alt="">
                            </div>
                            <p>Wassup Charles Babbage!, Thank you for your kind Review!! ✨💕</p>

                        </div>

                    </div>
                    <div class="container2">
                        
                        <a id="customerReview" href="#"> 
                            <div class="customer-review2"> 
                                <div class="customer-profile">
                                    <a id="userProfile" href="#"> <img id="user-profile" src="../assets/user.png"></a> 
                                    <a id="userName" href="#"> <p>SoleSurvivor84</p> </a> 
                                    <div class="star-rating">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                    </div>
                                </div>
                                <p>“ Trip kolang mag review “</p>
                            </div> 
                        </a>

                        <div class="customer-review-btn">
                            <a href="#"> <img id="remove_icon" src="../assets/remove.png" alt=""> </a>
                            <a href="#"> <img id="message_icon" src="../assets/speech-bubble.png" alt=""> </a>
                        </div>
                    </div>

                    <div class="container3">
                        
                        <a id="customerReview" href="#"> 
                            <div class="customer-review3"> 
                                <div class="customer-profile">
                                    <a id="userProfile" href="#"> <img id="user-profile" src="../assets/user.png"></a> 
                                    <a id="userName" href="#"> <p>Nathaiel Fabiano</p> </a>
                                    <div class="star-rating">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/no-star.png" alt="">
                                        <img id="ratings" src="../assets/no-star.png" alt="">
                                    </div>
                                </div>
                                <p>“ Bat mga walang sintas na oorder kong mga sapatos ?? “</p>
                            </div> 
                        </a>

                    </div>

                    <div class="container4">
                        
                        <a id="customerReview" href="#"> 
                            <div class="customer-review4"> 
                                <div class="customer-profile">
                                    <a id="userProfile" href="#"> <img id="user-profile" src="../assets/user.png"></a> 
                                    <a id="userName" href="#"> <p>Ditty Idk</p> </a>
                                    <div class="star-rating">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                        <img id="ratings" src="../assets/star.png" alt="">
                                    </div>
                                </div>
                                <p>“ I bought these shoes hoping they’d help me run faster… well, I still run at the <br>
                                    speed of ‘late to work,’ but at least I look good while doing it! Not exactly <br>
                                    superpowers, but I’ll take it. “</p>
                            </div> 
                        </a>

                    </div>

                </div>

            </div>

            <div class="search-bar-container">

                <div class="search-bar">
                    <form action="your_search_endpoint.php" method="GET"> <!-- Change the action to your search handling URL -->
                        <div class="image-container">
                            <button type="submit" id="search-btn" style="background: none; border: none;"> <!-- Change to button for better semantics -->
                                <img src="../assets/loupe 1.png">
                            </button>
                        </div>
                        <input class="inp-search" type="text" name="search" placeholder="Search" required> <!-- Add name attribute for form submission -->
                    </form>
                </div>

            </div>



        </div>
        
    </main>
</body>
</html>