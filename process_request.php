<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $applicant_name = $_POST['nama'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $phone_number = $_POST['tlpn'];
    $driving_test_location = $_POST['lokasi'];
    $sim_type = $_POST['jenis'];
    $province = $_POST['prov'];
    $city = $_POST['kabukota'];
    $district = $_POST['kec'];
    $subdistrict = $_POST['kel'];
    $postal_code = $_POST['pos'];

    // Validasi input wajib
    if (empty($applicant_name) || empty($nik) || empty($email) || empty($phone_number)) {
        echo '<script>alert("Semua field harus diisi."); window.location="index.php";</script>';
        exit;
    }

    // Direktori penyimpanan file
    $uploads_dir = 'uploads';
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir, 0777, true); // Buat folder jika belum ada
    }

    // Validasi dan upload file foto KTP
    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    $ktp_photo = $_FILES['ktp_photo']['name'];
    $ktp_photo_tmp = $_FILES['ktp_photo']['tmp_name'];
    $ktp_extension = pathinfo($ktp_photo, PATHINFO_EXTENSION);

    if (!in_array(strtolower($ktp_extension), $allowed_extensions)) {
        echo '<script>alert("Format file KTP tidak didukung. Hanya jpg, jpeg, png."); window.location="index.php";</script>';
        exit;
    }

    $ktp_photo_path = $uploads_dir . '/' . uniqid('ktp_') . '.' . $ktp_extension;
    if (!move_uploaded_file($ktp_photo_tmp, $ktp_photo_path)) {
        echo '<script>alert("Gagal mengunggah foto KTP."); window.location="index.php";</script>';
        exit;
    }

    // Validasi dan upload file tanda tangan elektronik
    $electronic_signature = $_FILES['electronic_signature']['name'];
    $electronic_signature_tmp = $_FILES['electronic_signature']['tmp_name'];
    $signature_extension = pathinfo($electronic_signature, PATHINFO_EXTENSION);

    if (!in_array(strtolower($signature_extension), $allowed_extensions)) {
        echo '<script>alert("Format file tanda tangan tidak didukung. Hanya jpg, jpeg, png."); window.location="index.php";</script>';
        exit;
    }

    $electronic_signature_path = $uploads_dir . '/' . uniqid('signature_') . '.' . $signature_extension;
    if (!move_uploaded_file($electronic_signature_tmp, $electronic_signature_path)) {
        echo '<script>alert("Gagal mengunggah tanda tangan elektronik."); window.location="index.php";</script>';
        exit;
    }

    // Simpan data ke database dengan prepared statement untuk mencegah SQL Injection
    $query = $conn->prepare("INSERT INTO sim_requests (
        applicant_name, nik, ktp_photo, email, phone_number, 
        driving_test_location, sim_type, province, city, district, 
        subdistrict, postal_code, electronic_signature
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($query) {
        $query->bind_param(
            "sssssssssssss", 
            $applicant_name, $nik, $ktp_photo_path, $email, $phone_number, 
            $driving_test_location, $sim_type, $province, $city, $district, 
            $subdistrict, $postal_code, $electronic_signature_path
        );

        if ($query->execute()) {
            echo '<script>alert("Permohonan berhasil dikirim!"); window.location="index.php";</script>';
        } else {
            echo '<script>alert("Terjadi kesalahan saat menyimpan data."); window.location="index.php";</script>';
        }
    } else {
        echo '<script>alert("Terjadi kesalahan pada query."); window.location="index.php";</script>';
    }
}
?>
