
// Function to toggle the sliding menu
function toggleMenu() {
    const slidingMenu = document.querySelector('.sliding-menu');
    slidingMenu.classList.toggle('active');
}

// Function to open the sliding menu
function openNav() {
    const slidingMenu = document.querySelector('.sliding-menu');
    slidingMenu.classList.add('active');
}

// Function to close the sliding menu
function closeNav() {
    const slidingMenu = document.querySelector('.sliding-menu');
    slidingMenu.classList.remove('active');
}
