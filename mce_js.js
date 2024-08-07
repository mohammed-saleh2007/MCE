document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    console.log('Login attempt:', { email, password });
    // Add login logic here
});

document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;
    const email2 = document.getElementById('signupEmail').value;
    const password2 = document.getElementById('signupPassword').value;
    const confirmPassword = document.getElementById('signupConfirmPassword').value;
    if (password === confirmPassword) {
        console.log('Signup attempt:', { email, password });
        // Add signup logic here
    } else {
        alert('Passwords do not match');
    }
});

const firebaseConfig = {
    apiKey: "1:1061184206362:web:6606901b10ecb6f6bb43a3",
    authDomain: "YOUR_PROJECT_ID.firebaseapp.com",
    projectId: "mcecontroller-440a0",
    storageBucket: "YOUR_PROJECT_ID.appspot.com",
    messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
    appId: "YOUR_APP_ID",
    measurementId: "YOUR_MEASUREMENT_ID"
  };
  import firebase from 'firebase/app';
