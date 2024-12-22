<?php
include("db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Frank Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3a6186, #89253e); /* Gradient background */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .signup-container {
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
        
        input[type="text"], input[type="email"], input[type="password"] { /* Changed to include input[type="email"] */
            width: 20em;
            padding: 10px;
            margin: 1rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type='submit'] {
            background-color: #3a6186; /* Button color from gradient */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        
        input[type='submit']:hover {
            background-color: #89253e; /* Hover color from gradient */
        }

        .login-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .login-link a {
            color: #3a6186; /* Link color matches gradient */
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
   <table>
   <h1>MegaMind Space Signup</h1>
        <form action="" method="post"  >
            <tr>
                <td>
                    <input type="text"  name="username" placeholder="username" required>
                </td>
        
            <tr>
                <td>
                    <input type="text"   name="email" placeholder="Email" required>
                </td>
            </tr>
           <tr>
               <td>
                  <input type="password" name="password" placeholder="Password" required>
               </td>
           </tr>
              <tr>
                <td> <input type="submit" name="submit" value="Post"></td>
              </tr>
        </form>
   </table>
        <?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qr = "INSERT INTO `new` (`username`, `email`,`password`) VALUES ('$username','$email','$password');";
    $ex = mysqli_query($conn, $qr);
}
?>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>

</body>

</html>
