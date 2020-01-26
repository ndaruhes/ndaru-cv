<?php require_once '../config/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhamad Ndaru | Portfolio</title>
    <?php require_once '../views/css.php'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- Intro -->
    <div class="intro-background" id="home">
        <div class="container intro-inner">
            <div class="row">
                <div class="col-xl-3 col-6 img-intro">
                    <img src="<?= BASEURL; ?>assets/images/me.jpeg" alt="Muhamad Ndaru" class="rounded-circle shadow">
                </div>
                <div class="col-xl-9 col-6 text-intro">
                    <p>Hello There,<br> I'm <b>Muhamad Ndaru Hestiafin</b>!</p>
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
                <h3 class="mb-3">Short Profile About Me</h3>
                <p>I'm <b>Muhamad Ndaru Hestiafin</b>. At the moment, i'am a vocational high school student at SMKN 2 Jakarta and owner of <a href="https://www.tukangilmu.com/">tukangilmu.com</a> blog site. I like to share, whether it's about my experience and skill what i have. I also like to challenge myself to do things that i find it difficult to solve the problems related my future and the things i want to do to change things around for the better.</p>
                <p>I also like to train my leadership style, socialization ability, and english ability to improve my soft skills.</p>
                <p>Uhm, I also love youth and social leadership activities because it can train me to socialize and broaden my horizons about good leadership to achieve my goals.</p>
                <p>Besides, for the entertainment i usually like make a random project (prototype), playing games, travel, and i'm so fucking like riding a motorcycle. That's Waww <i class="far fa-thumbs-up ml-1"></i></p>
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
                <h3 class="mb-4" data-aos="fade-left">Hard Skills That I Still Continue To Practice</h3>
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
                    <p class="mb-3"><i class="fas fa-paper-plane mr-2"></i> My Experiences</p>
                    <ul>
                        <li>Take a Web Design Course (2016)</li>
                        <li>Take Microsoft Office Training - Bina Nusantara (2016)</li>
                        <li>Develop a SMKN 2 Jakarta's Website</li>
                        <li>Take CodeIgniter CRUD Training - Bina Nusantara (2018)</li>
                        <li>Take GIT, Ruby, Ruby On Rails Training - SMK Negeri 2 Jakarta (2019)</li>
                        <li>Industrial Work Practice For 6 Months at PT. Widigital Tribuana (2018 - 2019)</li>
                        <li>Chair Of IT Club Organization at 2 Vocational High School Jakarta</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 point-content-spacing" data-aos="fade-down">
                <div class="col-md-12 point-content achievement-content">
                    <p class="mb-3"><i class="fas fa-trophy mr-2"></i> My Achievement</p>
                    <ul>
                        <li>1st Place National Student Sports Olympiad (O2SN) Karate in Central Jakarta Level (2018)</li>
                        <li>3rd Place Musabaqah Tilawatil Quran School Level - 2 Vocational High School Jakarta (2019)</li>
                        <li>2x 1st Place Web Design & Development Student Competition (LKS) in Central Jakarta Level (2018 & 2019)</li>
                        <li>Runner-up 3 Web Design & Development Student Competition (LKS) in DKI Jakarta Level (2019)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer-inner">
        <div class="container footer-content">
            <div class="contact" data-aos="zoom-in-up">
                <p class="contact-text"><b>I'm Ready</b>!! <br> Feel free to contact me <i class="far fa-smile ml-1"></i></p>
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