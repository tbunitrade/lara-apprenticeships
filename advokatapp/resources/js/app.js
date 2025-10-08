import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', () => {
    if (window.Glide) {
        const root = document.querySelector('.glide');
        if (root) {
            const glide = new Glide('.glide', {
                type: 'carousel',
                autoplay: 4000,
                perView: 1,
            });
            glide.mount();
        }
    }

    console.log('soni');

    if (window.location.pathname === '/' || window.location.pathname === '/index') return;

    let el = document.querySelector('h1') ||
    document.querySelector('h2') ||
    document.querySelector('.title');

    if (el) {
    let fullTitle = el.textContent.trim();
        document.title = fullTitle + ' — Bar Association of Kyiv';
    }

});
