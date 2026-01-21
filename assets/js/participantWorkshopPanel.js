// Mini navbar change pages
const links = document.querySelectorAll(".miniNav a");
const pages = document.querySelectorAll(".panelSection");

function activatePage(pageId) {
  // activate nav link
  links.forEach((link) => {
    link.classList.toggle("activePanelLine", link.dataset.page === pageId);
  });

  // activate panel
  pages.forEach((page) => {
    page.classList.toggle("panelSectionActive", page.id === pageId);
  });
}

// prevent link default
links.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

    const targetId = link.dataset.page;

    // save to localStorage
    localStorage.setItem("activePanel", targetId);

    // activate immediately
    activatePage(targetId);
  });
});

// restore on page load
const savedPanel = localStorage.getItem("activePanel");

if (savedPanel) {
  activatePage(savedPanel);
} else {
  // fallback: first link
  const firstPage = links[0].dataset.page;
  activatePage(firstPage);
}

// ==============================================================
document.addEventListener('DOMContentLoaded', function () {

  /* ================== WEEK TABS SELECTION ================== */
  /* Handles switching between different workshop weeks */
  const weekTabs = document.querySelectorAll('.weekTab');

  weekTabs.forEach(tab => {
    tab.addEventListener('click', function () {
      // Remove active class from all tabs
      weekTabs.forEach(t => t.classList.remove('active'));
      // Add active class to clicked tab
      this.classList.add('active');

      const sessionNumber = this.getAttribute('data-week');
      updateTaskContent(sessionNumber);
    });
  });

  // Function to update task content based on selected session
  function updateTaskContent(sessionNum) {
    // Select elements to update
    const taskNameEl = document.querySelector('.cardBody .taskRow:nth-child(1) .taskValue');
    const deadlineEl = document.querySelector('.cardBody .taskRow:nth-child(2) .taskValue');
    const sessionEl = document.querySelector('.cardBody .taskRow:nth-child(3) .taskValue');
    const bioEl = document.querySelector('.taskBioContent');

    // Sample data for demonstration (In real app, fetch from backend)
    const sessionData = {
      '1': { name: 'Build your first website', deadline: '12/12/2025', bio: 'Create a simple personal portfolio website using HTML and CSS.' },
      '2': { name: 'JavaScript Basics', deadline: '19/12/2025', bio: 'Implement variables, loops, and functions to solve basic algorithms.' },
      '3': { name: 'DOM Manipulation', deadline: '26/12/2025', bio: 'Create an interactive to-do list application using JavaScript DOM API.' },
      '4': { name: 'Responsive Design', deadline: '02/01/2026', bio: 'Make your portfolio website fully responsive for mobile and tablet devices.' },
      '5': { name: 'Bootstrap Framework', deadline: '09/01/2026', bio: 'Rebuild your landing page within 2 hours using Bootstrap components.' },
      '6': { name: 'API Integration', deadline: '16/01/2026', bio: 'Fetch data from a public API and display it dynamically on your page.' },
      '7': { name: 'Final Project', deadline: '23/01/2026', bio: 'Plan and start developing your final course project with all learned skills.' }
    };

    const data = sessionData[sessionNum];

    if (data) {
      // Animate content change
      const cardBody = document.querySelector('.cardBody');
      cardBody.style.opacity = '0';

      setTimeout(() => {
        if (taskNameEl) taskNameEl.textContent = data.name;
        if (deadlineEl) deadlineEl.textContent = data.deadline;
        if (sessionEl) sessionEl.textContent = sessionNum;
        if (bioEl) bioEl.textContent = data.bio;

        cardBody.style.opacity = '1';
      }, 300);
    }
  }

  /* ================== FILE UPLOAD HANDLING ================== */
  const uploadContainer = document.querySelector('.uploadContainer');
  const fileInput = document.getElementById('taskFile');
  const fileMessage = document.getElementById('fileMessage');
  const fileUploadedName = document.getElementById('fileUploadedName');
  const submitForm = document.getElementById('validForm');
  const actionButtons = document.getElementById('actionButtons');
  const removeBtn = document.getElementById('removeFileBtn');
  const formLabel = document.querySelector('.formLabel');

  /* Event: File Selection Change */
  fileInput.addEventListener('change', function () {
    if (this.files.length > 0) {
      // Update Name Display
      fileUploadedName.textContent = this.files[0].name;
      fileUploadedName.style.display = "block";

      // Toggle UI Sections
      formLabel.style.display = "none";
      actionButtons.style.display = "flex";

      // Clear any previous messages
      fileMessage.textContent = "";
    } else {
      resetUploadUI();
    }
  });

  /* Function to reset UI to initial state */
  function resetUploadUI() {
    fileInput.value = "";
    fileUploadedName.style.display = "none";
    formLabel.style.display = "flex";
    actionButtons.style.display = "none";
  }

  /* Event: Remove Button Click */
  if (removeBtn) {
    removeBtn.addEventListener('click', function () {
      resetUploadUI();

      // Success removal message
      fileMessage.textContent = "file removed";
      fileMessage.style.color = "var(--color-success, #28a745)";
      fileMessage.style.fontWeight = "bold";
      fileMessage.style.marginTop = "10px";
      fileMessage.style.textAlign = "center";
    });
  }

  /* Event: Form Submission */
  submitForm.addEventListener('submit', (e) => {
    if (!fileInput.files.length) {
      e.preventDefault();
      fileMessage.textContent = "Please upload a file.";
      fileMessage.style.color = "red";
      return;
    }

    // Success submission message logic (Visual feedback before actual submit)
    // If you want to see the message before the page reloads:
    e.preventDefault();
    fileMessage.textContent = "file submited";
    fileMessage.style.color = "var(--color-success, #28a745)";
    fileMessage.style.fontWeight = "bold";
    fileMessage.style.marginTop = "10px";
    fileMessage.style.textAlign = "center";

    // Optional: Actually submit after a delay so user sees the message
    setTimeout(() => {
      submitForm.submit();
    }, 1500);
  });

  /* ================== MATERIAL CATEGORY SWITCHING ================== */
  /* Handles switching between Technical and Soft-skills materials */
  const categoryBtns = document.querySelectorAll('.materialCategoryBtn');
  const materialsLists = document.querySelectorAll('.materialsList');

  categoryBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      // Remove active class from all buttons
      categoryBtns.forEach(b => b.classList.remove('active'));

      // Add active class to clicked button
      this.classList.add('active');

      // Get target category
      const targetCategory = this.getAttribute('data-category');

      // Hide all materials lists
      materialsLists.forEach(list => {
        list.classList.remove('activeMaterialsList');
      });

      // Show target list
      const targetList = document.getElementById(targetCategory);
      if (targetList) {
        targetList.classList.add('activeMaterialsList');
      }
    });
  });

});

/* ================== FEEDBACK MODAL CONTROL ================== */
/* Functions to open and close the feedback modal popup */

function openFeedbackModal(sessionName, rating, feedbackText, instructor) {
  const modal = document.getElementById('feedbackModal');

  // Update modal content (for now static, backend will populate this)
  // These parameters can be used when backend integration is ready

  modal.classList.add('show');
  // Allow background scrolling while modal is open

  // Scroll to top of page when modal opens
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function closeFeedbackModal() {
  const modal = document.getElementById('feedbackModal');
  modal.classList.remove('show');
}

// Close modal when clicking outside
document.addEventListener('click', function (event) {
  const modal = document.getElementById('feedbackModal');
  if (event.target === modal) {
    closeFeedbackModal();
  }
});

// Close modal with Escape key
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape') {
    closeFeedbackModal();
  }
});

// Attach click handlers to feedback buttons
document.addEventListener('DOMContentLoaded', function () {
  const feedbackBtns = document.querySelectorAll('.feedbackBtn');

  feedbackBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      openFeedbackModal();
    });
  });
});
