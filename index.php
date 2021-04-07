<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detramax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<main>
    <header>
            <div class="social container">
                <div class="social-icons-ul">
                    <span class="icon icon-instagram" role="img" aria-label="instagram icon"><img src="images/instagram.svg" alt="instagram icon"> </span>
                    <span class="icon icon-facebook" role="img" aria-label="facebook icon"><img src="images/facebook.svg" alt="facebook icon"> </span>
                </div>
            </div>
            <nav class="navbar">
                <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo_detra.svg" height="15px" width="auto" alt="detramax logo"  class="d-flex align-text-top
                    ">
                </a>

                <button class="menu" aria-label="Main Menu">
                    <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>

                <ul class="navbar-nav navAnimHide">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="#hero">Strona Główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#products">Linia Detramax</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#banner">Dowiedz się więcej</a>
                    </li>
                    <li class="nav-item contact-item">
                        <a class="nav-link text-white" href="#footer">Kontakt</a>
                    </li>
                    <li>
                    <div class="social-icons-ul">
                        <span class="icon icon-instagram" onclick="location.href='https://instagram.com'" role="img" aria-label="instagram icon"><img src="images/Vector-1.svg" alt="instagram icon"> </span>
                        <span class="icon icon-facebook" onclick="location.href='https://facebook.com'" role="img" aria-label="facebook icon"><img src="images/Vector.svg" alt="facebook icon"> </span>
                    </div>
                    </li>
                </ul>
                </div>
            </nav>
    </header>
    <div class="hero container" id="hero">
            <div class="col hero-content__right">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit hendrerit elit. Mauris gravida nisl vestibulum tempor mattis. Cras eget vulputate orci. Morbi dui arcu, consectetur non semper et, dapibus a velit.</p>
                <button class="cta" onClick="document.querySelector('.products').scrollIntoView();">Dowiedz się więcej</button>
            </div>
            <div class="col hero-content__left"><img src="images/vector_graphic_hero.svg"></div>
    </div>
    <div class="scroll-container">
        <div class="scroller"></div>
    </div>
</main>

<section class="products" id="products">
    <div class="col products-content__right">
        <h1>Odkryj linię <span class="text-span">Detramax</span> . </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit hendrerit elit. Mauris gravida nisl vestibulum tempor mattis. Cras eget vulputate orci. Morbi dui arcu, consectetur non semper et, dapibus a velit.</p>
        <button class="cta">Sprawdź</button>
    </div>

    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="images/product2.jpg"></li>
                <li class="splide__slide"><img src="images/product1.jpg"></li>
                <li class="splide__slide"><img src="images/product3.jpg"></li>
                <li class="splide__slide"><img src="images/product4.jpg"></li>
                <li class="splide__slide"><img src="images/product5.jpg"></li>
            </ul>
        </div>
    </div>
</section>

<section class="banner" id="banner">
    <ul class="benefits d-flex flex-column">
        <li class="benefit  d-flex flex-column ">
            <span class="benefit-icon icon-cardio1" role="img" aria-label="cardiovascular icon"><img src="images/cardio1.svg" alt="cardiovascular icon"> </span>
            <caption>wspiera<br/> 
                mikrokrążenie</caption>
        </li>
        <li class="benefit  d-flex flex-column">
            <span class="benefit-icon icon-cardio2" role="img" aria-label="cardiovascular icon"><img src="images/cardio2.svg" alt="cardiovascular icon"> </span>
            <caption>wspomaga prawidłowe<br/>
                funkcjonowanie naczyń</caption>
        </li>
        <li class="benefit  d-flex flex-column">  
            <span class="benefit-icon icon-legs" role="img" aria-label="healthy legs icon"><img src="images/legs_vector.svg" alt="healthy legs icon"> </span>
            <caption>wspomaga zmniejszenie<br/>uczucia ciężkości nóg</caption>
        </li>
    </ul>
</section>

<section class="pre-news">
    <div class="container">
        <div class="row pre-row">
            <div class="col-5 grapes-container">
                <img src="images/grapes_img.jpg" alt="zdjecie czarnego winogrono">
            </div>
            <div class="col pre-news-content">
                <h2>Ekstrakt z liści <span class="text-span">winorośli</span>.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia officiis fuga ad quisquam mollitia omnis quae delectus commodi dolor officia, ratione nam vel. Velit, corporis adipisci deserunt veritatis repudiandae nesciunt et consequuntur magnam. 
                </p>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <header>
            <h2>Aktualności <span class="text-span">Detramax</span>.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit hendrerit elit. Mauris gravida nisl vestibulum tempor mattis. Cras eget vulputate orci. Morbi dui arcu, consectetur non semper et, dapibus a velit.</p>
        </header>
        <div class="row">
            <div class="post">
                <div class="post-img">
                    <picture><img src="https://source.unsplash.com/random/280x150" alt=""></picture>
                </div>
                <h3>Post title</h3>
                <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, fuga eaque. Impedit optio tempora similique nulla eveniet alias in aliquid enim! Porro impedit fugit possimus dolore ut quibusdam tenetur eaque deserunt, aliquam numquam iusto minus deleniti maiores repellat iste itaque.</p>
                <button class="post-cta">Przeczytaj więcej</button>
            </div>
            <div class="post">
                <div class="post-img">
                    <picture><img src="https://source.unsplash.com/random/280x150" alt=""></picture>
                </div>
                <h3>Post title</h3>
                <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, fuga eaque. Impedit optio tempora similique nulla eveniet alias in aliquid enim! Porro impedit fugit possimus dolore ut quibusdam tenetur eaque deserunt, aliquam numquam iusto minus deleniti maiores repellat iste itaque.</p>
                <button class="post-cta">Przeczytaj więcej</button>
            </div>
        </div>
        <div class="row">
            <div class="post">
                <div class="post-img">
                    <picture><img src="https://source.unsplash.com/random/280x150" alt=""></picture>
                </div>
                <h3>Post title</h3>
                <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, fuga eaque. Impedit optio tempora similique nulla eveniet alias in aliquid enim! Porro impedit fugit possimus dolore ut quibusdam tenetur eaque deserunt, aliquam numquam iusto minus deleniti maiores repellat iste itaque.</p>
                <button class="post-cta">Przeczytaj więcej</button>
            </div>
            <div class="post">
                <div class="post-img">
                    <picture><img src="https://source.unsplash.com/random/280x150" alt=""></picture>
                </div>
                <h3>Post title</h3>
                <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, fuga eaque. Impedit optio tempora similique nulla eveniet alias in aliquid enim! Porro impedit fugit possimus dolore ut quibusdam tenetur eaque deserunt, aliquam numquam iusto minus deleniti maiores repellat iste itaque.</p>
                <button class="post-cta">Przeczytaj więcej</button>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="row">
        <div class="col">
            <div class="company-desc d-flex flex-column">
                <img src="images/logo_white.svg" alt="logo firmy detramax">
                <h3>NOVASCON PHARMACEUTICALS SP. Z O.O.</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
            </div>
        </div>
        <div class="col">
            <h2>Kontakt</h2>
            <div class="contact-grid">
                <ul class="contact-list d-flex flex-column justify-content-center">
                    <li class="contact-item d-flex justify-content-center">
                        <span class="contact-img"><img src="images/pin.svg" alt=""></span>
                        <p>Al. Jana Pawła II 80, </br>
                           00-175 Warszawa
                        </p>
                    </li>
                    <li class="contact-item d-flex justify-content-center">
                        <span class="contact-img"><img src="images/phone.svg" alt=""></span>
                        <p>+48 22 435 12 00</p>
                    </li>
                    <li class="contact-item d-flex justify-content-center">
                        <span class="contact-img"><img class="icon-envelope" src="images/envelope.svg" alt=""></span>
                        <p>biuro@novascon.pl
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copy">
    <p class="para-detramax">&copy; 2021 <span>Detramax</span> - Wszelkie prawa zastrzeżone</p>
    <p class="para-digistat">Design by <span>Digistat</span></p>
</div>



    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>
</html>