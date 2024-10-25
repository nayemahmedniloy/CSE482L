$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        var isValid = true;

        // Reset all errors
        $('.error-message').text('');

        // Name validation
        var nameInput = $('#name').val().trim();
        if (!nameInput) {
            $('#nameError').text('Name cannot be empty');
            isValid = false;
        }

        // Username validation
        var usernameInput = $('#username').val().trim();
        if (!usernameInput) {
            $('#usernameError').text('Username cannot be empty');
            isValid = false;
        } else if (usernameInput.indexOf(' ') >= 0) {
            $('#usernameError').text('Username cannot contain whitespace');
            isValid = false;
        }

        // Password validation
        var passwordInput = $('#password').val();
        var confirmPasswordInput = $('#confirmPassword').val();
        if (passwordInput.length < 8 || passwordInput.length > 32) {
            $('#passwordError').text('Password must be between 8 to 32 characters');
            isValid = false;
        } else if (passwordInput !== confirmPasswordInput) {
            $('#confirmPasswordError').text('Passwords do not match');
            isValid = false;
        }

        // Gender validation
        if (!$('input[name="gender"]:checked').length) {
            $('#genderError').text('Please select a gender');
            isValid = false;
        }

        // Contact Number validation
        var contactNumberInput = $('#contactNumber').val();
        if (!contactNumberInput.match(/^\d{10}$/)) {
            $('#contactNumberError').text('Contact number should contain exactly 10 digits');
            isValid = false;
        }

        // Email validation
        var emailInput = $('#email').val().trim();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailInput) {
            $('#emailError').text('Email cannot be empty');
            isValid = false;
        } else if (!emailPattern.test(emailInput)) {
            $('#emailError').text('Please enter a valid email address');
            isValid = false;
        }

        // Skills validation
        if (!$('input[name="skills"]:checked').length) {
            $('#skillsError').text('Please select at least one programming skill');
            isValid = false;
        }

        // College validation
        if (!$('#college').val()) {
            $('#collegeError').text('Please select a college');
            isValid = false;
        }

        // Prevent form submission if not valid
        if (!isValid) {
            event.preventDefault();
        }
    });
});
