// Animation d'apparition des éléments au scroll
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const revealPoint = 120;
        if (elementTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}
window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

// Animation sur les boutons
const btns = document.querySelectorAll('.btn');
btns.forEach(btn => {
    btn.addEventListener('mouseenter', () => {
        btn.classList.add('pulse');
    });
    btn.addEventListener('mouseleave', () => {
        btn.classList.remove('pulse');
    });
});

// Animation du logo au chargement
window.addEventListener('DOMContentLoaded', () => {
    const logo = document.querySelector('.logo img');
    if (logo) {
        logo.classList.add('logo-animate');
    }
});