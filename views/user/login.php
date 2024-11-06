<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 320px;
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }
        .login-container input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }
        .login-container button {
            width: 100%;
            padding: 0.75rem;
            background: #d8b035;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .login-container button:hover {
            background: #c3a02e;
        }
        .register-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .register-link:hover {
            color: #d8b035;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <a href="index.php?action=register" class="register-link">Belum punya akun? Register</a>
        </form>
    </div>
</body>
</html>

