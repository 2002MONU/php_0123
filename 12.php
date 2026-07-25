
<form id="loginForm" action="login.php" method="POST">
    <input type='email' id='email' name='email'>
    <span id="emailError"></span>
    <input type='password' id='password' name='password'>
    <span id="passwordError"></span>

    <button type="submit">Login</button>

    <script>
   $(document).ready(function(){
    
     $("#loginForm").submit(function(e){
        e.preveDefault();

        let email  = $("#email"),val().trim();
        let password  = $("#password"),val().trim();

        let isValid = false;

        if(email == ''){
            $("#emilError").text("Email filed is required");
            isValid = false;
        }

        if(passord  == ''){
             $("#passworderro").text("password filed is required");
            isValid = false;
        }else(password > 6){
            $("#passworderro").text("password filed is required 6 digits");
            isValid = false;
        }
     })

   })


    </script>