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

  <!-- Font -->
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
        <img
          src="assets/img/profilePhoto.png"
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

          <!-- Popup -->
          <div class="settingsMenu">
            <img
              src="assets/img/paperWorkshop.png"
              class="settingsPaperImg"
              loading="lazy"
              alt="Settings Paper">

            <div class="settingsLinks">
              <a href="#" class="settingsLink" id="openEditProfile">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit
              </a>


              <a href="home.php" class="settingsLink">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Info Papers -->
      <div class="infoPapersContainer">

        <!-- Contact -->
        <div class="infoPaperWrapper">
          <img
            src="assets/img/infoPaper.png"
            class="infoPaperImg"
            loading="lazy"
            alt="">

          <div class="infoPaperContent">
            <div class="infoLabel">Contacts</div>
            <div class="profileSocial">
              <!-- Email -->
            <div class="socialItem">
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:janahaitham436@gmail.com">
                   janahaitham436@gmail.com
                 </a>
            </div>
              <!-- LinkedIn -->
              <div class="socialItem">
                <i class="fa-brands fa-linkedin"></i>
                <a href="https://linkedin.com/in/example" target="_blank">
                  linkedin.com/in/example
                </a>
              </div>
              <!-- GitHub -->
              <div class="socialItem">
                <i class="fa-brands fa-github"></i>
                <a href="https://github.com/example" target="_blank">
                  github.com/example
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Department -->
        <div class="infoPaperWrapper">
          <img
            src="assets/img/infoPaper.png"
            class="infoPaperImg"
            loading="lazy"
            alt="">

          <div class="infoPaperContent">
            <div class="infoLabel">Department</div>
            <div class="infoValue">AC-Devology</div>
          </div>
        </div>

      </div>
    </div>
  </article>
</section>


<!-- Edit Profile Popup -->
<section>

  <div class="editProfileOverlay" id="editProfileOverlay">
    <div class="editProfilePopup">

      <img src="assets/img/infoPaper.png" class="editPaperImg" alt="">

      <h3 class="editTitle">Edit Profile</h3>

      <div class="editField">
        <span class="fieldLabel">Name:</span>
        <span class="oldValue">Jana Haitham</span>
        <button class="editBtn">Edit</button>
        <input type="text" value="Jana Haitham">
      </div>

      <div class="editField">
        <span class="fieldLabel">Email:</span>
        <span class="oldValue">janahaitham436@gmail.com</span>
        <button class="editBtn">Edit</button>
        <input type="email" value="janahaitham436@gmail.com">
      </div>

      <div class="editField">
        <span class="fieldLabel">Phone:</span>
        <span class="oldValue">+20 100 123 4567</span>
        <button class="editBtn">Edit</button>
        <input type="tel" value="+20 100 123 4567">
      </div>

      <div class="editField">
        <span class="fieldLabel">Password:</span>
        <span class="oldValue">********</span>
        <button class="editBtn">Edit</button>
        <input type="password" placeholder="New password">
      </div>

      <div class="editField">
        <span class="fieldLabel">GitHub:</span>
        <span class="oldValue">github.com/example</span>
        <button class="editBtn">Edit</button>
        <input type="text" value="github.com/example">
      </div>

      <div class="editField">
        <span class="fieldLabel">LinkedIn:</span>
        <span class="oldValue">linkedin.com/in/example</span>
        <button class="editBtn">Edit</button>
        <input type="text" value="linkedin.com/in/example">
      </div>

      <button class="saveProfile">Save Changes</button>
      <button class="closePopup">Close</button>
    </div>
  </div>
</section>





  <!-- History Section -->

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
</main>

    <script src="assets/js/profile.js" defer></script>
    <script src="assets/js/all.min.js" defer></script>
</body>
</html>
