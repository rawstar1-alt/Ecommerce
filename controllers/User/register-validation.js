
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("registerForm");

    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const number = document.querySelector("input[name='number']");
    const password = document.querySelector("input[name='password']");

    const usernameError = document.getElementById("username-error");
    const emailError = document.getElementById("email-error");

    function showError(input, message) {
        let errorSpan = input.parentElement.querySelector(".error-message");
        errorSpan.textContent = message;
    }

    function clearError(input) {
        let errorSpan = input.parentElement.querySelector(".error-message");
        errorSpan.textContent = "";
    }

    // Username validation
    username.addEventListener("keyup", function () {
        if (username.value.length < 3) {
            showError(username, "Username must be at least 3 characters");
        } else {
            clearError(username);
        }
    });

    // Email validation
    email.addEventListener("keyup", function () {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value)) {
            showError(email, "Enter a valid email address");
        } else {
            clearError(email);
        }
    });

    // Form submit validation
    form.addEventListener("submit", function (e) {
        let valid = true;

        // Username
        if (username.value.trim() === "") {
            showError(username, "Username is required");
            valid = false;
        }

        // Email
        if (email.value.trim() === "") {
            showError(email, "Email is required");
            valid = false;
        }

        // Number
        if (!/^[0-9]{10,15}$/.test(number.value)) {
            showError(number, "Enter a valid phone number");
            valid = false;
        }

        // Password
        if (password.value.length < 6) {
            showError(password, "Password must be at least 6 characters");
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });

});
