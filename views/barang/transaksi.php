<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .order-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .order-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .order-form label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }
        .order-form input[type="text"],
        .order-form input[type="date"],
        .order-form input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .order-form button {
            width: 100%;
            padding: 10px;
            background-color: #d8b035;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .order-form button:hover {
            background-color: #c3a02e;
        }
    </style>
</head>
<body>
    <div class="order-form">
        <h2>Form Transaksi</h2>
        <form action="" method="post">
            <input type="hidden" name="id_barang" value="<?= $row_barang['id']; ?>">
            <input type="hidden" name="harga_jual" value="<?= $row_barang['harga_jual']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?= $_SESSION['username']; ?>" readonly><br>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= $_SESSION['alamat']; ?>" readonly><br>
            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" name="nomor_hp" value="<?= $_SESSION['nomor_hp']; ?>" readonly><br>
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" value="<?= $row_barang['nama_barang']; ?>" readonly><br>
            <label for="harga_jual">Harga Jual:</label>
            <input type="text" name="harga_jual" value="<?= $row_barang['harga_jual']; ?>" readonly><br>
            <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
            <input type="date" name="tanggal_pemesanan" required><br>
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" name="jumlah_barang" required><br>
            <button type="submit" name="pesan">Simpan</button>
        </form>
    </div>
</body>
</html>
