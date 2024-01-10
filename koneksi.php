<?php
// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$dbname = "onlineshop"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data produk dari database
$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

// Tampilkan data produk
while ($row = $result->fetch_assoc()) {
            echo '<div class="col-sm-4 g-2">';
            echo '<div class="card">';
            echo '<img src="' . $row['gambar'] . '" class="card-img-top" alt="' . $row['nama'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['nama'] . '</h5>';
            echo '<p class="card-text">' . $row['diskripsi'] . '</p>';
            echo '<p class="card-text">Harga : $' . $row['harga'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

// Tutup koneksi
$conn->close();
?>
