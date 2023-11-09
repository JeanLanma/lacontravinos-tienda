import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Mobile menu

const toggleMenu  =  (triggerBtn, menuContainer) => {
    const trigger = document.querySelector(triggerBtn);
    const menu = document.querySelector(menuContainer);

    if (!trigger || !menu) {
        return console.warn('missing menu or trigger');
    }

    trigger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
}

toggleMenu('#mobile-menu-btn', '#mobile-menu-container');