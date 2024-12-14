<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Limelight&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Limelight&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alatsi&family=Alexandria:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Limelight&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main">
        <img class="logo" src="../assets/logo.png" alt="">
        <p class="numBot">110</p>
        

        <div class="leftSec">
            <div class="formContainer">
                <h1>Daftar</h1>
                <h3>Selamat Datang di<br>
                    Layanan Permohonan Berkas Daring</h3>
                <form action="" method="post" id="formLogin">
                    <div class="inpGrp">
                        <label for="nik">Nomor Induk Kependudukan</label>
                        <input type="text" name="nik" id="nik" required placeholder="16 Digit NIK">
                    </div>
                    <div class="inpGrp">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" required placeholder="Masukan Nama Anda">
                    </div>
                    <div class="inpGrp">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" name="tanggal" id="tanggal" required placeholder="16 Digit NIK">
                    </div>
                    <div class="inpGrp">
                        <label for="email">Alamat Surel</label>
                        <input type="email" name="email" id="email" required placeholder="surelAnda@gmail.com">
                    </div>
                    <div class="inpGrp">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" id="password" required placeholder="Password">
                    </div>
                    <button class="btnLogin" form="formLogin">Daftar</button>
                </form>
                <p class="regLink">Sudah punya akun? <a href="#">Masuk Akun</a></p>
            </div>
        </div>

        <div class="rightSec">
            <p class="numTop">110</p>
            <div class="darken"></div>
            <img src="../assets/loginImg.jpg" alt="">
            <h1 class="heroTxt">Isi lalu Kirim Tunggu, dan
                Jadi! Segampang itu~</h1>
            <div class="watermark">
                <p>2024, Government of Indonesia<br>
                    Last Update 10 December 2024</p>
                <img src="../assets/image 6.png" alt="">
            </div>
        </div>

    </div>
</body>

</html>