document.addEventListener('DOMContentLoaded', () => {
  const settingsIcon = document.querySelector('.settingsIcon');
  const settingsMenu = document.querySelector('.settingsMenu');

  if (!settingsIcon || !settingsMenu) return;

  let isOpen = false;

  const openMenu = (e) => {
    e.stopPropagation();
    if (isOpen) return;

    settingsMenu.classList.remove('closing');
    settingsMenu.classList.add('opening');
    isOpen = true;
  };

  const closeMenu = () => {
    if (!isOpen) return;

    settingsMenu.classList.remove('opening');
    settingsMenu.classList.add('closing');

    setTimeout(() => {
      settingsMenu.classList.remove('closing');
      isOpen = false;
    }, 350);
  };

  settingsIcon.addEventListener('click', openMenu);
  document.addEventListener('click', closeMenu);
});
