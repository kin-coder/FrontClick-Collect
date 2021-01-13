//BURGER//

const navslide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbar-nav');
    const navLinks = document.querySelectorAll('.navbar-nav li');
    // const btn = document.querySelector('.logomobile');


    burger.addEventListener('click', () => {
        // barre de navigation
        nav.classList.toggle('nav-active');
        // Animation des liens avec espace reguliers
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
                
            } else {
                link.style.animation = `navLinkfade 0.5s ease forwards ${index / 2 + 0.5 }s`;
            }
        });

        //Burger Animation
        burger.classList.toggle('toggle');
        // btn.style.display = 'none';

    });







    
            

}

navslide();