import './bootstrap';
import 'bootstrap';
import Handlebars from 'handlebars'; 
import velocity from 'velocity-animate';

window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.custom-navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

