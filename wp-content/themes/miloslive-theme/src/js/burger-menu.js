document.addEventListener("DOMContentLoaded", function() {
    const burger = document.querySelector(".burger-menu");
    const mobileMenu = document.querySelector(".mobile-menu");

    burger.addEventListener("click", function() {
        mobileMenu.classList.toggle("active");
    });
});
