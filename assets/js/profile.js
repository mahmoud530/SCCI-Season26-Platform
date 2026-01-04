document.addEventListener('DOMContentLoaded', () => {
  const settingsIcon = document.querySelector('.settingsIcon');
  const settingsMenu = document.querySelector('.settingsMenu');

  if (!settingsIcon || !settingsMenu) return;

  let isOpen = false;
  const animationDuration = 350;

  const openMenu = (e) => {
    e.stopPropagation();
    if (isOpen) return;

    settingsMenu.classList.remove('closing');
    settingsMenu.classList.add('opening');
    settingsMenu.style.visibility = 'visible';
    isOpen = true;
  };

  const closeMenu = () => {
    if (!isOpen) return;

    settingsMenu.classList.remove('opening');
    settingsMenu.classList.add('closing');

    setTimeout(() => {
      settingsMenu.style.visibility = 'hidden';
      settingsMenu.classList.remove('closing');
      isOpen = false;
    }, animationDuration);
  };

  settingsIcon.addEventListener('click', (e) => {
    isOpen ? closeMenu() : openMenu(e);
  });

  document.addEventListener('click', closeMenu);
});
