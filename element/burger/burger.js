let anim = 0;

const burger = document.getElementById("openBtn");

burger.addEventListener("click", () => {
    if (anim === 0) {
        openNav();
        document.getElementById("burger1").classList.remove("burger1-no-animation");
        document.getElementById("burger1").classList.add("burger1-animation");
        document.getElementById("burger2").classList.remove("burger2-no-animation");
        document.getElementById("burger2").classList.add("burger2-animation");
        document.getElementById("burger3").classList.remove("burger3-no-animation");
        document.getElementById("burger3").classList.add("burger3-animation");
        anim = 1;
    } else {
        closeNav();
        document.getElementById("burger1").classList.remove("burger1-animation");
        document.getElementById("burger1").classList.add("burger1-no-animation");
        document.getElementById("burger2").classList.remove("burger2-animation");
        document.getElementById("burger2").classList.add("burger2-no-animation");
        document.getElementById("burger3").classList.remove("burger3-animation");
        document.getElementById("burger3").classList.add("burger3-no-animation");
        anim = 0;
    }
});

const sidenav = document.getElementById("sidenav");

/* Set the width of the side navigation to 250px */
function openNav() {
    sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    sidenav.classList.remove("active");
}
