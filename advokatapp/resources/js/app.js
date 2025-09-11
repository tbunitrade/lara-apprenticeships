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
});
