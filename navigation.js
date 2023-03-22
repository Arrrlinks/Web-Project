const categorie = document.querySelector('.box-categorie');
const stage = document.querySelector('.box-stage');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50 && window.innerWidth > 520) {
        categorie.classList.add('box-categorie-scroll');
        stage.classList.add('box-stage-scroll');
    } else {
        categorie.classList.remove('box-categorie-scroll');
        stage.classList.remove('box-stage-scroll');
    }
});
