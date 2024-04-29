// Initialize Firebase
const firebaseConfig = {
    // Your Firebase configuration
};
firebase.initializeApp(firebaseConfig);

// Initialize Cloud Firestore
const db = firebase.firestore();

// Function to handle sign up
function signUp() {
    // Get input values from the form
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const username = document.getElementById("username").value;
    // Get other input values as needed

    // Sign up the user with email and password
    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // User signed up successfully
            const user = userCredential.user;
            const uid = user.uid;

            // Store additional user information in Cloud Firestore
            db.collection("users").doc(uid).set({
                username: username,
                // Add other fields as needed
            })
            .then(() => {
                console.log("User data stored successfully");
                // Redirect the user to another page or perform other actions
            })
            .catch((error) => {
                console.error("Error storing user data:", error);
            });
        })
        .catch((error) => {
            // Handle sign-up errors
            console.error("Sign up error:", error);
        });
}