<?php
session_start();
include("connect.php"); // Ensure this connection is working

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email']; // Retrieve email from session

    // Perform a SQL query to fetch user information based on the email
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");

    // Fetch the result
    if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
    } else {
        // Handle case where no user is found (optional)
        $firstName = 'Guest';
        $lastName = '';
    }
} else {
    // Handle if the user is not logged in
    $firstName = 'Guest';
    $lastName = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpooling Homepage</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <h1>Carpool</h1>
        </div>
        
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="abouts/about.php"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="services.php"><i class="fas fa-concierge-bell"></i> Our Services</a></li>
                <li><a href="our vehicles/vehicles.php"><i class="fas fa-car"></i> Our Vehicles</a></li>
                <li><a href="contacts/contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li> <!-- Logout link -->
            </ul>
        </nav>
    </div>
</header>

<div class="container">
    <p class="welcome">
        Welcome, 
        <?php 
        // Display the user's first and last name
        echo  $lastName;
        ?>!
    </p>
    <p class="message">Ready to share your ride and reduce solo commuting?</p>
    <p class="sub-message">Explore available carpool options or offer a ride for others!</p>

    <!-- Additional Navigation Links -->
    <div class="auth-buttons">
        <div class="center-buttons"> <!-- New wrapper div for centering -->
            <a class="btn special-btn" href="rides/ride.html">Ride With Carpool</a>
            <a class="btn special-btn" href="drivers/driver.php">Become a Driver</a>
        </div>
    </div>
</div>
</body>
</html>
