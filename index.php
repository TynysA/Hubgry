<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- - - - FONTS - - - - - - -->
    <script src="https://kit.fontawesome.com/c0f2df47b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    <!-- - - - - SLICK - - - - -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- - - - - Jquery - - - - -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- - - - - FancyBox - - - - -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</head>

<body>
    <div class="page">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__vector">
                        <img src="img/intro/Vector.png" alt="">
                    </div>
                    <div class="nav__items" id="nav">
                        <nav class="nav nav__1">
                            <a href="#home" data-scroll="#home" class="nav__link">Home</a>
                            <a href="#about" data-scroll="#about" class="nav__link">About</a>
                            <a href="#team" data-scroll="#team" class="nav__link">Team</a>
                            <a href="#booking" data-scroll="#booking" class="nav__link">BOOKING</a>
                        </nav>
                        <nav class="nav">
                            <a href="#menu" data-scroll="#menu" class="nav__link">MENU</a>
                            <a href="#events" data-scroll="#events" class="nav__link">EVENTS</a>
                            <a href="#galerie" data-scroll="#galerie" class="nav__link">GALERIE</a>
                            <a href="#contact" data-scroll="#contact" class="nav__link">CONTACT</a>
                        </nav>
                    </div>
                    <div class="burger" id="burger">
                        <span class="burger__item"></span>
                    </div>


                </div>
            </div>
        </header>


        <div class="intro anchor" id="home">
            <div class="container">
                <div class="intro__inner">
                    <div class="intro__div"></div>

                    <div class="intro__timetable">
                        <p>Mon - Fri: 8PM - 10PM,</p>
                        <p>Sat - Sun: 8PM - 3AM</p>
                    </div>

                    <div class="intro__item intro__2">
                        <div class="intro__suptitle">RESTAURANT</div>
                        <div class="intro__title"> <span>hungry</span> <span>people</span></div>
                        <div class="intro__btns">
                            <button class="btn">
                                <p>BOOK TABLE</p>
                            </button>
                            <button class="btn">
                                <p>EXPLORE</p>
                            </button>
                        </div>
                    </div>
                    <div class="intro__item intro__3">
                        <div class="intro__social"><i class="intro__icon fab fa-facebook-f"></i></div>
                        <div class="intro__social"><i class="intro__icon fab fa-twitter"></i></div>
                        <div class="intro__social"><i class="intro__icon fab fa-instagram"></i></div>
                    </div>
                </div>
            </div>
            <div class="intro__down" data-scroll="#end">
                <a class="down__btn" href=""><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>



        <div class="about anchor" id="about">
            <div class="container">
                <div class="about__inner">
                    <div class="section__inner section--right">
                        <div class="section__title">about us</div>
                        <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                            velit maximus, molestie est a, tempor magna.</div>
                        <div class="section__text"> Integer ullamcorper neque eu purus euismod, ac faucibus mauris
                            posuere.
                            Morbi non ultrices
                            ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a sollicitudin
                            lorem
                            quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla facilisis semper
                            laoreet.
                        </div>
                    </div>
                    <a class="about__img" data-fancybox href="img/image__big/1__big.png">
                        <img src="img/image/1.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="team anchor" id="team">
            <div class="section__before">
                OUR TEAM
            </div>
            <div class="container">
                <div class="team__inner">

                    <a class="team__img" data-fancybox href="img/image__big/2__big.png">
                        <img src="img/image/2.png" alt="">
                    </a>

                    <div class="section__inner section--left">
                        <div class="section__title">MASTER CHEF</div>
                        <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                            velit maximus, molestie est a, tempor magna.</div>
                        <div class="section__text">
                            Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                            Morbi non ultrices
                            ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a sollicitudin
                            lorem
                            quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla facilisis semper
                            laoreet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- - - - - - - - - - - BOOKING - - - - - - - -  -->
        <div class="book anchor" id="booking">
            <div class="container">
                <div class="book__inner">
                    <div class="booking section--right">
                        <div class="section__title">book a table</div>
                        <form class="booking__form" action="check.php" method="post">
                            <input type="text" class="booking__send" name="name" required placeholder="Name">
                            <input type="email" class="booking__send" name="email" placeholder="Email">
                            <input type="tel" class="booking__send" name="phone" required placeholder="Phone">

                            <div class="select-wrapper">
                                <select name="count">
                                    <option value="1">People</option>
                                    <option value="2">1-3</option>
                                    <option value="3">4-6</option>
                                    <option value="4">7-9</option>
                                    <option value="5">10-12</option>
                                </select>
                                <div class="select-arrow"></div>
                            </div>
                            <input type="text" class="booking__send" name="date" min="1" max="5" required placeholder="Date(mm/dd)">

                            <div class="select-wrapper">
                                <select name="time">
                                    <option value="1">Time</option>
                                    <option value="2">8:00-8:30</option>
                                    <option value="3">8:30:9:00</option>
                                    <option value="4">9:00-9:30</option>
                                    <option value="5">9:30:10:00</option>
                                    <option value="6">10:00-10:30</option>
                                    <option value="7">10:30-11:00</option>
                                    <option value="8">11:00-11:30</option>
                                    <option value="9">11:30:12:00</option>
                                </select>
                                <div class="select-arrow"></div>
                            </div>
                            <button class="booking__btn button" type="submit">BOOK NOW</button>
                        </form>
                    </div>
                    <a class="book__img" data-fancybox href="img/image__big/3__big.png">
                        <img src="img/image/3.png" alt="">
                    </a>

                </div>
            </div> <!-- - - - CONTAINER - - - - -->
            <div class="section__after">
                Mon - Fri: 8PM - 10PM, Sat - Sun: 8PM - 3AM, Phone: +40 729 131 637/+40 726 458 782
            </div>
        </div>

        <!-- - - - - - - - - -  SPECIALTIES- - - - - - - - - - -->
        <div class="team slider">
            <div class="section__before">
                specialties
            </div>
            <div class="container">
                <div id="slider">
                    <!-- SLIDER - - ITEM -->
                    <div>
                        <div class="slider__slider">
                            <a class="slider__img" data-fancybox href="img/image__big/4__big.png">
                                <img src="img/image/4.png" alt="">
                            </a>
                            <div class="section__inner section--left">
                                <div class="section__title">chocolate pancakes</div>
                                <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Duis
                                    at
                                    velit maximus, molestie est a, tempor magna.</div>
                                <div class="section__text">
                                    Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                                    Morbi non ultrices
                                    ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a
                                    sollicitudin
                                    lorem
                                    quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla facilisis
                                    semper
                                    laoreet.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER - - ITEM -->
                    <div>
                        <div class="slider__slider">
                            <a class="slider__img" data-fancybox href="img/image__big/4__big.png">
                                <img src="img/image/4.png" alt="">
                            </a>
                            <div class="section__inner section--left">
                                <div class="section__title">chocolate pancakes</div>
                                <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Duis
                                    at
                                    velit maximus, molestie est a, tempor magna.</div>
                                <div class="section__text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quo eum doloribus
                                    accusantium sunt beatae voluptatibus consectetur dolorem ipsam eligendi iste, magnam
                                    ratione, minus vero. Molestias impedit aspernatur ullam ut!
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER - - ITEM -->
                    <div>
                        <div class="slider__slider">

                            <a class="slider__img" data-fancybox href="img/image__big/4__big.png">
                                <img src="img/image/4.png" alt="">
                            </a>

                            <div class="section__inner section--left">
                                <div class="section__title">chocolate pancakes</div>
                                <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Duis
                                    at
                                    velit maximus, molestie est a, tempor magna.</div>
                                <div class="section__text">
                                    Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                                    Morbi non ultrices
                                    ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a
                                    sollicitudin
                                    lorem
                                    quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla facilisis
                                    semper
                                    laoreet.
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quo eum doloribus
                                    accusantium sunt beatae voluptatibus consectetur dolorem ipsam eligendi iste, magnam
                                    ratione, minus vero. Molestias impedit aspernatur ullam ut!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- - - - - - - - - MENU - - - - - - - - - - - -->
        <div class="menu anchor" id="menu">
            <div class="container">
                <div class="section--mini">
                    <div class="section__title">DELICIOUS MENU</div>
                    <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                        velit maximus, molestie est a, tempor magna.</div>
                </div>

                <div class="tabs">
                    <li class="active"><a href="" class="tab">SOUPE</a></li>
                    <li class=""><a href="" class="tab">PIZZA</a></li>
                    <li class=""><a href="" class="tab">PASTA</a></li>
                    <li class=""><a href="" class="tab">DESERT</a></li>
                    <li class=""><a href="" class="tab">WINE</a></li>
                    <li class=""><a href="" class="tab">BEER</a></li>
                    <li class=""><a href="" class="tab">DRINKS</a></li>
                </div>
                <div class="menu__container">
                    <div class="menu__inner active menu__acc" data-index="0">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="1">
                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="2">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">NOT PIZZS!IT IS BIG PASTA . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="3">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="4">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="5">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="6">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                    <div class="menu__inner menu__acc" data-index="7">
                        <div class="menu__col">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__3">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->

                        <div class="menu__col" id="acc__4">
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                            <div class="menu__block">
                                <p>
                                    <span class="menu__title">PIZZA QUATRO STAGIONI . . . .</span>
                                    <span class="menu__price">55,68 USD</span>
                                </p>
                                <p class="menu__description">Integer ullamcorper neque eu purus euismod</p>
                            </div>
                        </div><!-- - - - MENU COL END -->
                        <div class="menu__icon" data-collapse="#acc__3">
                            <i data-collapse="#acc__4" class="fas fa-chevron-down"></i>
                        </div>
                    </div><!-- - - - MENU INNER END -->
                </div>



            </div>
        </div>
        <!-- - - - - - - - - PRIVATE EVENTS - - - - - - -  -->
        <div class="events anchor" id="events">
            <div class="section__before">
                PRIVATE EVENTS
            </div>
            <div class="container">
                <div class="events__inner">
                    <div class="events__item">
                        <a data-fancybox href="img//image__big/5__big.png" data-caption="WEDDINGS">
                            <div class="events__left">

                                <img src="img/image/5.png" alt="">


                                <div class="events__content">
                                    <p class="event__text">weddings</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="events__item">
                        <a data-fancybox href="img/image__big/6__big.png" data-caption="CORPORATE PZRTIES">
                            <div class="events__right">

                                <img src="img/image/6.png" alt="">

                                <div class="events__content">
                                    <p class="event__text">corporate pzrties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section__after">
                For private events please call: <p>+40 729 131 637/+40 726 458 782 or use the contact form.</p>
            </div>
        </div>

        <!-- - - - - - - - - - - - -PHOTO GALERIE - - - - - - - - -->
        <div class="galereia anchor" id="galerie">

            <div class="galereia__item">
                <a data-fancybox="gallery" href="img/Galereia/1__big.png" data-caption="My caption">
                    <img src="img/Galereia/1.png" alt="" />
                </a>
            </div>
            <div class="galereia__item">
                <a data-fancybox="gallery" href="img/Galereia/2__big.png" data-caption="My caption">
                    <img src="img/Galereia/2.png" alt="" />
                </a>
            </div>
            <div class="galereia__item">
                <a data-fancybox="gallery" href="img/Galereia/3__big.png" data-caption="My caption">
                    <img src="img/Galereia/3.png" alt="" />
                </a>
            </div>
            <div class="galereia__item">
                <a data-fancybox="gallery" href="img/Galereia/4__big.png" data-caption="My caption">
                    <img src="img/Galereia/4.png" alt="" />
                </a>
            </div>

        </div>
        <!-- - - - - - - - - - - CONTACT - - - - - - - - - -->
        <div class="contact anchor" id="contact">
            <div class="container">
                <div class="section--mini">
                    <div class="section__title">CONTACT</div>
                    <div class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                        velit maximus, molestie est a, tempor magna.</div>
                </div>
                <form action="check.php" method="post" class="contact__form">
                    <input type="text" class="contact__send" name="name_c" required placeholder="Name">
                    <input type="email" class="contact__send" name="email_c" placeholder="Email">
                    <input type="tel" class="contact__send" name="phone_c" required placeholder="Phone">
                    <textarea name="message" id="#message" name="text" class="contact__text" placeholder="Message"></textarea>
                    <div class="contact__footer">
                        <button class="contact__btn button" type="submit">BOOK NOW</button>
                        <div class="contact__info">
                            <div class="info__block">
                                <i class="fas fa-map-marker-alt"></i> <span>5th London Boulevard,
                                    U.K.</span>
                            </div>
                            <div class="info__block"><i class="fas fa-phone"></i>
                                <p>+40 729 131 637</p>
                                <p>+40 726 458 782</p>
                                <p></p>
                            </div>
                            <div class="info__block"><i class="fas fa-envelope"></i><span>office@mindblister.com </span>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="contact__btn button" type="submit">BOOK NOW</button> -->
                </form>
            </div>
        </div>




        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5348.425651150102!2d71.42391095866368!3d51.13074784387622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841e0caadcf7%3A0x4f6ce0ff87111d39!2sBaiterek%20Tower!5e0!3m2!1sen!2skz!4v1622539471165!5m2!1sen!2skz" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="footer__text" id="end">

            <span> © Copyright Aday 2021</span>
        </div>
    </div>

    <div class="up" data-scroll="#home">
        <a class="up__icon" href=""><i class="fas fa-angle-double-up"></i></a>
    </div>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>