<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /*    Подключение шрифтов*/
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    /*    Сброс*/
    *, *:hover, *:active {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        color: black;
        font-size: 1rem;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }
    img {
        max-width: 100%;
        height: auto;
    }

    /*    Стили по умолчанию/общие */

    * {
        font-family: 'Montserrat', sans-serif;
    }

    /*    Container*/
    ._container {
        max-width: 1440px;
        padding: 0 20px;
        margin: 0 auto;
    }

    .header__content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    /*Логотип*/
    .header__logo {
        width: 80px;
    }

    /*    Стили для меню*/
    .nav__list {
        display: flex;
        justify-content: end;
    }

    .nav__item {
        margin-left: 50px;
    }

    .nav__link {
        text-transform: uppercase;
    }

    .nav__link:hover {
        font-weight: bold;
    }

/*    First Screen*/

    .first-screen {
        background-color: #FAFAFA;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .img-wrapper {
        position: relative;
        height: auto;
    }

    .img-wrapper:hover .overlay {
        opacity: 1;
        transition: all 1s;
    }

    .first-screen__img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.5);
        opacity: 0;
        display: flex;
        justify-content: end;
        flex-direction: column;
        padding: 5%;
    }
    .text-to-image {
        color: white;
        font-weight: bold;
    }

</style>
<body>
<header class="header">
    <div class="header__content _container">
        <div class="header__logo">
            <a class="link-to-home" href="">
                <img src="{{asset('public/img/logoPS.png')}}" alt="" class="logo header__logo">
            </a>
            <span>Типичный хедер</span>
        </div>
        <nav class="nav header__nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Contacts</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Info</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Work</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<section class="first-screen">
    <div class="first-screen__content _container">
        <h2>Изображение с затемнением и текстом</h2>
        <div class="img-wrapper">
            <img class="first-screen__img" src="{{asset('public/img/freedom/img1.jpg')}}" alt="">
            <div class="overlay">
                <p class="text-to-image">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab earum nesciunt quasi repudiandae sequi, velit.
                </p>
            </div>
        </div>
    </div>
</section>

<script>

</script>
</body>
</html>
