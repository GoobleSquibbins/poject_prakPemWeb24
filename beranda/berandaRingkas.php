<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir SIM</title>
    <link rel="stylesheet" href="berandaRingkas.css">

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
    <div class="hero">
        <div class="heroContent">
            <h1 class="logo">POLRI.GO.ID</h1>
            <div class="Title">
                <h1>Selamat Datang di Polri.go.id</h1>
                <p>Layanan dan informasi Kepolisian</p>
            </div>
            <div class="cardHolder">
                <div class="cards" onclick="window.location.href = 'hubungi.php'">
                    <img class="cardicon" src="../assets/phoneIcon.png" alt="">
                    <h3>Hubungi Kami</h3>
                    <p>Hubungi layanan kepolisian lokal daerah Anda</p>
                </div>
                <div class="cards" onclick="window.location.href = 'layanan.php'">
                    <img class="cardicon" src="../assets/informationIcon.png" alt="">
                    <h3>Informasi Layanan</h3>
                    <p>Informasi terkait layanan permohonan SIM, SKCK, dan
                    BPKB</p>
                </div>
                <div class="cards" onclick="window.location.href = 'pengaduan.php'">
                    <img class="cardicon" src="../assets/metalGearAlert.png" alt="">
                    <h3>Portal Aduan</h3>
                    <p>Pelaporan dan dukungan yang berkaitan dengan lini kepolisian</p>
                </div>
                <div class="cards" onclick="window.location.href = 'informasi.php'">
                    <img class="cardicon" src="../assets/newsIcon.png" alt="">
                    <h3>Berita</h3>
                    <p>Berita Data dan Statistik berkaitan dengan kinerja kepolisian</p>
                </div>
                <div class="cards" onclick="window.location.href = 'tentang.php#end'">
                    <img class="cardicon" src="../assets/starIcon.png" alt="">
                    <h3>Visi dan Misi</h3>
                    <p>Bagaimana kami bekerja dan tujuan kerja kami</p>
                </div>
                <div class="cards">
                    <img class="cardicon" src="../assets/sosIcon.png" alt="">
                    <h3>Hotline Darurat</h3>
                    <p>Kontak Darurat Hotline 110 untuk kejadian luarbiasa</p>
                </div>
            </div>
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
</body>

</html>