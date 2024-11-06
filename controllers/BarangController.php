<?php
require_once 'config/database.php';
require_once 'models/Barang.php';

class BarangController {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
        session_start(); // Start the session
    }

    public function landing() {
        require_once 'views/home/index.php';
    }

    public function about(){
        require_once 'views/about/index.php';
    }

    public function index() {
        $barang = new Barang($this->conn);
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $result = $barang->cari($keyword);
        } else {
            $result = $barang->getAll();
        }
        include 'views/barang/index.php';
    }

    public function pesan() {
        // Check if the session variables are set
        if (!isset($_SESSION['username'])) {
            echo "<script>
                    alert('Silahkan login terlebih dahulu!');
                    document.location.href = 'index.php?action=login';
                  </script>";
            exit;
        }

        if (!isset($_GET['id'])) {
            echo "<script>
                    alert('ID Barang tidak ditemukan!');
                    document.location.href = 'index.php';
                  </script>";
            exit;
        }

        $id_barang = $_GET['id'];
        $barang = new Barang($this->conn);
        $result_barang = $barang->getById($id_barang);

        // Check if the query returns any result
        if ($result_barang->num_rows === 0) {
            echo "<script>
                    alert('Barang tidak ditemukan!');
                    document.location.href = 'index.php';
                  </script>";
            exit;
        }

        $row_barang = $result_barang->fetch_assoc();

        // Check if the stock is 0
        if ($row_barang['stok'] == 0) {
            echo "<script>
                    alert('Stok barang habis!');
                    document.location.href = 'index.php';
                  </script>";
            exit;
        }

        if (isset($_POST['pesan'])) {
            if ($barang->pesan($_POST) > 0) {
                echo "<script>
                        alert('Pesanan berhasil disimpan!');
                        document.location.href = 'index.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Pesanan gagal disimpan!');
                      </script>";
            }
        }

        include 'views/barang/transaksi.php';
    }
}
?>
