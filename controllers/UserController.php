<?php
require_once 'config/database.php';
require_once 'models/User.php';

class UserController {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function register() {
        if (isset($_POST['register'])) {
            $user = new User($this->conn);
            $user->username = htmlspecialchars($_POST["username"]);
            $user->alamat = htmlspecialchars($_POST["alamat"]);
            $user->nomor_hp = htmlspecialchars($_POST["nomor_hp"]);
            $user->password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);

            if ($user->register()) {
                echo "<script>
                        alert('Berhasil Melakukan Pendaftaran');
                        document.location.href = 'index.php?action=login';
                      </script>";
            } else {
                echo "<script>
                        alert('Gagal Melakukan Pendaftaran!');
                      </script>";
            }
        }

        include 'views/user/register.php';
    }

    public function login() {
        if (isset($_POST['login'])) {
            $user = new User($this->conn);
            $user->username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            $result = $user->login();
            if ($result && password_verify($password, $result["password"])) {
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["username"] = $result["username"];
                $_SESSION["alamat"] = $result["alamat"];
                $_SESSION["nomor_hp"] = $result["nomor_hp"];

                echo "<script>
                        alert('Login berhasil!');
                        document.location.href = 'index.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Username atau password salah!');
                      </script>";
            }
        }

        include 'views/user/login.php';
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>
                alert('Logout berhasil!');
                document.location.href = 'index.php?action=landing';
              </script>";
    }
}
?>
