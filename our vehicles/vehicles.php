<?php
// Array of vehicles
$vehicles = [
    [
        "title" => "Toyota Prius",
        "description" => "A hybrid car known for its fuel efficiency and eco-friendliness.",
        "image" => "images/toyota_prius.jpg" // Replace with your actual image path
    ],
    [
        "title" => "Tesla Model 3",
        "description" => "An electric vehicle with autopilot features and zero emissions.",
        "image" => "images/tesla_model3.jpg" // Replace with your actual image path
    ],
    [
        "title" => "Honda Civic",
        "description" => "A reliable sedan, popular for its comfort and fuel economy.",
        "image" => "images/honda_civic.jpg" // Replace with your actual image path
    ],
    [
        "title" => "Ford F-150",
        "description" => "A powerful pickup truck for large groups and luggage.",
        "image" => "images/ford_f150.jpg" // Replace with your actual image path
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vehicles - Carpooling</title>
    <link rel="stylesheet" href="vehicles.css"> <!-- Link to your CSS file -->
</head>
<body>

<h1>Our Vehicles</h1>
<div class="vehicles-container">
    <?php foreach ($vehicles as $vehicle): ?>
        <div class="vehicle-card">
            <img src="<?php echo $vehicle['image']; ?>" alt="<?php echo $vehicle['title']; ?>">
            <h2><?php echo $vehicle['title']; ?></h2>
            <p><?php echo $vehicle['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
