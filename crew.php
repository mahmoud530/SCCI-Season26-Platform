<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Board Page</title>
    <link rel="stylesheet" href="./assets/css/root.css" />
    <link rel="stylesheet" href="./assets/css/crew.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
</head>

<body >

    <section class="sectionBlock container">
        <h1 class="mainTitle" data-aos="zoom-in">President</h1>
        <hr>
         <div class="section-divider"></div>
        <div class="presidentGrid">
            <div class="flipCard" data-aos="fade-right">
                <div class="flipInner">
                    <div class="flipSide flipFront">
                        <img src="./assets/img/backCardCrew.png" alt="President" />
                    </div>
                    <div class="flipSide flipBack">
                        <img src="./assets/img/crewFrontCard.png" alt="Details" />
                    </div>
                </div>
            </div>

            <div class="paperScroll" data-aos="fade-left">
                <div class="paperContent">
                    <h3 class="paperTitle">Job Description</h3>
                    <p class=" text-primary">
                        Developing Members In Negotiation, Persuasive And Communication Skills.
                        Helping Members To Discover Their Own Skills And What Can They Do.
                        Responsible For The Budget And The Cash Inflow And Outflow.
                        Making CR Outing For All Members To Create Connections Between CR Members.
                        After Each Phase Creating One To One Meeting For Each Member To Evaluate The Members And
                        Incentivize Them.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sectionBlock container">
        <h2 class="section-title text-primary" data-aos="fade-up">High Board</h2>
        <hr>

        <div class="cards-grid">

            <div class="boardItem" data-aos="fade-up" data-aos-delay="400" onclick="openModal(this)">
                <h3 class="roleTitle" style="cursor: pointer;">Technical</h3>
                <div class="flipCard">
                    <span class="sideLabel left">IT DD</span>
                    <span class="sideLabel right purpleText">MP SMM</span>
                    <div class="flipInner">
                        <div class="flipSide flipFront">
                            <img src="./assets/img/backCardCrew.png" />
                        </div>
                        <div class="flipSide flipBack">
                            <img src="./assets/img/crewFrontCard.png" />
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-sm">Discover More</a>

                <!-- Sub Cards Container -->
                <div class="sub-crew-grid hidden-grid">
                    <!-- 1. IT -->
                    <div class="subCard">
                       <span class="subRoleTitle">IT</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 2. DD -->
                    <div class="subCard">
                       <span class="subRoleTitle">DD</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 3. MP -->
                    <div class="subCard">
                       <span class="subRoleTitle">MP</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 4. SMM -->
                    <div class="subCard">
                       <span class="subRoleTitle">SMM</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="boardItem" data-aos="fade-up" data-aos-delay="200">
                <h3 class="roleTitle">Academic Committee</h3>
                <div class="flipCard">
                    <div class="flipInner">
                        <div class="flipSide flipFront">
                            <img src="./assets/img/backCardCrew.png" alt="Academic" />
                        </div>
                        <div class="flipSide flipBack">
                            <img src="./assets/img/crewFrontCard.png" />
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-sm">Know Us !</a>
            </div>

            <div class="boardItem" data-aos="fade-up" data-aos-delay="300">
                <h3 class="roleTitle">Human Resource</h3>
                <div class="flipCard">
                    <div class="flipInner">
                        <div class="flipSide flipFront">
                            <img src="./assets/img/backCardCrew.png" alt="HR" />
                        </div>
                        <div class="flipSide flipBack">
                            <img src="./assets/img/crewFrontCard.png" />
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-sm">Know Us !</a>
            </div>
            <div class="boardItem" data-aos="fade-up" data-aos-delay="400" onclick="openModal(this)">
                <h3 class="roleTitle" style="cursor: pointer;">External Relations</h3>
                <div class="flipCard">
                    <span class="sideLabel left">BD L</span>
                    <span class="sideLabel right purpleText">CR PR</span>
                    <div class="flipInner">
                        <div class="flipSide flipFront">
                            <img src="./assets/img/backCardCrew.png" />
                        </div>
                        <div class="flipSide flipBack">
                            <img src="./assets/img/crewFrontCard.png" />
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-sm">Discover More</a>

                <!-- Sub Cards Container -->
                <div class="sub-crew-grid hidden-grid">
                    <!-- 1. BD -->
                    <div class="subCard">
                       <span class="subRoleTitle">BD</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 2. L -->
                    <div class="subCard">
                       <span class="subRoleTitle">L</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 3. CR -->
                    <div class="subCard">
                       <span class="subRoleTitle">CR</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                    <!-- 4. PR -->
                    <div class="subCard">
                       <span class="subRoleTitle">PR</span>
                       <span class="headName">Name</span>
                       <div class="flipCard sm-card">
                           <div class="flipInner">
                               <div class="flipSide flipFront"><img src="./assets/img/backCardCrew.png"></div>
                               <div class="flipSide flipBack"><img src="./assets/img/crewFrontCard.png"></div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overlay for Blur Effect -->
    <div class="page-overlay" onclick="closeModal()"></div>

    <!-- Modal Container -->
    <div id="crew-modal" class="crew-modal">
        <div class="modal-content">
            <!-- Content will be injected via JS -->
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>