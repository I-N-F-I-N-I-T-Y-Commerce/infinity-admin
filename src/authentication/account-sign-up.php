<?php 
include("../database/connection.php");

// Admin: adminakohehe
// Emai: infinity_yolo@gmail.com
// Password: yfaggin

/**
 * For Temporary creation of admin account
 */
function create_admin_account($conn, $admin, $email, $password) {

    $admin_name = $admin;
    $admin_email = $email;
    $admin_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (username, password, email) VALUES ('$admin_name','$admin_password','$admin_email')";

    if ($conn->query($sql) === TRUE) {
        echo "Succesfully created an admin account ✨";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

create_admin_account($conn, "adminakohehe", "infinity_yolo@gmail.com","yfaggin");
?>