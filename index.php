<?php 
    require __DIR__ ."/db/app.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <div class="header">
            <div class="top-header">
                <div class="container">
                    <div class="row r1 align-items-center">
                        <div class="p-2 img col-md-3 col-xs-12 cuda">
                            <p>Cuda</p>
                        </div>
                        <div class="p-2 nav col-md-9 col-xs-12 justify-content-md-end justify-content-xs-center">
                            <ul>
                                <li class="d-inline"><a href="#">HOME</a></li>
                                <li class="d-inline"><a href="#">ABOUT</a></li>
                                <li class="d-inline"><a href="#">WORK</a></li>
                                <li class="d-inline"><a href="#">BLOG</a></li>
                                <li class="d-inline"><a href="#">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-header">
                <div class="container">
                    <div class="row align-items-center r2">
                        <div class="col-12 p-2 text-center">
                            <h3>Hi there! We are the new kids on the block and we build awesome websites and mobile apps.</h3>
                        </div>
                        <div class="col-12 p-2 text-center">
                            <form action="#contact">
                                <button id="button1">WORK WITH US!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="services">
            <div class="top-services">
                <div class="container">
                    <div class="row r3 justify-content-center">
                        <div class="col-12 p-2 d-flex justify-content-center align-items-end">
                            <h2>SERVICES WE PROVIDE</h2>
                        </div>
                        <span class="line1"></span>
                        <div class="col-12 p-2 text-center">
                            <p>We are working with both individuals and businesses from all over the globe to create awesome websites and applications.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mid-services">
                <div class="container">
                    <div class="row align-items-center r4">
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/flag.png" alt="flag">
                            <h3>BRANDING</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/pencil.png" alt="pencil">
                            <h3>DESIGN</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/cogs.png" alt="cogs">
                            <h3>DEVELOPMENT</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/rocket.png" alt="rocket">
                            <h3>ROCKET SCIENCE</h3>
                            <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="team">
            <div class="top-team">
                <div class="container">
                    <div class="row r5 justify-content-center">
                        <div class="col-12 p-2 d-flex text-center justify-content-center align-items-end">
                            <h2>MEET OUR BEAUTIFUL TEAM</h2>
                        </div>
                        <span class="line2"></span>
                        <div class="col-12 p-2 text-center">
                            <p>We are a small team of designers and developers, who help brands with big ideas</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mid-team">
                <div class="container">
                    <div class="row r6">
                        <div class="col-lg-3 col-xs-12 p-2">
                            <span class="dot1"></span>
                            <h3>ANNE HATHAWAY</h3>
                            <p>CEO / Marketing Guru</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                            <ul>
                                <li class="d-inline"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-xs-12 p-2">
                            <span class="dot1"></span>
                            <h3>KATE UPTON</h3>
                            <p>Creative Director</p>
                            <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
                            <ul>
                                <li class="d-inline"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-xs-12 p-2">
                            <span class="dot1"></span>
                            <h3>OLIVIA WILDE</h3>
                            <p>Lead Designer</p>
                            <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magggni dolores eos qui ratione voluptatem nesciunt.</p>
                            <ul>
                                <li class="d-inline"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-xs-12 p-2">
                            <span class="dot1"></span>
                            <h3>ASHLEY GREENE</h3>
                            <p>SEO / Developer</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <ul>
                                <li class="d-inline"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="d-inline"><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="skills">
            <div class="top-skills">
                <div class="container">
                    <div class="row r7 justify-content-center">
                        <div class="col-12 p-2 d-flex justify-content-center align-items-end">
                            <h2>WE GOT SKILLS!</h2>
                        </div>
                        <span class="line3"></span>
                        <div class="col-12 p-2 text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mid-skills">
                <div class="container">
                    <div class="row r8">
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/aps1.png" alt="web-design">
                            <h3>WEB DESIGN</h3>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/aps2.png" alt="html-css">
                            <h3>HTML / CSS</h3>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/aps3.png" alt="graphic-design">
                            <h3>GRAPHIC DESIGN</h3>
                        </div>
                        <div class="col-md-3 col-xs-12 p-2">
                            <img src="images/aps4.png" alt="ui-ux">
                            <h3>UI / UX</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="about">
            <div class="top-about">
                <div class="container">
                    <div class="row r9 justify-content-center">
                        <div class="col-12 p-2 d-flex justify-content-center text-center align-items-end">
                            <h2>WHAT PEOPLE SAY ABOUT US</h2>
                        </div>
                        <span class="line4"></span>
                        <div class="col-12 p-2 d-flex justify-content-center align-items-start">
                            <p>Our clients love us!</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mid-about">
                <div class="container">
                    <div class="row r10">
                        <div class="col-md-6 col-xs-12 p-2 d-flex">
                            <div><span class="dot2"></span></div>
                            <div>
                                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                                <h3>CHANEL IMAN</h3>
                                <p>CEO of Pinterest</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 p-2 d-flex">
                            <div><span class="dot2"></span></div>
                            <div>
                                <p>"Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta."</p>
                                <h3>ADRIANA LIMA</h3>
                                <p>Founder of Instagram</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 p-2 d-flex">
                            <div><span class="dot2"></span></div>
                            <div>
                                <p>"Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta."</p>
                                <h3>ANNE HATHAWAY</h3>
                                <p>Lead Designer at Behance</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 p-2 d-flex">
                            <div><span class="dot2"></span></div>
                            <div>
                                <p>"Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque."</p>
                                <h3>EMMA STONE</h3>
                                <p>Co-Founder of Shazam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact" id="contact">
            <div class="top-contact">
                <div class="container">
                    <div class="row r11 justify-content-center">
                        <div class="col-12 p-2 d-flex justify-content-center align-items-end">
                            <h2>GET IN TOUCH</h2>
                        </div>
                        <span class="line5"></span>
                        <div class="col-12 p-2 text-center">
                            <p>16000 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mid-contact">
                <div class="container">
                    <div class="col-12 p-2 text-center b3">
                        <button id="button3">CONTACT US</button>
                    </div>
                    <!-- <div class="col-12 p-2 text-center s1">
                        <span>Your message was sent! We will get back to you as soon as possible.</span>
                    </div> -->
                    <form class="forma" action="index.php" method="post">
                        <div class="row r12">
                            <div class="col-md-6 col-xs-12 p-2 d-flex justify-content-end">
                                <input type="text" placeholder="Your Name*" name="vardas">
                            </div>
                            <div class="col-md-6 col-xs-12 p-2 d-flex justify-content-start">
                                <input type="email" placeholder="Your Email*" name="email">
                            </div>
                            <div class="col-12 p-2 d-flex justify-content-center">
                                <textarea placeholder="Your Message*" name="message"></textarea>
                            </div>
                            <div class="col-12 p-2 text-center">
                                <button id="button2" type="submit" name="submit">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row r13">
                    <div class="nav col-12 justify-content-center align-items-center">
                        <ul>
                            <li class="d-inline"><a href="#">Facebook</a></li>
                            <li class="d-inline"><a href="#">Twitter</a></li>
                            <li class="d-inline"><a href="#">Google+</a></li>
                            <li class="d-inline"><a href="#">LinkedIn</a></li>
                            <li class="d-inline"><a href="#">Behance</a></li>
                            <li class="d-inline"><a href="#">Dribbble</a></li>
                            <li class="d-inline"><a href="#">GitHub</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>