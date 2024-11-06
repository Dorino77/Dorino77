<?php
include 'views/layouts/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <style>
        /* existing styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        .search-bar {
            margin: 20px 0;
            text-align: center;
        }

        .search-bar input[type="text"] {
            width: 70%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #d8b035;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #EED17C;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px 0;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 10px 0;
            color: #333;
        }

        .card p {
            margin: 5px 0;
            color: #666;
        }

        .card .actions {
            margin-top: 15px;
        }

        .card .actions a {
            color: #4CAF50;
            text-decoration: none;
            margin: 0 5px;
            padding: 10px 15px;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .card .actions a:hover {
            background-color: #4CAF50;
            color: white;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="search-bar">
        <form action="index.php" method="GET">
            <input type="text" name="keyword" placeholder="Cari">
            <input type="submit" value="Cari">
        </form>
    </div>
    <div class="card-container">
        <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="card">
            <img src="<?= '../admin/assets/img/' . $row["file_gambar"]; ?>" alt="<?= $row["nama_barang"]; ?>">
            <h3><?= $row["nama_barang"]; ?></h3>
            <p><strong>Jenis:</strong> <?= $row["jenis_barang"]; ?></p>
            <p><strong>Stok:</strong> <?= $row["stok"]; ?></p>
            <p><strong>Harga:</strong> Rp <?= number_format($row["harga_jual"], 0, ',', '.'); ?></p>
            <div class="actions">
                <a href="index.php?action=pesan&id=<?= $row["id"]; ?>">Pesan</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>
