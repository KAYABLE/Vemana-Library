function login() {
    console.log("Login button clicked"); // Add this line
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Perform login authentication here
    // For testing purposes, you can log the username and password to the console
    console.log("Username:", username);
    console.log("Password:", password);

    // Add your login authentication logic here
    // This could involve sending the credentials to a server for validation,
    // or checking against a local database, depending on your setup
}