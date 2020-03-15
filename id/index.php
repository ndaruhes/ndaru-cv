<?php require_once '../config/init.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhamad Ndaru | Portofolio</title>
    <?php require_once '../views/css.php'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- Intro -->
    <div class="intro-background" id="home">
        <div class="container intro-inner">
            <div class="row">
                <div class="col-xl-3 col-6 img-intro" data-aos="fade-up">
                    <img src="<?= BASEURL; ?>assets/images/me.jpeg" alt="Muhamad Ndaru" class="rounded-circle shadow">
                </div>
                <div class="col-xl-9 col-6 text-intro" data-aos="fade-down">
                    <p>Halo, Apa Kabar!<br> Saya <b>Muhamad Ndaru Hestiafin</b>!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="particles-js"></div>

    <!-- About Me -->
    <div class="container about-inner mt-5" id="intro" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-6 about-img about-img-display">
                <img src="<?= BASEURL; ?>assets/images/4fun.png" alt="Me For Fun">
            </div>
            <div class="col-xl-6 about-text mt-4">
                <h3 class="mb-3">Profil Singkat Tentang Saya</h3>
                <p>Saya <b>Muhamad Ndaru Hestiafin</b>. Saat ini saya merupakan seorang siswa di SMKN 2 Jakarta dan pemilik situs blog <a href="https://www.tukangilmu.com/">tukangilmu.com</a>. Saya suka berbagi, entah itu pengalaman atau ilmu yang saya miliki. Saya juga suka menantang diri saya untuk melakukan hal yang menurut saya sulit diselesaikan
                    demi mengubah keadaan sekitar menjadi lebih baik.</p>
                <p>Saya juga suka melatih gaya kepemimpinan saya dengan mengikuti kegiatan kepemimpinan pemuda
                    dan sosial, dengan tujuan agar kemampuan saya dalam memimpin suatu organisasi/kelompok dapat
                    berkembang dengan baik serta meningkatkan kemampuan bersosialisasi yang interaktif</p>
                <p>Saya juga suka melatih diri saya di bidang bahasa terutama bahasa inggris,
                    guna meningkatkan softskill yang dapat dipergunakan untuk mempermudah saya dalam meraih cita-cita</p>
                <p>Selain itu, untuk hiburan biasanya saya suka membuat project acak (prototype), bermain game, travel, and i'm so fucking like riding a motorcycle. That's Waw <i class="far fa-thumbs-up ml-1"></i></p>
            </div>
            <div class="col-xl-6 about-img">
                <img src="<?= BASEURL; ?>assets/images/4fun.png" alt="Me For Fun">
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div class="container skills-inner" id="skills">
        <div class="row">
            <div class="col-xl-6 skills-img" data-aos="fade-up">
                <img src="<?= BASEURL; ?>assets/images/monitor.png" alt="People and Monitor">
            </div>
            <div class="col-xl-6 skills-content">
                <h3 class="mb-4" data-aos="fade-left">Hard Skills Yang Saya Masih Terus Latih</h3>
                <div class="row">
                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill ui-ux">
                            <i class="fas fa-rocket fa-2x"></i>
                            <p class="pt-2">UI & UX Design</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill laravel">
                            <i class="fab fa-laravel fa-2x"></i>
                            <p class="pt-2">Laravel (50%)</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill bootstrap">
                            <i class="fab fa-bootstrap fa-2x"></i>
                            <p class="pt-2">Bootstrap</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill php">
                            <i class="fab fa-php fa-2x"></i>
                            <p class="pt-2">PHP & MySQL</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill git">
                            <i class="fab fa-git fa-2x"></i>
                            <p class="pt-2">GIT (90%)</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill adobe">
                            <i class="fab fa-adobe fa-2x"></i>
                            <p class="pt-2">Photoshop</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill wordpress">
                            <i class="fab fa-wordpress fa-2x"></i>
                            <p class="pt-2">CMS (70%)</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill blogger">
                            <i class="fab fa-blogger-b fa-2x"></i>
                            <p class="pt-2">Blogger</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-4 skill-spacing" data-aos="flip-left">
                        <div class="col-md-12 py-3 skill english">
                            <i class="fas fa-language fa-2x"></i>
                            <p class="pt-2">English (35%)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Point -->
    <div class="container point-inner" id="point">
        <div class="row">
            <div class="col-xl-6 point-content-spacing" data-aos="fade-up">
                <div class="col-md-12 point-content experience-content">
                    <p class="mb-3"><i class="fas fa-paper-plane mr-2"></i> Pengalaman Saya</p>
                    <ul>
                        <li>Kursus Web Design (2016)</li>
                        <li>Pelatihan Microsoft Office - Bina Nusantara(2016)</li>
                        <li>Mengembangkan Website SMKN 2 Jakarta</li>
                        <li>Pelatihan CRUD CodeIgniter - Bina Nusantara (2018)</li>
                        <li>Pelatihan GIT, Ruby, Ruby On Rails - SMK Negeri 2 Jakarta (2019)</li>
                        <li>Prakerin Selama 6 Bulan di PT. Widigital Tribuana (2018 - 2019)</li>
                        <li>Mengikuti Lomba Web Development Tingkat Nasional - Arkademy & IFest Unpad (2018 - 2019)</li>
                        <li>Ketua Organisasi IT Club SMKN 2 Jakarta</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 point-content-spacing" data-aos="fade-down">
                <div class="col-md-12 point-content achievement-content">
                    <p class="mb-3"><i class="fas fa-trophy mr-2"></i> Prestasi Saya</p>
                    <ul>
                        <li>Juara 1 O2SN Karate Putra Tingkat Jakarta Pusat (2018)</li>
                        <li>Juara 3 Musabaqah Tilawatil Quran Tingkat Sekolah SMKN 2 Jakarta (2019)</li>
                        <li>2x Juara 1 LKS Web Design & Development Tingkat Jakarta Pusat (2018 & 2019)</li>
                        <li>Juara Harapan 3 LKS Web Design & Development Tingkat DKI Jakarta (2019)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer-inner">
        <div class="container footer-content">
            <div class="contact" data-aos="zoom-in-up">
                <p class="contact-text"><b>Saya Siap</b>!! <br> Jangan ragu untuk menghubungi saya <i class="far fa-smile ml-1"></i></p>
                <div class="d-flex align-items-center justify-content-center mt-5">
                    <a href="mailto:muhamad.ndaru@gmail.com" target="_blank" class="contact-button email mr-2" title="Gmail">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=085717084803" target="_blank" class="contact-button whatsapp" title="Whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <p class="copyright-text">&copy; 2019 by Muhamad Ndaru <i class="fas fa-heart ml-1 text-danger"></i></p>
        </div>
    </div>

    <!-- Back To Top -->
    <a href="#home" class="btn rounded-circle shadow back-to-top-btn"><i class="fas fa-angle-double-up"></i></a>

    <?php require_once '../views/js.php'; ?>
</body>

</html>