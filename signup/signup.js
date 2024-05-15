document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("signup-form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // Retrieve input values
        const username = document.getElementById("username").value;
        const universitySeatNumber = document.getElementById("universitySeatNumber").value;
        const email = document.getElementById("email").value;
        const libraryCardNumber = document.getElementById("libraryCardNumber").value;
        const className = document.getElementById("className").value;
        const collegeDepartment = document.getElementById("collegeDepartment").value;
        const personalNumber = document.getElementById("personalNumber").value;
        const securityQuestion = document.getElementById("securityQuestion").value;
        const securityAnswer = document.getElementById("securityAnswer").value;
        const password = document.getElementById("password").value;

        // Save user data locally (you can modify this part to save data in Excel or any other format)
        const userData = {
            username: username,
            universitySeatNumber: universitySeatNumber,
            email: email,
            libraryCardNumber: libraryCardNumber,
            className: className,
            collegeDepartment: collegeDepartment,
            personalNumber: personalNumber,
            securityQuestion: securityQuestion,
            securityAnswer: securityAnswer,
            password: password
        };

        // You can implement the data storage logic here (e.g., saving to Excel or any other storage format)
        console.log("User data:", userData);

        // After saving the data, you can redirect the user to another page or show a success message
        alert("Sign up successful! You can now log in.");
        // Redirect to login page or any other page
        // window.location.href = "login.html";
    });
});