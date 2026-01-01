<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolgy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Irish+Grover&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="icon" href="assets/icons/logoSCCI.png" type="image/x-icon">
    <!-- Font Awesome (Standard CDN) -->
    <link rel="stylesheet" href="assets/css/all.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/root.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/workshops.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/workshopsDetails.css?v=<?php echo time(); ?>">
    <!-- Custom Page Styles -->

    <!-- AOS library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <?php include 'includes/nav.php'; ?>

    <main>

        <!-- Description for workshop -->
        <section class="workshopsHero">
        
            <div class="magicDivider">
                 <h2 class="heroTitle">devolgy</h2>
            </div>

            <div class="workshopDescription">
                <div>
                    <img class="workshopImage" src="assets/img/paperHome.png" alt="Devolgy Image" loading="lazy">
                </div>

                <p class="workshopDetails"> Devology – Web Development MagicDevology is where code transforms into real magic  In this section, 
                    participants learn how to craft powerful web “spells” using modern web development tools to build interactive, 
                    fast, and scalable websites.Here, every line of code has a purpose, 
                    every bug is a curse to be broken, and every project is a magical artifact added to your skill set.
                </p>

            </div>

        </section>


        <!--  -->


        <!-- members in this workshop -->
         
        <section class="workshopsSection">

            <div class="MemberCardTitle">
                <h2 class="heroTitle">Members</h2>
                <hr>
            </div>

            <div class="container">
                <div class="workshopDetailsGrid">

                    <!--  member 1  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card1">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="Yasmin" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!--  member 2  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card2">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="Omar" loading="lazy">
                            </div>
                        </div>
                    </div>


                    <!--  member 3  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card3">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="Awad" loading="lazy">
                            </div>
                        </div>
                    </div>


                    <!--  member 4  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card4">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="techSolveCard" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!--  member 5  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card5">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="techSolveCard" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!--  member 6  -->

                    <div class="cardsContainer" data-aos="flip">
                        <div class="flipCard card6">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.jpg" alt="TechSolve Workshop" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/workshopCard.jpg" alt="techSolveCard" loading="lazy">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
            
    </main>









    <!-- Scripts -->
    <script src="assets/js/all.min.js" defer></script>
    <script src="assets/js/workshops.js" defer></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({

            once: true,

            offset: 100,

            easing: 'ease-in-out',
        });
    </script>
</body>
</html>