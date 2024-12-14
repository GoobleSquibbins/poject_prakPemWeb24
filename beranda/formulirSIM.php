<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir SIM</title>
    <link rel="stylesheet" href="formulirSIM.css">

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
    <div class="nav">
        <a href="beranda.php" class="logo"><img src="../assets/logo.png" alt=""></a>
        <div class="links">
            <ol class="list_of_links">
                <li><a class="link_item" href="tentang.php">Tentang</a></li>
                <li><a class="link_item" href="informasi.php">Informasi</a></li>
                <li><a class="link_item" href="layanan.php">Layanan</a></li>
                <li><a class="link_item" href="hubungi.php">Hubungi</a></li>
            </ol>
        </div>
    </div>

    <div class="hero">
        <div class="heroYellow"></div>
        <div class="heroTxtSmall">
            <div class="heroSmallYellow"></div>
            <h1 class="heroSmallTxt">
                BERANDA > LAYANAN > SIM > E-SIM
            </h1>
        </div>
        <div class="heroText_big">
            <h1>Formulir Permohonan</h1>
        </div>
        <div class="call">
            110
        </div>
        <div class="gradient"></div>
    </div>

    <div class="main">
        <form action="" id="form1">
            <div class="secL">
                <h1 class="secLTitle">
                    Permohonan SIM Daring
                </h1>
                <div class="inpGrp">
                    <label class="lbl" for="nama">Nama Pemohon</label>
                    <input class="inp" type="text" name="nama" id="nama" required placeholder="Nama Lengkap"
                        oninput="validateNama(this)">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="nik">NIK</label>
                    <input class="inp" type="text" name="nik" id="nik" oninput="validateNik(this)" required
                        placeholder="16 Digit No. Kependudukan">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="">Unggah Bukti Foto/Video</label>
                    <label class="fileUp" for="file"><img src="../assets/File plus.png" alt=""></label>
                    <input class="inp" type="file" name="file" id="" required>
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="email">E-mail</label>
                    <input class="inp" type="email" name="email" id="email" required
                        placeholder="Alamat E-mail: contoh@gmail.com">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="tlpn">Nomor Telepon</label>
                    <input class="inp" type="text" name="tlpn" id="tlpn" required placeholder="+62"
                        oninput="validateTlpn(this)">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="lokasi">Lokasi Pengujian Mengemudi</label>
                    <input class="inp" type="text" name="lokasi" id="lokasi" required placeholder="Lokasi Kantor Uji">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="jenis">Jenis SIM</label>
                    <input class="inp" type="text" name="jenis" id="jenis" required placeholder="SIM A/B/C">
                </div>


                <!-- <button class="submit" form="form1">Unggah Pengaduan</button> -->
            </div>

            <div class="secR">
                <h1 class="secSubTitle">
                    Isian berikut harap diisi sesuai domisili Anda sekarang
                </h1>

                <div class="inpGrp">
                    <label class="lbl" for="prov">Provinsi</label>
                    <input class="inp" type="text" name="prov" id="prov" required
                        placeholder="Provinsi sesuai domisili">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="kabukota">Kabupaten/Kota</label>
                    <input class="inp" type="text" name="kabukota" id="kabukota" required
                        placeholder="Kabupaten/Kota sesuai domisili">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="kec">E-mail</label>
                    <input class="inp" type="text" name="kec" id="kec" required placeholder="Kecamatan sesuai domisili">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="kel">Kelurahan</label>
                    <input class="inp" type="text" name="kel" id="kel" required placeholder="Kecamatan sesuai domisili">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="pos">Kode Pos</label>
                    <input class="inp" type="text" name="pos" id="pos" required oninput="validatePos(this)"
                        placeholder="5 digit kode pos" min="5" max="5">
                </div>

                <div class="inpGrp">
                    <label class="lbl" for="ttd">Unggah Tanda Tangan Elektronik</label>
                    <label class="fileUp" for="file"><img src="../assets/File plus.png" alt=""></label>
                    <input class="inp" type="file" name="ttd" id="" required>
                </div>

                <button class="submit" form="form1">Unggah Permohonan</button>
        </form>
    </div>
    </div>

    <footer>
        <div class="footerTop">
            <div class="footerLeft">
                <div class="iconContainer">
                    <img class="footerIcon" src="../assets/polIconBig.png" alt="">
                    <p>
                        Kepolisian <br> Negara Republik <br> Indonesia
                    </p>
                </div>

                <p class="footerLTxt">
                    Jl. I Gusti Ngurah Rai No.12 <br>
                    Nusantara, Otoritas IKN 17510 <br>
                    aduan@polri.go.id <br>
                </p>
            </div>

            <div class="footerRight">
                <div class="layananKami">
                    <h3>Layanan Kami</h3>
                    <ul>
                        <li>SIM</li>
                        <li>SKCK</li>
                        <li>BPKB</li>
                        <li>Pengawalan</li>
                        <li>Pengaduan dan Laporan</li>
                        <li>Izin Keramaian</li>
                        <li>Pengamanan Objek khusus</li>
                        <li>Portal Kilas</li>
                    </ul>
                </div>
                <div class="footerCol1">
                    <div class="tentangPolri">
                        <h3>Tentang Polri</h3>
                        <ul>
                            <li>Visi dan Misi</li>
                            <li>Tentang Kapolri</li>
                            <li>Kilas Balik</li>
                            <li>Makna dari Logo</li>
                        </ul>
                    </div>
                    <div class="hubungiPolri">
                        <h3>Hubungi Polri</h3>
                        <ul>
                            <li>Hotline 110</li>
                            <li>Aplikasi Presisi</li>
                            <li>Kontak Resmi</li>
                        </ul>
                    </div>
                </div>
                <div class="footerCol2">
                    <div class="informasiPublik">
                        <h3>Informasi Publik</h3>
                        <ul>
                            <li>Rekayasa Lalu Lintas</li>
                            <li>Portal Darurat</li>
                            <li>Informasi Harian</li>
                            <li>UU dan Peraturan</li>
                        </ul>
                    </div>
                    <div class="hotlineDarurat">
                        <h3>Hotline Darurat</h3>
                        <ul>
                            <li>Ambulan 112</li>
                            <li>Pemadam Kebakaran 112</li>
                            <li>SAR 112</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footerDown">
            <div class="contact">
                <ul>
                    <li>Contact Us</li>
                    <li>Feedback</li>
                    <li>FAQ</li>
                    <li>Share Your Views @ Reach</li>
                    <li>
                        <div class="footerSosmed">
                            <img src="../assets/IconFacebook.png" alt="">
                            <img src="../assets/IconInstagram.png" alt="">
                            <img src="../assets/IconTwitter.png" alt="">
                            <img src="../assets/IconYT.png" alt="">
                            <img src="../assets/IconAt.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="rockBottom">
                <a href="#">Report Vulnerability</a>
                <img src="../assets/External link.png" alt=""><span> | </span>
                <a href="#">Privacy Statement</a><span> | </span>
                <a href="#">Term of Use</a><span> | </span>
                <a href="#">Sitemap</a>

                <div class="lastUpdate">
                    <p>2024. Government of Indonesia <br> Last Update 10 December 2024</p>
                    <img src="../assets/image 6.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <script>
        function validatePos(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 5) {
                input.value = input.value.slice(0, 5);
            }
        }

        function validateNik(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 16) {
                input.value = input.value.slice(0, 16);
            }
        }

        function validateTlpn(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
        }

        function validateNama(input) {
            input.value = input.value.replace(/[^a-zA-Z]/g, '');
        }
    </script>
</body>

</html>