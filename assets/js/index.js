const flipCards = document.querySelectorAll(".flipCard");

flipCards.forEach(card => {
  card.addEventListener("mouseenter", () => {
    card.classList.toggle("isFlipped");
  });
});