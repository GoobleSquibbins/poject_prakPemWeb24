<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Layanan Permohonan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Masuk</h1>
            <p>Selamat Datang di<br><strong>Layanan Permohonan Berkas Daring</strong></p>
            <form id="loginForm">
                <div class="input-group">
                    <label for="email">Alamat Surel</label>
                    <input type="email" id="email" name="email" placeholder="surelAnda@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Masuk</button>
                <p class="register-link">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </form>
        </div>
        <div class="login-image">
            <h2>Isi lalu Kirim<br>Tunggu, dan Jadi!<br><span>Segampang itu~</span></h2>
            <p>2024, Government of Indonesia<br>Last Update 10 December 2024</p>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>