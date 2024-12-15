<?php
include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah NIK atau email sudah ada di database
    $check_query = "SELECT * FROM users WHERE nik = ? OR email = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $nik, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika NIK atau email sudah ada
        echo '<script>alert("NIK atau Email sudah terdaftar. Silakan gunakan data lain."); window.location="register.php";</script>';
    } else {
        // Simpan data ke database jika NIK atau email belum ada
        $insert_query = "INSERT INTO users (nik, nama, tanggal_lahir, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssss", $nik, $nama, $tanggal_lahir, $email, $password);

        if ($stmt->execute()) {
            echo '<script>alert("Pendaftaran berhasil! Silakan login."); window.location="login.php";</script>';
        } else {
            echo '<script>alert("Terjadi kesalahan saat menyimpan data."); window.location="register.php";</script>';
        }
    }
}
?>
