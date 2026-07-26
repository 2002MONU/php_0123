
<form id="loginForm">
    
    <input type="email" name="email" id="email">
    <span id="emailError"> </span>
    <input type="password" name="password" id="password">
    <span id="passwordError"> </span>
    <submit type="submit">SigIn</submit>
</form>

<script>
$(document).ready(function () {

    $("#loginForm").submit(function (e) {
        e.preventDefault();

        // Clear previous errors
        $("#emailError").text("");
        $("#passwordError").text("");

        let email = $("#email").val().trim();
        let password = $("#password").val().trim();

        let isValid = true;

        // Email Validation
        if (email === "") {
            $("#emailError").text("Email can't be empty.");
            isValid = false;
        } else {
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                $("#emailError").text("Please enter a valid email.");
                isValid = false;
            }
        }

        // Password Validation
        if (password === "") {
            $("#passwordError").text("Password can't be empty.");
            isValid = false;
        } else if (password.length < 6) {
            $("#passwordError").text("Password must be at least 6 characters.");
            isValid = false;
        }

        if (isValid) {
            alert("Form is valid!");

            // Submit the form using AJAX here
            // $.ajax({...});
        }

    });

});
</script>