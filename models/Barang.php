<?php

class Barang {
    private $conn;
    private $table_name = "barang";

    public $id;
    public $jenis_barang;
    public $nama_barang;
    public $produsen;
    public $stok;
    public $harga_beli;
    public $harga_jual;
    public $file_gambar;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function cari($keyword) {
        $query = "SELECT * FROM " . $this->table_name . " 
                  WHERE nama_barang LIKE ? OR jenis_barang LIKE ?";
        
        $stmt = $this->conn->prepare($query);
        $keyword = "%$keyword%";
        $stmt->bind_param("ss", $keyword, $keyword);
        $stmt->execute();
        return $stmt->get_result();
    }


    public function pesan($data) {
        $id_barang = $data['id_barang'];
        $harga_jual = $data['harga_jual'];
        $tanggal_pemesanan = $data['tanggal_pemesanan'];
        $jumlah_barang = $data['jumlah_barang'];
    
        // Ambil data barang
        $query_barang = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query_barang);
        $stmt->bind_param("i", $id_barang);
        $stmt->execute();
        $result_barang = $stmt->get_result();
        $row_barang = $result_barang->fetch_assoc();
    
        // Check if stock is sufficient
        if ($row_barang['stok'] < $jumlah_barang) {
            echo "<script>
                    alert('Stok barang tidak mencukupi!');
                    document.location.href = 'index.php?action=index';
                  </script>";
            return false;
        }
    
        // Hitung total harga
        $total_harga = $harga_jual * $jumlah_barang;
    
        // Kurangi stok barang
        $stok_saat_ini = $row_barang['stok'];
        $stok_terbaru = $stok_saat_ini - $jumlah_barang;
    
        // Update stok barang di database
        $query_update_stok = "UPDATE " . $this->table_name . " SET stok = ? WHERE id = ?";
        $stmt_update_stok = $this->conn->prepare($query_update_stok);
        $stmt_update_stok->bind_param("ii", $stok_terbaru, $id_barang);
        $stmt_update_stok->execute();
    
        // Simpan transaksi ke dalam tabel transaksi
        $username = $_SESSION['username'];
        $alamat = $_SESSION['alamat'];
        $nomor_hp = $_SESSION['nomor_hp'];
        $nama_barang = $row_barang['nama_barang'];
    
        $query_simpan_transaksi = "INSERT INTO transaksi (username, alamat, nomor_hp, nama_barang, harga_jual, jumlah_barang, total_harga, tanggal_pemesanan)
                                   VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_simpan_transaksi = $this->conn->prepare($query_simpan_transaksi);
        $stmt_simpan_transaksi->bind_param("ssssiiis", $username, $alamat, $nomor_hp, $nama_barang, $harga_jual, $jumlah_barang, $total_harga, $tanggal_pemesanan);
        $stmt_simpan_transaksi->execute();
    
        return $stmt_simpan_transaksi->affected_rows;
    }
    
}
?>
