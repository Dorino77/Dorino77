<?php include 'views/layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Rumah Sosis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../admin/assets/img/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-sizing: border-box;
            color: #fff;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .hero h1, .hero p, .hero .cta-button {
            z-index: 2;
            animation: fadeInUp 1s ease-in-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0;
            animation-delay: 0.5s;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 10px 0;
            max-width: 600px;
            animation-delay: 0.7s;
        }

        .cta-button {
            background-color: #d8b035;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 20px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation-delay: 1s;
        }

        .cta-button:hover {
            background-color: #c3a02e;
            transform: scale(1.05);
        }

        .decorative-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            animation: move 10s linear infinite;
            z-index: 0;
        }

        .circle.small {
            width: 50px;
            height: 50px;
            bottom: 20%;
            left: 10%;
        }

        .circle.medium {
            width: 100px;
            height: 100px;
            top: 10%;
            right: 15%;
        }

        .circle.large {
            width: 200px;
            height: 200px;
            bottom: 30%;
            right: 20%;
        }

        @keyframes move {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
                max-width: 80%;
            }

            .cta-button {
                padding: 12px 25px;
                font-size: 1rem;
            }

            .circle.medium {
                width: 75px;
                height: 75px;
            }

            .circle.large {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="decorative-elements">
            <div class="circle small"></div>
            <div class="circle medium"></div>
            <div class="circle large"></div>
        </div>
        <h1>Selamat Datang di Rumah Sosis</h1>
        <p>Kami dengan senang hati memberikan beragam pilihan nugget dan sosis berkualitas tinggi yang siap memanjakan lidah Anda.</p>
        <p>Temukan berbagai varian nugget dan sosis yang cocok untuk segala kesempatan, baik untuk camilan, hidangan utama, atau pesta bersama keluarga dan teman.</p>
        <a href="index.php?action=index" class="cta-button">Pesan Sekarang</a>
    </div>
</body>
</html>
