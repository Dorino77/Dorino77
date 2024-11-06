<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sosis</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php?action=landing">
                <img src="../admin/assets/img/logoemas.png" alt="Toko Sosis Logo" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php?action=landing">Home</a></li>
                    <li><a href="index.php?action=index">Daftar Barang</a></li>
                    <li><a href="index.php?action=about">About</a></li>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                        <li><a href="index.php?action=logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="index.php?action=login">Login</a></li>
                        <li><a href="index.php?action=register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">