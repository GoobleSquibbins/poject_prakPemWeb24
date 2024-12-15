<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
    <link rel="stylesheet" href="pengaduan.css">

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
        <div class="left_diagonal"></div>

        <img src="../assets/pengaduanHero.png" alt="">
        <div class="heroTxtSmall">
            <div class="heroSmallYellow"></div>
            <h1 class="heroSmallTxt">
                BERANDA > LAYANAN > PENGADUAN
            </h1>
        </div>
        <div class="heroText_big">
            <h1>DUMAS PRESISI</h1>
        </div>
        <div class="heroSubTxt">
            Pengaduan Masyarakat Prediktif, Responsibilitas, Transparansi Berkeadilan
        </div>
        <div class="call">
            110
        </div>
        <div class="gradient"></div>
    </div>

    <div class="main">
        <div class="form">
            <h1 class="formTitle">FORMULIR PENGADUAN</h1>
            <form action="" id="form1">
                <label class="lbl" for="nama">Nama</label>
                <input class="inp" type="text" name="nama" id="nama" required placeholder="Nama Lengkap"
                    oninput="validateNama(this)">

                <label class="lbl" for="nik">NIK</label>
                <input class="inp" type="text" name="nik" id="nik" required placeholder="16 Digit No. Kependudukan"
                    oninput="validateNik(this)">

                <label class="lbl" for="email">E-mail</label>
                <input class="inp" type="email" name="email" id="email" required
                    placeholder="Alamat E-mail: contoh@gmail.com">

                <label class="lbl" for="pesan">Pesan</label>
                <input class="inp" type="text" name="pesan" id="pesan" required placeholder="Laporan/Aduan">

                <label class="lbl" for="">Unggah Bukti Foto/Video</label>
                <label class="fileUp" for="file"><img src="../assets/File plus.png" alt=""></label>
                <input class="inp" type="file" name="file" id="file" required>

                <button class="submit" form="form1">Unggah Pengaduan</button>
            </form>
        </div>
        <div class="wholelottatext">
            <div class="idfk">
                <img src="../assets/pengaduanTxtImg.png" alt="">
                <p>
                    Fitur Pengaduan dan Pelaporan Masyarakat pada portal informasi dan layanan kepolisian dirancang
                    untuk
                    mendukung visi Polri melalui prinsip Dumas Presisi (Pengaduan Masyarakat Presisi), yang
                    menitikberatkan
                    pada transparansi, akuntabilitas, dan pemanfaatan teknologi untuk pelayanan yang lebih baik. Fitur
                    ini
                    menyediakan platform modern yang memudahkan masyarakat melaporkan berbagai kejadian, seperti tindak
                    pidana, pelanggaran hukum, gangguan keamanan, hingga masalah sosial yang memerlukan perhatian
                    kepolisian.
                    <br><br>
                    Dengan antarmuka yang intuitif dan ramah pengguna, fitur ini memungkinkan pelapor untuk memasukkan
                    informasi secara detail, termasuk kronologi kejadian, lokasi, serta melampirkan bukti pendukung
                    seperti
                    foto, video, atau dokumen lainnya. Setiap laporan akan langsung diteruskan ke unit atau bagian
                    terkait
                    menggunakan sistem yang terintegrasi dengan prosedur penanganan kepolisian. Melalui teknologi
                    berbasis
                    real-time, pelapor dapat memantau perkembangan status laporan mereka, mulai dari penerimaan laporan,
                    proses verifikasi, hingga tahap tindak lanjut, memberikan rasa kepercayaan dan kepastian dalam
                    prosesnya.
                    <br><br>
                    Sebagai bagian dari semangat Dumas Presisi, fitur ini juga memastikan proses pelaporan yang cepat,
                    aman,
                    dan bebas hambatan. Semua laporan yang masuk akan dikelola secara profesional dan transparan, serta
                    pelapor dapat menerima pembaruan secara berkala melalui notifikasi di aplikasi atau email. Selain
                    itu,
                    untuk menjaga kerahasiaan dan keamanan, sistem ini dilengkapi dengan fitur anonimitas bagi pelapor
                    yang
                    menginginkan privasi lebih lanjut.
                    Melalui fitur Pengaduan dan Pelaporan Masyarakat, portal ini menjadi wujud nyata komitmen kepolisian
                    dalam membangun hubungan yang lebih erat dan harmonis dengan masyarakat. Dengan menjunjung tinggi
                    nilai
                    keterbukaan dan inovasi teknologi, Polri hadir tidak hanya sebagai penegak hukum, tetapi juga
                    sebagai
                    mitra terpercaya dalam menciptakan rasa aman dan keadilan bagi semua kalangan.
                </p>
            </div>

        </div>
    </div>

    <div class="botTxt">
        <p>
            Setiap kata yang Anda tuliskan, setiap suara yang Anda sampaikan, dan setiap laporan yang Anda buat, adalah
            cahaya yang menerangi jalan kami, bangsa ini, dan negeri ini, membuka lembaran baru untuk membangun jembatan
            menuju kesejahteraan bersama
        </p>
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
                        <ul>
                            <li><a href="permohonanSIM.php" class="footerLinks">SIM</a></li>
                            <li><a href="permohonanSKCK.php" class="footerLinks">SKCK</a></li>
                            <li><a href="bpkb_skck.php#bpkb" class="footerLinks">BPKB</a></li>
                            <li><a href="bpkb_skck.php#kawal" class="footerLinks">Pengawalan</a></li>
                            <li><a href="pengaduan.php" class="footerLinks">Pengaduan dan Laporan</a></li>
                            <li><a href="#" class="footerLinks">Izin Keramaian</a></li>
                            <li><a href="#" class="footerLinks">Pengamanan Objek khusus</a></li>
                            <li><a href="informasi.php" class="footerLinks">Portal Kilas</a></li>
                        </ul>

                    </ul>
                </div>
                <div class="footerCol1">
                    <div class="tentangPolri">
                        <h3>Tentang Polri</h3>
                        <ul>
                            <li><a href="tentang.php" class="footerLinks">Visi dan Misi</a></li>
                            <li><a href="tentang.php" class="footerLinks">Tentang Kapolri</a></li>
                            <li><a href="tentang.php" class="footerLinks">Kilas Balik</a></li>
                            <li><a href="tentang.php" class="footerLinks">Makna dari Logo</a></li>
                        </ul>
                    </div>
                    <div class="hubungiPolri">
                        <h3>Hubungi Polri</h3>
                        <ul>
                            <li><a href="hubungi.php" class="footerLinks">Hotline 110</a></li>
                            <li><a href="hubungi.php" class="footerLinks">Aplikasi Presisi</a></li>
                            <li><a href="hubungi.php" class="footerLinks">Kontak Resmi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footerCol2">
                    <div class="informasiPublik">
                        <h3>Informasi Publik</h3>
                        <ul>
                            <li><a href="informasi.php" class="footerLinks">Rekayasa Lalu Lintas</a></li>
                            <li><a href="informasi.php" class="footerLinks">Portal Darurat</a></li>
                            <li><a href="informasi.php" class="footerLinks">Informasi Harian</a></li>
                            <li><a href="informasi.php" class="footerLinks">UU dan Peraturan</a></li>
                        </ul>
                    </div>
                    <div class="hotlineDarurat">
                        <h3>Hotline Darurat</h3>
                        <ul>
                            <li><a href="hubungi.php" class="footerLinks">Ambulan 112</a></li>
                            <li><a href="hubungi.php" class="footerLinks">Pemadam Kebakaran 112</a></li>
                            <li><a href="hubungi.php" class="footerLinks">SAR 112</a></li>
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
        function validateNik(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 16) {
                input.value = input.value.slice(0, 16);
            }
        }

        function validateNama(input) {
            input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
        }
    </script>
</body>

</html>