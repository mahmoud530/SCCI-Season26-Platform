// Cards System JS Code

const cards = Array.from(document.querySelectorAll('.card'));
const exitedStack = [];

// Initialize cards stacked
cards.forEach((card, index) => {
    card.classList.add('active');
    card.style.zIndex = index;
});

const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

// RIGHT: slide out topmost card
nextBtn.addEventListener('click', () => {
    const visibleCards = cards.filter(c => c.classList.contains('active') && !c.classList.contains('hidden'));
    
    if (visibleCards.length <= 1) return; // last card stays

    const topCard = visibleCards[visibleCards.length - 1];

    // Slide out
    topCard.classList.add('slide-right');

    // After animation ends, hide
    topCard.addEventListener('transitionend', function handler() {
        topCard.classList.remove('active', 'slide-right');
        topCard.classList.add('hidden');
        exitedStack.push(topCard);
        topCard.removeEventListener('transitionend', handler);
    });
});

// LEFT: slide back last hidden card
prevBtn.addEventListener('click', () => {
    if (exitedStack.length === 0) return;

    const card = exitedStack.pop();

    card.classList.remove('hidden');
    card.classList.add('slide-back', 'active');

    // Trigger reflow to animate
    void card.offsetWidth;

    // Remove slide-back class to slide to normal position
    card.classList.remove('slide-back');
});
