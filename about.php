<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCCI - About</title>

    <!-- Existing styles -->
    <link rel="stylesheet" href="./assets/css/root.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
</head>
<body>

<section class="aboutSection">
    <div class="aboutComponents">

        <img
            src="./assets/img/aboutPaper.png"
            alt="About Background Image"
            loading="lazy"
            id="aboutBackground"
        >

        <div class="aboutContent">

            <div class="titleWrapper">
                <hr class="titleHr">
                <h3 class="aboutTitle text-primary">WHO ARE WE?</h3>
                <hr class="titleHr">
            </div>

            <p class="text-secondary aboutParagraph">
                SCCI is an abbreviation for Student's Conference for Communication and Information,
                which helps you in bringing the gap between the technical life and the practical life
                in the marketplace. You can know more about our organization right here.
            </p>

            <div class="titleWrapper2">
                <hr class="titleHr">
                <h3 class="aboutTitle text-primary">WHAT MAKES US DIFFERENT?</h3>
                <hr class="titleHr">
            </div>

            <p class="text-primary aboutParagraph2">
                ◈ Growth tracking: <span class="spamText text-secondary">Participants gain hands-on experience through real activities.</span><br>
                ◈ Season structure: <span class="spamText text-secondary">Participants collaborate in small groups to solve challenges.</span><br>
                ◈ Practical learning: <span class="spamText text-secondary">The program is divided into focused, time-limited sessions.</span><br>
                ◈ Team-based system: <span class="spamText text-secondary">Progress is monitored to highlight improvement over time.</span><br>
            </p>

        </div>
    </div>
</section>

<!-- CREW CARDS SLIDER -->
<section>
    <div class="sliderWrapper">
        <button class="arrow left" id="prevBtn">&#10094;</button>

        <div class="cardStack">
            <img src="./assets/img/workshopCard1.png" class="card">
            <img src="./assets/img/workshopCard2.png" class="card">
            <img src="./assets/img/workshopCard3.png" class="card">
        </div>

        <button class="arrow right" id="nextBtn">&#10095;</button>
    </div>
</section>



<script src="./assets/js/about.js"></script>

</body>
</html>
