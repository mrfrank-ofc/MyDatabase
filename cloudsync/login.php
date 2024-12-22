<?php
include("db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Frannk Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3a6186, #89253e);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            background: #fff;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        
        h1 {
            color: #333;
        }
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 1rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .btn {
            background-color: #3a6186;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        
        .btn:hover {
            background-color: #89253e;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .signup {
            margin-top: 10px;
            font-size: 14px;
        }

        .signup a {
            color: #3a6186;
            text-decoration: none;
        }

        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>MegaMind Space</h1>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button class="btn" type="submit">Login</button>
            <div class="forgot-password">
                <a href="forgotpassword.html">Forgot password?</a>
            </div>
        </form>
        <div class="signup">
            Don't have an account? <a href="signup.html">Sign Up</a>
        </div>
    </div>
    
    




        <script>
    /*    const form = document.getElementById('loginForm');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password }),
                });
                const data = await response.json();
                console.log(data);
                alert('Login successful!');
                // Redirect to a protected page or dashboard
                */
            
       const form = document.getElementById('loginForm');
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (username === 'mrfrank' && password === 'thehacker') {
                alert('Login successful! Welcome Mr Frank');
                // Redirect to the dashboard or another page
                window.location.href = 'dashboard.html';
            } else {
                alert('Invalid credentials, please try again.');
            }
        });
        
    </script>
</body>
</html>
