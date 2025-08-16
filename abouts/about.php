<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Carpooling Website</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <div class="about-section">
        <h1>About Us</h1>
        <p class="about-description">
            Welcome to our carpooling platform! We aim to make commuting easier, more eco-friendly, and cost-effective for everyone.
            <span id="dots">...</span>
            <span id="more">
                Our service connects commuters with similar routes, allowing them to share rides and reduce traffic congestion. By carpooling, you're not only saving money but also contributing to a greener environment. Our mission is to provide a reliable, safe, and enjoyable experience for all our users.
                <br><br> 
                Whether you're a daily commuter or someone who occasionally travels, our platform is designed to suit your needs with easy ride matching and flexible scheduling options.
            </span>
        </p>
        <button id="readMoreBtn" onclick="toggleReadMore()">Read More</button>
    </div>

    <script>
        function toggleReadMore() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("readMoreBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>
</html>
