// JavaScript code for toggling dark and light modes and storing user preference
document.addEventListener("DOMContentLoaded", function() {
    // Check if the user preference is stored in local storage
    const userPreference = localStorage.getItem("mode");

    // Apply the user preference if available, otherwise apply the default mode
    if (userPreference === "dark-mode") {
        applyDarkMode();
    } else if (userPreference === "light-mode") {
        applyLightMode();
    }

    // Function to apply dark mode styles
    function applyDarkMode() {
        document.body.classList.remove("light-mode");
        document.body.classList.add("dark-mode");
    }

    // Function to apply light mode styles
    function applyLightMode() {
        document.body.classList.remove("dark-mode");
        document.body.classList.add("light-mode");
    }

    // Event listener for toggling dark mode
    document.getElementById("dark-mode-btn").addEventListener("click", function() {
        applyDarkMode();
        // Store user preference in local storage
        localStorage.setItem("mode", "dark-mode");
    });

    // Event listener for toggling light mode
    document.getElementById("light-mode-btn").addEventListener("click", function() {
        applyLightMode();
        // Store user preference in local storage
        localStorage.setItem("mode", "light-mode");
    });
});
