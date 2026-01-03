<?php
include('includes/config.php');
if(isset($_GET['category_id'])) {
    $workshop_id = $_GET['category_id'];
    $select_workshop = "SELECT * FROM `workshops` WHERE `workshop_id` = '$workshop_id'";
    $run_workshop = mysqli_query($connect, $select_workshop);

$select_members="SELECT * FROM `users` WHERE `workshop_id` = '$workshop_id' && `status` = 1";
$run_members = mysqli_query($connect, $select_members);


$select_spill="SELECT * FROM `spells`  WHERE `workshop_id` = '$workshop_id'";
$run_spill = mysqli_query($connect, $select_spill);
}
?>
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
    <!-- <?php include 'includes/nav.php'; ?> -->

    <main>

        <!-- Description for workshop -->
         <?php foreach ($run_workshop as $workshops) { ?>
        <section class="workshopsHero">
        
            <div class="magicDivider">
                 <h2 class="heroTitle"><?php echo $workshops['workshop_name']; ?></h2>
            </div>
            
            <a href="workshops.php" class="backBtn">
                <i class="fas fa-arrow-left"></i> Back
            </a>

            <div class="workshopDescription">
                <div>
                    <img class="workshopImage" src="assets/img/<?php echo $workshops['workshop_image']; ?>" alt="Devolgy Image" loading="lazy">
                </div>

                <p class="workshopDetails"><?php echo $workshops['visson']; ?> </p>

            </div>
<?php } ?>
        </section>

        <!-- Workshop Journey Section -->
        <section class="workshopJourneySection">
            <div class="container">
                <h2 class="heroTitle">The Devology <span>Spell Journey</span></h2>
                
                <div class="journeyContainer">
                    <!-- Navigation Buttons (Left Side) -->
                    <div class="journeyNav">
                        <button class="journeyBtn active" data-content="opening">Opening Spell</button>
                        <button class="journeyBtn" data-content="core1">Core Magic</button>
                        <button class="journeyBtn" data-content="core2">Advanced Spells</button>
                        <button class="journeyBtn" data-content="core3">Final Quest</button>
                    </div>
                    
                    <!-- Paper Content Display (Right Side) -->
                    <div class="journeyPaper">
                        <img src="assets/img/paperWorkshop.png" alt="Workshop Paper" class="paperBg">
                        <div class="paperContent">
                            <!-- Opening Spell Content (Default) -->
                            <div class="contentBlock active" id="opening">
                                     <?php foreach ($run_spill as $workshops) { ?>
                                <h3>Opening Spell</h3>
                                <p><?php echo $workshops['opening_spell']; ?></p>
                            </div>
                           
                            
                            <!-- Core Magic Content -->
                            <div class="contentBlock" id="core1">
                                <h3>Core Magic</h3>
                                <p><?php echo $workshops['core_magic']; ?></p>
                            </div>
                            
                            <!-- Advanced Spells Content -->
                            <div class="contentBlock" id="core2">
                                <h3>Advanced Spells</h3>
                                <p><?php echo $workshops['advanced_spell']; ?></p>
                            </div>
                            
                            <!-- Final Quest Content -->
                            <div class="contentBlock" id="core3">
                                <h3>Final Quest</h3>
                                <p><?php echo $workshops['final_quest']; ?></p>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>
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
                        <?php foreach ($run_members as $members) { ?>
                        
                        <div class="flipCard card1">
                            <div class="frontCard">
                                <img src="assets/img/backCardCrew.png" alt="<?php echo $members['user_name']; ?>" loading="lazy">
                            </div>
                            <div class="backCard">
                                <img src="assets/img/anaaq/<?php echo $members['Image']; ?>" alt="<?php echo $members['user_name']; ?>" loading="lazy">
                            </div>
                            <br>
                            <!-- added by radwan to show the name -->
                            <div>
                                <p><?php echo $members['user_name']; ?></p>
                            </div>
                        </div>
                        <?php } ?>
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