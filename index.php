<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My awesome portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="site-main-wrapper">
        <button class="hamberger">
            <img src="./images/hamberger.svg" alt="">
        </button>

        <div class="mobile-nav">
            <button class="times"><img src="./images/times.svg" alt=""></button>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <header>
            <div class="container">
                <nav id="main-nav" class="flex items-center justify-between">
                    <div class="left flex items-center">
                        <div class="branding">
                            <img src="" alt="">
                        </div>
                        <div>
                            <a href="#">Home</a>
                            <a href="#about">About</a>
                            <a href="#services">Services</a>
                            <a href="#work">Work</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </div>
                    <div class="right">
                        <button class="btn btn-primary">Contact</button>
                    </div>
                </nav>
                <div class="hero flex items-center justify-between">
                    <div class="left flex-1 flex justify-center">
                        <img src="./images/man.png" alt="">
                    </div>
                    <div class="right flex-1">
                        <h6>Johnathan Vics</h6>
                        <h1>I’m a Creative <span>Designer</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco
                            laboris
                            nisi ut aliquip ex ea commodo consequat</p>
                        <div>
                            <button class="btn btn-secondary">DOWNLOAD CV</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="about">
            <div class="container flex items-center about-inner-wrap">
                <div class="flex-1">
                    <img class="about-me-img" src="./images/man-2.png" alt="">
                </div>
                <div class="flex-1 right">
                    <h1>About <span>Me</span></h1>
                    <h3>Hello! i’m Johnathan Vics.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat</p>
                    <div class="social">
                        <a href="#"><img src="./images/website.svg" alt=""></a>
                        <a href="https://www.facebook.com/codersgyan"><img src="./images/facebook.svg" alt=""></a>
                        <a href="https://twitter.com/CoderGyan"> <img src="./images/twitter.svg" alt=""></a>
                        <a href="#"> <img src="./images/pintrest.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services">
            <div class="container">
                <h1 class="section-heading"><span>Our </span>Services</h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="./images/brush.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./images/code.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./images/bag.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./images/desktop.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./images/media.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./images/phone.svg" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="freelancer">
            <h1>I Am Available For Freelancer.</h1>
            <p>We provide high standar clean website for your business solutions</p>
            <button class="btn btn-primary">Download CV</button>
        </section>
        <section class="reviews">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Client</h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="slider">
                    <div class="slide">
                        <img src="./images/lady.png" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="./images/lady.png" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="./images/lady.png" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="./images/lady.png" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>
        </section>

        <section id="work" class="work">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Works</h1>
                <p>We provide high standar clean website for your business solutions</p>

                <div class="card-wrapper">
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="./images/ph-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Blog</h1>
                <p>We provide high standar clean website for your business solutions</p>

                <div class="card-wrapper">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="./images/article-ph-1.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="./images/article-ph-1.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="./images/article-ph-1.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h1 class="section-heading">Contact <span>Us</span></h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="./images/phone-2.svg" alt="">
                        <h1>Call Us On</h1>
                        <h6>+985 123 7856</h6>
                    </div>
                    <div class="card">
                        <img src="./images/msg.svg" alt="">
                        <h1>Email Us At</h1>
                        <h6>support@companyname.com</h6>
                    </div>
                    <div class="card">
                        <img src="./images/map.svg" alt="">
                        <h1>Visit Office</h1>
                        <h6>99 S.t Jomblo Park Pekanbaru 28292. Indonesia</h6>
                    </div>

                </div>

                <form action="userinfo.php" method="POST">
                    <div class="input-wrap">
                        <input type="text" required name="name" placeholder="Your Name *">
                        <input type="email" required name="email" placeholder="Your Email *">
                    </div>
                    <div class="input-wrap-2">
                        <input type="text" required name="message" placeholder="Your Subject...">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message..."></textarea>
                    </div>
                    <div class="btn-wrapper">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <img class="footer-logo" src="./images/logo-2.svg" alt="">
            <div class="footer-socials">
                <a href="#"><img src="./images/website.svg" alt=""></a>
                <a href="https://www.facebook.com/codersgyan"><img src="./images/facebook.svg" alt=""></a>
                <a href="https://twitter.com/CoderGyan"> <img src="./images/twitter.svg" alt=""></a>
                <a href="#"> <img src="./images/pintrest.svg" alt=""></a>
                <a href="https://www.instagram.com/codersgyan/"> <img src="./images/instagram.svg" alt=""></a>
            </div>
            <div class="copyright">
                Copyright 2020 © Ashu Tamar
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>