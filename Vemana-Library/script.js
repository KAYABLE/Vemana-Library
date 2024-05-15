document.addEventListener('DOMContentLoaded', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.querySelector('.navbar');

    mobileMenu.addEventListener('click', function () {
        if (navbar.style.display === 'block') {
            navbar.style.display = 'none';
        } else {
            navbar.style.display = 'block';
        }
    });
});
