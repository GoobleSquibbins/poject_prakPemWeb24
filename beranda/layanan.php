<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="stylesheet" href="layanan.css">

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
        <img src="../assets/layananHero.png" alt="">
        <div class="heroTxtSmall">
            <div class="heroSmallYellow"></div>
            <h1 class="heroSmallTxt">
                BERANDA > LAYANAN
            </h1>
        </div>
        <div class="heroText_big">
            <h1>PERMOHONAN PEMBUATAN<br>
                DAN PENGURUSAN BERKAS</h1>
        </div>
        <div class="gradient"></div>
    </div>

    <div class="btnHolder">
        <button class="btnLayanan" onclick="window.location.href ='permohonanSIM.php'">SIM</button>
        <button class="btnLayanan" onclick="window.location.href ='bpkb_skck.php#bpkb'">BPKB</button>
        <button class="btnLayanan" onclick="window.location.href ='../beranda/PermohonanSKCK.php'">SKCK</button>
        <button class="btnLayanan" onclick="window.location.href ='bpkb_skck.php#kawal'">Pengawalan Jalan</button>
    </div>

    <div class="content">
        <div class="mainContent">
            <h1 class="contentTitle">Unduh Aplikasi PRESISI Polri</h1>
            <div class="txtWrap">
                <div class="yellowLine"></div>
                <div class="mainContentTxt">
                    <p>
                        PRESISI Polri adalah kebutuhan akan sebuah sistem dalam menyatukan seluruh layanan data,
                        memberikan
                        kemudahan dalam membuat/membangun sebuah layanan baru, mengintegrasikan layanan yang telah ada
                        dan
                        membuat sebuah standarisasi layanan dari hulu hingga hilir.
                        <br><br>
                        Kemampuan tersebut tidak hanya didukung dari spesifikasi perangkat keras (hardware) yang menjadi
                        dasar
                        dari pembuatan, juga bagaimana sistem operasi dan aplikasi yang diterapkan dapat menjadi satu
                        kesatuan
                        sistem yang cepat, aman dan terkontrol.
                        Layanan pada PRESISI memiliki kelebihan dimana semua layanan Polri untuk masyarakat akan ada di
                        aplikasi
                        PRESISI Polri. Sistem yang cepat dan aman tentunya menjadi keunggulan bagi semua layanan yang
                        ada di
                        PRESISI Polri. Dari mulai mengurus pajak kendaraan, SIM, mengurus izin keperluan masyarakat,
                        informasi
                        polri serta panggilan darurat 110 yang dapat diakses dengan mudah di aplikasi presisi ini.
                        PRESISI Polri menyediakan fitur-fitur layanan publik online agar memudahkan masyarakat yang
                        membutuhkannya.
                        <br><br>
                        Fitur-fitur layanan publik online yang disediakan PRESISI Polri adalah sebagai berikut:
                        <br><br>
                    <ul>
                        <li>SKCK (Pembuatan SKCK online)</li>
                        <li>SIM (Pembuatan SIM baru dan perpanjangan SIM online)</li>
                        <li>KTA Satpam (Pembuatan Kartu keanggotaan Satpam online)</li>
                        <li>SP2HP (Layanan informasi perkembangan perkara)</li>
                        <li>E-Tilang (Layanan pengurusan tilang online)</li>
                        <li>Pajak Kendaraan (Layanan pajak kendaraan online)</li>
                        <li>Izin Keramaian (Layanan perizinan untuk pengadaan acara yang melibatkan orang banyak)</li>
                        <li>PROPAM/DUMAS (Layanan Pengaduan Online)</li>
                        <li>Izin Senjata Api (Perijinan untuk kepemilikan senjata api)</li>
                        <li>110 (Layanan call center kepolisian untuk pengaduan masyarakat)</li>
                    </ul>

                    Selain fitur-fitur layanan publik diatas, PRESISI juga menyediakan fitur informasi tentang
                    kepolisian
                    untuk masyarakat umum, seperti :
                    <ul>
                        <li>Museum Polri (Informasi tentang sejarah kepolisian RI)</li>
                        <li>TV/Radio Polri (Informasi kepolisian digital yang diselingi hiburan aktif)</li>
                        <li>Lokasi Rawan (Informasi lokasi-lokasi rawan)</li>
                        <li>Pos Kesehatan (Informasi layanan kesehatan)</li>
                        <li>Selain itu, juga tersedia fitur berita/informasi terkini atau trending di masyarakat yang
                            memperluas
                            wawasan kita.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="side">
            <img class="appImg" src="../assets/image 9.png" alt="">
            <img src="../assets/image 10.png" alt="">
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