<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
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
        .register-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }
        .register-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        .register-container label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
        }
        .register-container input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }
        .register-container button {
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
        .register-container button:hover {
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
    <div class="register-container">
        <h2>Register</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>

            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" name="nomor_hp" id="nomor_hp" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="register">Register</button>
        </form>
        <a href="index.php?action=login" class="register-link">Sudah punya akun? Login</a>
    </div>
</body>
</html>
