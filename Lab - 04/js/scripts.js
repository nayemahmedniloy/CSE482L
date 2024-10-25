// Form validation
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var isValid = true;

    // Reset all errors
    var errorElements = document.getElementsByClassName('error-message');
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
    }

    // Name validation
    var nameInput = document.getElementById('name');
    if (!nameInput.value.trim()) {
        document.getElementById('nameError').textContent = 'Name cannot be empty';
        isValid = false;
    }

    // Username validation
    var usernameInput = document.getElementById('username');
    if (!usernameInput.value.trim()) {
        document.getElementById('usernameError').textContent = 'Username cannot be empty';
        isValid = false;
    } else if (usernameInput.value.indexOf(' ') >= 0) {
        document.getElementById('usernameError').textContent = 'Username cannot contain whitespace';
        isValid = false;
    }

    // Password validation
    var passwordInput = document.getElementById('password');
    var confirmPasswordInput = document.getElementById('confirmPassword');
    if (passwordInput.value.length < 8 || passwordInput.value.length > 32) {
        document.getElementById('passwordError').textContent = 'Password must be between 8 to 32 characters';
        isValid = false;
    } else if (passwordInput.value !== confirmPasswordInput.value) {
        document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
        isValid = false;
    }

    // Gender validation
    var genderInputs = document.querySelectorAll('input[name="gender"]');
    var genderSelected = false;
    for (var i = 0; i < genderInputs.length; i++) {
        if (genderInputs[i].checked) {
            genderSelected = true;
            break;
        }
    }
    if (!genderSelected) {
        document.getElementById('genderError').textContent = 'Please select a gender';
        isValid = false;
    }

    // Contact Number validation
    var contactNumberInput = document.getElementById('contactNumber');
    if (!contactNumberInput.value.match(/^\d{10}$/)) {
        document.getElementById('contactNumberError').textContent = 'Contact number should contain exactly 10 digits';
        isValid = false;
    }

    // Email validation
    var emailInput = document.getElementById('email');
    if (!emailInput.value.trim()) {
        document.getElementById('emailError').textContent = 'Email cannot be empty';
        isValid = false;
    } else if (!emailInput.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address';
        isValid = false;
    }

    // Skills validation
    var skillsInputs = document.querySelectorAll('input[name="skills"]:checked');
    if (skillsInputs.length === 0) {
        document.getElementById('skillsError').textContent = 'Please select at least one programming skill';
        isValid = false;
    }

    // College validation
    var collegeInput = document.getElementById('college');
    if (!collegeInput.value) {
        document.getElementById('collegeError').textContent = 'Please select a college';
        isValid = false;
    }

    // Prevent form submission if not valid
    if (!isValid) {
        event.preventDefault();
    }
});