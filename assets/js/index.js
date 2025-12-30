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