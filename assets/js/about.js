const cards = document.querySelectorAll('.card');
let currentIndex = 0;

const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

function showCard(newIndex, direction) {
    if (newIndex === currentIndex) return;

    const current = cards[currentIndex];
    const next = cards[newIndex];

    // Clean all cards
    cards.forEach(card => {
        card.classList.remove(
            'active',
            'exit-right',
            'enter-left'
        );
    });

    if (direction === 'next') {
        current.classList.add('exit-right');
        next.classList.add('active');
    }

    if (direction === 'prev') {
        next.classList.add('enter-left');

        requestAnimationFrame(() => {
            next.classList.add('active');
            next.classList.remove('enter-left');
        });
    }

    currentIndex = newIndex;
}

nextBtn.addEventListener('click', () => {
    const newIndex = (currentIndex + 1) % cards.length;
    showCard(newIndex, 'next');
});

prevBtn.addEventListener('click', () => {
    const newIndex =
        (currentIndex - 1 + cards.length) % cards.length;
    showCard(newIndex, 'prev');
});
