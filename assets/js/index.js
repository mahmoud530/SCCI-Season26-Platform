const flipCards = document.querySelectorAll(".flipCard");

flipCards.forEach(card => {
  card.addEventListener("mouseenter", () => {
    card.classList.toggle("isFlipped");
  });
});

// Initialize AOS
AOS.init({
  duration: 1000,
  once: true,
});

/* ===== Modal Logic ===== */

function openModal(element) {
  const modal = document.getElementById("crew-modal");
  const modalContent = modal.querySelector(".modal-content");
  const overlay = document.querySelector(".page-overlay");

  // Clear previous content
  modalContent.innerHTML = "";

  // Clone Content from the clicked Board Item
  // 1. Title
  const title = element.querySelector(".roleTitle").cloneNode(true);
  // 2. Main Card
  const mainCard = element.querySelector(".flipCard").cloneNode(true);
  // 3. Sub Grid (Make it visible in clone by removing display:none logic hidden in class)
  const subGrid = element.querySelector(".sub-crew-grid").cloneNode(true);
  subGrid.style.display = "grid"; // Force display in modal
  subGrid.style.maxHeight = "500px";
  subGrid.style.opacity = "1";

  // Append to Modal
  modalContent.appendChild(title);
  modalContent.appendChild(mainCard);
  modalContent.appendChild(subGrid);

  // Activate
  overlay.classList.add("active");
  modal.classList.add("active");
}

function closeModal() {
  const modal = document.getElementById("crew-modal");
  const overlay = document.querySelector(".page-overlay");

  if (modal && overlay) {
    modal.classList.remove("active");
    overlay.classList.remove("active");

    // Cleanup content after animation
    setTimeout(() => {
      const modalContent = modal.querySelector(".modal-content");
      if (modalContent) modalContent.innerHTML = "";
    }, 300);
  }
}