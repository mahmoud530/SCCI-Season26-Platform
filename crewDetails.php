<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>crewDetails</title>
    <link rel="stylesheet" href="./assets/css/root.css" />
    <link rel="stylesheet" href="./assets/css/crewDetails.css" />
</head>

<body>

    <section class="sectionBlock container">
        
        <div class="titleWrapper" data-aos="fade-down">
            <h1 class="mainTitle">
                <span class="textPrimary">DD</span> 
                <span class="textDark">Head</span>
            </h1>
            <div class="sectionDivider"></div>
        </div>

        <div class="headLayout">
            
            <div class="flipCard headCard" data-aos="fade-right">
                <div class="flipInner">
                    <div class="flipSide flipFront">
                        <img src="./assets/img/backCardCrew.png" loading="lazy" alt="Head" />
                    </div>
                    <div class="flipSide flipBack">
                        <img src="./assets/img/crewFrontCard.png" loading="lazy" alt="Details" />
                    </div>
                </div>
            </div>

            <div class="paperScroll" data-aos="fade-left">
                <div class="paperContent">
                    <h2 class="paperTitle">Job Description</h2>
                    <p class="paperText">
                        Developing Members In Negotiation, Persuasive And Communication Skills. 
                        Helping Members To Discover Their Own Skills And What Can They Do. 
                        Responsible For The Budget And The Cash Inflow And Outflow. 
                        Making CR Outing For All Members To Create Connections. 
                        After Each Phase Creating One To One Meeting For Each Member.
                    </p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="sectionBlock container">
        
        <div class="titleWrapper" data-aos="fade-up">
            <h1 class="mainTitle">
                <span class="textPrimary">DD</span> 
                <span class="textDark">Members</span>
            </h1>
            <div class="sectionDivider"></div>
        </div>

        <div class="membersGrid">
            
            <?php
            // Generate dummy members for demonstration
            // In a real app, this would come from a database or array
            $memberCount = 9;
            $baseDelay = 100;
            
            for ($i = 0; $i < $memberCount; $i++) {
                // Stagger delay: increase by 100ms for each card
                $delay = $baseDelay + ($i * 100);
                
                // Reset delay if it gets too long (optional, purely for UX preference)
                // if ($i % 3 == 0) $delay = $baseDelay; 
                // But user asked for one after another, so continuous increment is better or per-row.
                // To keep it simple and nice:
                $delay = ($i % 4) * 150; // Stagger per row (assuming 3-4 cols)
                
                echo '
                <div class="flipCard memberCard" data-aos="fade-up" data-aos-delay="' . $delay . '">
                    <div class="flipInner">
                        <div class="flipSide flipFront">
                            <img src="./assets/img/backCardCrew.png" loading="lazy" />
                        </div>
                        <div class="flipSide flipBack">
                            <img src="./assets/img/crewFrontCard.png" loading="lazy" />
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <!-- Scroll Top Button -->
    <div class="scrollTopBtn" id="scrollTopBtn">
        &#8593;
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/crew.js"></script>
</body>
</html>