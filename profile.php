<?php
// Profile Page – Sprint 2
// Structure only – no backend logic yet
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile – SCCI 26</title>
  <!-- Root -->
  <link rel="stylesheet" href="assets/css/root.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/profile.css">
   <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
</head>

<body>

<section class="profileSection">
  <article class="profileCard">

    <!-- Cover -->
    <div class="profileCover">
      <div class="profileImageWrapper">
        <img src="assets/img/profilePhoto.png"
             alt="Profile Photo"
             class="profileImage"
             loading="lazy">
      </div>
    </div>

    <!-- Content -->
    <div class="profileContent">

      <!-- Name + Settings -->
      <div class="profileHeaderName">
        <h2 class="profileName">Jana Haitham</h2>

        <div class="settingsContainer">
          <span class="settingsIcon">
            <i class="fa-solid fa-gear"></i>
          </span>

          <div class="settingsMenu">
            <img src="assets/img/paperWorkshop.png"
                 class="settingsPaperImg"
                 loading="lazy"
                 alt="Settings Paper">

            <div class="settingsLinks">
              <span class="settingsLink">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit
                </span>
              <span class="settingsLink">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
                </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Info Papers -->
      <div class="infoPapersContainer">

        <div class="infoPaperWrapper">
          <img src="assets/img/infoPaper.png"
               class="infoPaperImg"
               loading="lazy"
               alt="">
          <div class="infoPaperContent">
            <div class="infoLabel">Email</div>
            <div  class="infoValue">janahaitham436@gmail.com</div>
          </div>
        </div>

        <div class="infoPaperWrapper">
          <img src="assets/img/infoPaper.png"
               class="infoPaperImg"
               loading="lazy"
               alt="">
          <div class="infoPaperContent">
            <div class="infoLabel">Department</div>
            <div class="infoValue">Devology</div>
          </div>
        </div>

      </div>

    </div>
  </article>
</section>

<section class="historySection">
  <div class="card-container">
        <div class="vertical-line"></div>
        
        <div class="role-item">
            <div class="diamond"></div>
            <div class="role-content">
                <h3 class="role-title">IT Head</h3>
                <p class="role-description">The IT head has a lot of responsibilities to take care of, like making the system all the SCU user in their daily bases, he leads the IT members to accomplish this goal.</p>
            </div>
        </div>

        <div class="role-item">
            <div class="diamond"></div>
            <div class="role-content">
                <h3 class="role-title">IT Member</h3>
                <p class="role-description">The IT member makes the system all the SCU user in their daily bases, and support the workshops</p>
            </div>
        </div>

        <div class="role-item">
            <div class="diamond"></div>
            <div class="role-content">
                <h3 class="role-title">DEYO Participant</h3>
                <p class="role-description">They take course on how to build websites from scratch using cutting edge technologies, and then participate in the conference</p>
            </div>
        </div>
    </div>
</section>
    <script src="assets/js/profile.js" defer></script>
    <script src="assets/js/all.min.js" defer></script>
</body>
</html>
