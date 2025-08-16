<?php
// Array of services
$services = [
    [
        "title" => "Carpool Matching",
        "description" => "We connect commuters with similar routes to reduce travel costs and promote sustainable transportation.",
        "image" => "service1.png" // Make sure to replace with your actual image path
    ],
    [
        "title" => "Ride Scheduling",
        "description" => "Schedule your rides in advance and never worry about last-minute arrangements.",
        "image" => "service2.jpeg" // Replace with your actual image path
    ],
    [
        "title" => "Incentives for Carpooling",
        "description" => "Get rewards like preferential parking and toll discounts when you share rides with others.",
        "image" => "service3.png" // Replace with your actual image path
    ],
    [
        "title" => "Real-Time Updates",
        "description" => "Receive notifications about your ride, including real-time traffic updates and changes.",
        "image" => "service4.webp" // Replace with your actual image path
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Carpooling</title>
    <link rel="stylesheet" href="services.css"> <!-- Link to your CSS file -->
</head>
<body>

<h1>Our Services</h1>
<div class="services-container">
    <?php foreach ($services as $service): ?>
        <div class="service-card">
            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
            <h2><?php echo $service['title']; ?></h2>
            <p><?php echo $service['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
