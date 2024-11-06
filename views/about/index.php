<?php include 'views/layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Rumah Sosis</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            box-sizing: border-box;
        }

        .hero {
            height: 20vh;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
            z-index: 2;
            animation: fadeInDown 1s ease-in-out;
        }

        .about-content {
            padding: 40px 20px;
            text-align: center;
            background-color: #fff;
        }

        .about-content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 10px auto;
            color: #666;
        }

        .contact-info {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .contact-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .contact-card h3 {
            margin: 10px 0;
            font-size: 1.5rem;
            color: #d8b035;
        }

        .contact-card p {
            font-size: 1.1rem;
            color: #666;
        }

        .map {
            margin-top: 40px;
            text-align: center;
            padding: 20px;
        }

        .map iframe {
            width: 100%;
            max-width: 600px;
            height: 400px;
            border: none;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .about-content h2 {
                font-size: 1.5rem;
            }

            .about-content p {
                font-size: 1rem;
            }

            .contact-card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Tentang Kami</h1>
    </div>
    <div class="about-content">
        <h2>Selamat Datang di Rumah Sosis</h2>
        <p>Rumah Sosis adalah tempat terbaik untuk menemukan beragam nugget dan sosis berkualitas tinggi. Kami berdedikasi untuk memberikan produk yang lezat dan bergizi yang cocok untuk berbagai kesempatan. Kami percaya bahwa makanan yang baik adalah kunci untuk hidup yang bahagia dan sehat.</p>
        <p>Dengan pengalaman bertahun-tahun dalam industri ini, kami berkomitmen untuk terus berinovasi dan memberikan pelayanan terbaik bagi pelanggan kami. Semua produk kami diproses dengan standar kualitas tinggi untuk memastikan kepuasan Anda.</p>
    </div>
    <div class="contact-info">
        <div class="contact-card">
            <h3>Telepon</h3>
            <p>0812 1734 840</p>
        </div>
        <div class="contact-card">
            <h3>Email</h3>
            <p>rumahsosis@gmail.com</p>
        </div>
        <div class="contact-card">
            <h3>Alamat</h3>
            <p>Jl. Kartini No.30, Mojayanaraya, Mojayan, Kec. Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57416</p>
        </div>
    </div>
    <div class="map">
        <h2>Lokasi Kami</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126609.43757894423!2d110.60899140773079!3d-7.711824323856199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd02c378288b6ede5!2sKpk%20Frozen%20food!5e0!3m2!1sen!2sid!4v1622784611208!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
    </div>
</body>
</html>
