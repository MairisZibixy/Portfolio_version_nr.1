<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Setting the viewport to make website look good on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png" />

    <title>
        Mairis Karklins | A Junior Web Developer based in Riga, Latvia.
    </title>

    <!-- Define keywords for search engines -->
    <meta name="keywords" content="Junior web developer, HTML, CSS, JS" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Header -->
    <!-- 'role' is for screen readers -->
    <header class="header" role="banner" id="top">
        <div class="row">
            <nav class="nav" role="navigation">
                <ul class="nav__items">
                    <li class="nav__item">
                        <a href="#work" class="nav__link">Work</a>
                    </li>
                    <li class="nav__item">
                        <a href="#clients" class="nav__link">Clients</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__text-box row">
            <div class="header__text">
                <h1 class="heading-primary">
                    <span>Mairis Karklins</span>
                </h1>
                <p>A Junior Web Developer based in Riga, Latvia.</p>
                <a href="#contact" class="btn btn--gold">Get in touch</a>
            </div>
        </div>
    </header>

    <main role="main">

        <!-- Work -->

        <section class="work" id="work">
            <div class="row">
                <h2>My Work Gallery</h2>
                <div class="work__boxes">

                    <!-- Each div with the work__box class is a project. -->

                    <div class="work__box">
                        <div class="work__text">
                            <h3>Portfolio</h3>
                            <p>
                                My first portfolio.
                            </p>
                            <ul class="work__list">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul>

                            <div class="work__links">
                                <a href="#" target="_blank" class="link__text">
                                    Visit Site <span>&rarr;</span>
                                </a>
                                <a href="https://github.com/MairisZibixy/Portfolio_version_nr.1" title="View Source Code" target="_blank">
                                    <img src="./images/github.svg" class="work__code" alt="GitHub">
                                </a>
                            </div>
                        </div>
                        <div class="work__image-box">
                            <img src="./images/project-1.png" class="work__image" alt="Project 1" />
                        </div>
                    </div>

                    <!-- PHP Examples -->
                    <!-- Tictactoe -->
                    <div class="work__box">
                        <div class="work__text">
                            <h3>Tic-tac-toe</h3>
                            <p>
                                Tic-tac-toe made with PHP.
                            </p>
                            <ul class="work__list">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                            </ul>

                            <div class="work__links">
                                <a href="#" target="_blank" class="link__text">
                                    Visit Site <span>&rarr;</span>
                                </a>
                                <a href="https://github.com/MairisZibixy/php-bootcamp" title="View Source Code" target="_blank">
                                    <img src="./images/github.svg" class="work__code" alt="GitHub">
                                </a>
                            </div>
                        </div>
                        <div class="work__image-box">
                            <img src="./images/tictactoe.png" class="work__image" alt="Project 1" />
                        </div>
                    </div>

                    <!-- 42 link -->

                    <div class="work__box">
                        <div class="work__text">
                            <h3>42 link</h3>
                            <p>
                                42 link made with PHP.
                            </p>
                            <ul class="work__list">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                            </ul>

                            <div class="work__links">
                                <a href="#" target="_blank" class="link__text">
                                    Visit Site <span>&rarr;</span>
                                </a>
                                <a href="https://github.com/MairisZibixy/php-bootcamp" title="View Source Code" target="_blank">
                                    <img src="./images/github.svg" class="work__code" alt="GitHub">
                                </a>
                            </div>
                        </div>
                        <div class="work__image-box">
                            <img src="./images/42_link.png" class="work__image" alt="Project 1" />
                        </div>
                    </div>

                    <!-- Clients -->

                    <section class="client" id="clients">
                        <div class="row">
                            <h2>Clients</h2>
                            <div class="client__logos">
                                <!-- Logos of the clients or companies I have worked with -->
                                <img src="./images/comming_soon.jpg" class="client__logo" alt="Comming soon">
                            </div>
                        </div>
                    </section>

                    <!-- About me -->

                    <section class="about" id="about">
                        <div class="row">
                            <h2>About Me</h2>
                            <div class="about__content">
                                <div class="about__text">
                                    <p>
                                        Hello, my name is Mairis Kārkliņš, I am starting my journey as a web developer. I love traveling and adventures in nature, reading books, bicycle rides, action PC games and enjoy watching humorous TV-series.
                                    </p>
                                    <!-- Provide a link to resume -->
                                    <a href="#" class="btn">My Resume</a>
                                </div>

                                <div class="about__photo-container">
                                    <img class="about__photo" src="./images/Mairis.JPG" alt="" />
                                </div>
                            </div>
                        </div>
                    </section>
    </main>

    <!-- Contact -->

    <section class="contact" id="contact">
        <div class="row">
            <h2>Get in Touch</h2>
            <div class="contact__info">
                <p>
                    Are you looking for a fast-performing and user-friendly website to represent your product or business? Or have some advice for me? In any case feel free to let me know.
                </p>
                <a href="mailto:zibitijs@gmail.com" class="btn">zibitijs@gmail.com</a>
            </div>
        </div>
        <div>
            <?php
            include 'comment.php';
            ?>
        </div>
    </section>

    <!-- Footer -->

    <footer role="contentinfo" class="footer">
        <div class="row">
            <ul class="footer__social-links">
                <li class="footer__social-link-item">
                    <a href="https://github.com/MairisZibixy" title="Link to Github Profile">
                        <img src="./images/github.svg" class="footer__social-image" alt="Github">
                    </a>
                </li>
                <li class="footer__social-link-item">
                    <a href="https://codepen.io/zibixy" title="Link to Codepen Profile">
                        <img src="./images/codepen.svg" class="footer__social-image" alt="Codepen">
                    </a>
                </li>
            </ul>

            <p>
                05/2021 - Portfolio designed & developed by <a href="https://github.com/MairisZibixy " target="_blank " class="link ">Mairis</a>.
            </p>
        </div>
    </footer>

    <a href="#top " class="back-to-top " title="Back to Top ">
        <img src="./images/arrow-up.svg " alt="Back to Top " class="back-to-top__image " />
    </a>
    <!-- Script for 'back to top' funcionality -->
    <script src="./index.js "></script>
</body>

</html>