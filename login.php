

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <div class="left-container">
            <div class="logo-container">
                <img src="imgs/logo.jpg" alt="Logo">
            </div>
        </div>
        <div class="right-container">
            <div class="login-container">
                <h2>Welcome back User!</h2>
                <p>Log in your account</p>
                <form method="post">
                    <div class="input-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                        </label>
                        <!-- Retain email input value -->
                        <input type="email" id="email" name="email" placeholder="Enter your email" required autofocus>
                    </div>
                    <div class="input-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                        </label>
                        <!-- Leave the password field blank -->
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()">
                            <i id="eye-icon" class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    <div class="options">
                        <label>
                            
                        </label>
                        <a href="forgot_pass.php" class="forgot-password">Forgot password?</a>
                    </div>
                    <button type="submit" class="login-btn" name="login" id="login">Login</button>
                </form>
            </div>
        </div>
    </div>

   
   <script>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($error_message)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Wrong Credentials',
                    text: '<?php echo addslashes($error_message); ?>',
                    confirmButtonColor: '#0056b3',
                    confirmButtonText: 'OK'
                });
            });
        <?php endif; ?>

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
        document.getElementById('forgotPassword').addEventListener('click', function(event) {
        event.preventDefault(); // Prevents the default anchor link behavior

        // Function to handle forgot password logic
        forgotPassword();
    });

    function forgotPassword() {
        // For example, this could show a modal or redirect to a password recovery page
        let userResponse = confirm("Would you like to reset your password?");
        
        if (userResponse) {
            // Example: redirect to a password reset page
            window.location.href = "/reset_page.php";
        } else {
            alert("Password reset canceled.");
        }
    }
</script>


<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #87cefa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

.container {
    display: flex;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 900px;
    width: 100%;
    flex-direction: row;
}

.left-container {
    background-color: #FFFFFF;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1;
}

.logo-container img {
    width: 100%;
    max-width: 300px; /* Ensures image doesn't overflow */
    height: auto;
}

.right-container {
    flex: 1;
    padding: 40px;
}

.login-container {
    text-align: center;
}

.login-container h2 {
    margin-bottom: 10px;
    font-size: 1.5em;
    text-align: left; 
    padding-left: 5px; 
}

.login-container p {
    margin-bottom: 20px;
    color: #666;
    text-align: left; 
    padding-left: 5px;
}

.input-group {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    position: relative;
}

.input-group input {
    flex: 1;
    border: none;
    outline: none;
    padding: 5px;
}

.options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.options .forgot-password {
    color: #007bff;
    text-decoration: none;
}

.options .forgot-password:hover {
    text-decoration: underline;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-color: #1e90ff;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

.login-btn:hover {
    background-color:#4169e1;
}

.toggle-password {
    background: none;
    border: none;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #ccc;
}

.toggle-password .fa-eye-slash, .toggle-password .fa-eye {
    font-size: 1.2em;
}

/* Responsive Design: Adjust layout for tablets and smaller devices */
@media (max-width: 1024px) {
    .container {
        flex-direction: column;
        max-width: 700px;
    }

    .left-container, .right-container {
        width: 100%;
        padding: 20px;
    }

    .login-container h2 {
        font-size: 1.3em;
    }

    .login-container p {
        font-size: 1em;
    }
}

@media (max-width: 768px) {
    .container {
        max-width: 600px;
    }

    .login-container h2 {
        font-size: 1.2em;
    }

    .login-container p {
        font-size: 0.9em;
    }
}

@media (max-width: 480px) {
    body {
        padding: 10px;
        height: auto;
    }

    .container {
        max-width: 100%;
        padding: 10px;
    }

    .left-container, .right-container {
        padding: 15px;
    }

    .login-container h2 {
        font-size: 1.1em;
    }

    .login-container p {
        font-size: 0.85em;
    }

    .input-group {
        padding: 8px;
    }

    .login-btn {
        padding: 8px;
        font-size: 0.9em;
    }
}

</style> 