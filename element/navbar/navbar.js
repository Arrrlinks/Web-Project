const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50 && window.innerWidth > 520) {
        navbar.classList.add('navbar-scroll');
    } else {
        navbar.classList.remove('navbar-scroll');
    }
});

const input = document.getElementById('navbar-search-input');

input.addEventListener('click', function() {
    input.value = '';
    input.placeholder='';
});
