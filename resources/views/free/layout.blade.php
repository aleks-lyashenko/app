<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        /*box-sizing: border-box;*/
        font-family: 'Montserrat', sans-serifa;
    }

    a {
        text-decoration: none;
        text-transform: uppercase;
        color: black;
    }
    li {
        list-style: none;
    }
    body {
        position: relative;
    }

    /*    Header*/

    .header {
        padding: 25px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    ._container {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }
    .firstLetter {
        color: #17BED2;
    }
    span {
        font-size: 2rem;
        font-weight: bold;
        color: #515769;
        text-transform: lowercase;
    }

    .menu {

    }

    .main{
        display: flex;
        justify-content: right;
    }

    .menu__item {
        list-style: none;
    }
    .menu__item + .menu__item {
        margin-left: 35px;
    }
    .menu__link {
        text-transform: uppercase;
        text-decoration: none;
        color: #999CAA;
        font-weight: bold;
        position: relative;
    }
    .menu__link:hover {
        color: #81848f;
    }

    .menu__link_active:before {
        content: "";
        position: absolute;
        left: -20px;
        top: 8px;
        background-color: #17BED2;
        width: 9px;
        height: 2px;
    }

    /*Burger*/

    .menu__burger {
        cursor: pointer;
        display: none;
    }

    .bar1, .bar2, .bar3 {
        width: 25px;
        height: 2px;
        background-color: #515769;
        margin-top: 5px;
    }
    .bar1 {
        width: 15px;
    }
    .bar2 {
        width: 20px;
    }
    .bar_active {
        width: 25px;
        background-color: #17BED2;
    }
    .secondary {
        display: none;
        padding-bottom: 20px;
    }
    .secondary li {
        margin-top: 20px;
    }
    .secondary a {
        color: #515769;
        font-weight: bold;
        font-size: larger;
        position: relative;
        padding-left: 20px;
    }
    .secondary a.active:before {
        content: "";
        position: absolute;
        left: 0px;
        top: 8px;
        background-color: #17BED2;
        width: 9px;
        height: 2px;
    }
    @media (max-width: 800px) {
        .main {
            display: none;
        }
        .menu__burger {
            display: block;
        }
    }

    /*    Photo-grid*/
    .photo-grid {
        background-color: #FAFAFA;
    }
    .photo-grid__body {
        display: flex;
        justify-content: space-between;
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .solid {
        margin-right: 5px;
        flex: 1;
    }
    .solid img, .discrete img {
        width: 100%;
        height: auto;
        display: block;
    }
    .discrete {
        flex: 1;
    }
    .photo-container + .photo-container {
        margin-top: 5px;
    }
    .photo-container {
        position: relative;
        display: block;
    }
    .photo-container:hover .overlay {
        opacity: 1;
        transition: 1.2s;
    }

    .photo-desc {
        position: absolute;
        font-size: 1.2rem;
        color: white;
        bottom: 50px;
        left: 20px;
        text-transform: lowercase;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(0,0,0,0.5);
    }


    @media (max-width:800px) {
        .photo-grid__body {
            flex-direction: column;
            max-width: 100%;
            text-align: center;
        }
        .solid {
            margin-right: 0;
        }
    }

    /*    Posts*/
    .posts {
        border-bottom: 1px solid #edf0f2;
    }
    .posts__body {
        display: flex;
        justify-content: space-between;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .post {
        width: 30%;
        border-right: 1px solid #edf0f2;
    }

    .post__title h2 {
        color: #515769;
    }
    .post__desc p {
        color: #a6a7aa;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .post__link a {
        font-size: smaller;
        color: #81848f;
        font-weight: bold;
        position: relative;
    }

    .post__link a:before {
        content: "";
        position: absolute;
        right: -20px;
        top: 7px;
        background-color: #17BED2;
        width: 9px;
        height: 2px;
    }

    @media (max-width: 800px) {
        .posts__body {
            flex-direction: column;
        }
        .post {
            width: 100%;
            border: 0;
            margin-bottom: 60px;
        }
        .post:last-child {
            margin-bottom: 0;
        }
    }

    /*    Clients*/
    .clients {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .clients__title h2 {
        font-size: 2rem;
        color: #515769;
    }
    .clients__desc p {
        color: #a6a7aa;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .clients__list {
        display: flex;
        justify-content: space-between;
        padding-top: 40px;
    }
    .clients__img {
        cursor: pointer;
    }

    /*    Works*/

    .works {
        background-color: #FAFAFA;
    }
    .works__body {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .works__title h2 {
        font-size: 2rem;
        color: #515769;
    }
    .works__desc p {
        color: #a6a7aa;
        padding-top: 15px;
        padding-bottom: 55px;
    }
    .works__row {
        display: flex;
    }
    .img-wrapper {
        position: relative;
        margin-bottom: 5px;
        margin-right: 5px;
    }
    .img-wrapper:hover .overlay {
        opacity: 1;
        transition: all 1s;
    }
    .works__row img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
    }
    .works__row img + img {
        padding-left: 5px;
    }

    .works .overlay {
        display: flex;
        flex-direction: column;
        justify-content: end;
    }

    .overlay__text {
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: end;
        color: white;
        text-transform: lowercase;
    }

    @media (max-width: 800px) {
        .works__row {
            justify-content: space-between;
            flex-direction: column;
        }
    }
    /*    Reviews*/

    .reviews {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .reviews__title h2{
        font-size: 2rem;
        color: #515769;
    }
    .reviews__comment {
        color: #a6a7aa;
        padding-top: 25px;
        padding-bottom: 55px;
        font-size: 1.2rem;
        width: 50%;
        position: relative;
        padding-left: 70px;
    }
    .reviews__comment:before {
        content: "``";
        font-size: 50px;
        color: #17BED2;
        position: absolute;
        top: 20px;
        left: 0;
    }
    .reviews__sign {
        font-size: 1.2rem;
        color: #a6a7aa;
    }
    .reviews__sign span {
        font-size: smaller;
    }
    @media (max-width: 800px) {
        .reviews__comment {
            width: 85%;
        }
    }

    /*    Team*/
    .team {
        background-color: #FAFAFA;
    }
    .team__body {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .team__title h2 {
        font-size: 2rem;
        color: #515769;
    }
    .team__desc p {
        padding-top: 15px;
        padding-bottom: 45px;
        color: #a6a7aa;
    }
    .team__list {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .team__item {
        width: 100%;
        max-width: 380px;
    }
    .team__item + .team__item {
        margin-left: 10px;
    }

    h2.title {
        color: #515769;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .team__item p {
        color: #a6a7aa;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .team__link a {
        font-size: smaller;
        color: #81848f;
        font-weight: bold;
        position: relative;
    }
    .team__link a:before {
        content: "";
        position: absolute;
        left: 110px;
        top: 7px;
        background-color: #17BED2;
        width: 9px;
        height: 2px;
    }

    @media (max-width: 800px) {
        .team__list {
            flex-direction: column;
        }
        .team__item {
            width: 100%;
            max-width: 100%;
            margin-bottom: 40px;
        }
    }

    /*    Footer*/
    .footer-menu {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .footer-menu ul {
        display: flex;
        justify-content: start;
        flex-wrap: wrap;
    }
    .footer-menu__item {
        padding-top: 15px;
        width: 30%;
    }
    .footer-menu__link {
        color: #515769;
        text-transform: capitalize;
        /*font-weight: bold;*/
    }
    .footer-menu__link:hover {
        color: #81848f;
    }
    .footer {
        border-top: 1px solid #edf0f2;
        padding: 25px 0;
    }
    .footer__body {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer__creator {
        color: #81848f;
        font-size: smaller;
    }
    .footer__creator a {
        font-weight: bold;
        color: inherit;
    }

    @media (max-width: 800px) {
        .footer-menu ul {
            flex-direction: column;
        }
        .footer__creator {
            text-align: right;
        }
        .footer__creator a {
            display: block;
        }
    }

    /*Кнопка вверх*/

    .button-top {
        background-color: #999caa;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        position: absolute;
        bottom: 5px;
        right: 5px;
        text-align: center;
        line-height: 40px;
    }
    .button-top:hover {
        background-color: #999CAA;
    }
    .button-top a {
        color: white;
        font-size: smaller;
    }
    .shown {
        display: block;
    }

    @media (min-width: 801px) {
        .shown {
            display: none;
        }
    }


</style>
<body>
    <header class="header _container">
        <div class="logo">
            <a href="">
                <span class="firstLetter">F</span><span>reedom</span>
            </a>
        </div>
        <nav class="menu">

            <div class="menu__burger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul class="main">
                <li class="menu__item"><a class="menu__link menu__link_active" href="">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="">About</a></li>
                <li class="menu__item"><a class="menu__link" href="">Work</a></li>
                <li class="menu__item"><a class="menu__link" href="">Contact</a></li>
            </ul>

        </nav>
    </header>

    <ul class="secondary _container">
        <li><a class="active" href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Work</a></li>
        <li><a href="">Contact</a></li>
    </ul>

    <section class="photo-grid">
        <div class="photo-grid__body _container">
            <div class="solid">
                <a class="photo-container" href="">
                    <img src="{{asset('public/img/freedom/img1.jpg')}}" alt="">
                    <div class="overlay">
                        <div class="photo-desc">
                            <h3>Clear Design</h3>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, pariatur.
                        </div>
                    </div>
                </a>
            </div>
            <div class="discrete">
                <a class="photo-container" href="">
                    <img src="{{asset('public/img/freedom/img2.jpg')}}" alt="">
                    <div class="overlay">
                        <div class="photo-desc">
                            <h3>Clear Design</h3>
                            <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, pariatur.
                        </div>
                    </div>
                </a>
                <a class="photo-container" href="">
                    <img src="{{asset('public/img/freedom/img3.jpg')}}" alt="">
                    <div class="overlay">
                        <div class="photo-desc">
                            <h3>Clear Design</h3>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, pariatur.
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="posts__body _container">
            <div class="post">
                <div class="post__title">
                    <h2>Art Of Coding</h2>
                </div>
                <div class="post__desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                </div>
                <div class="post__link">
                    <a href="">Readme More</a>
                </div>
            </div>
            <div class="post">
                <div class="post__title">
                    <h2>Clean Design</h2>
                </div>
                <div class="post__desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                </div>
                <div class="post__link">
                    <a href="">Readme More</a>
                </div>
            </div>
            <div class="post">
                <div class="post__title">
                    <h2>Amazing Support</h2>
                </div>
                <div class="post__desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                </div>
                <div class="post__link">
                    <a href="">Readme More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="clients _container">
        <div class="clients__title">
            <h2>Our Clients</h2>
        </div>
        <div class="clients__desc">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut <br> laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
        <div class="clients__list">
            <img src="{{asset('public/img/freedom/01.png')}}" alt="" class="clients__img">
            <img src="{{asset('public/img/freedom/02.png')}}" alt="" class="clients__img">
            <img src="{{asset('public/img/freedom/03.png')}}" alt="" class="clients__img">
            <img
                src="{{asset('public/img/freedom/04.png')}}" alt="" class="clients__img">
            <img src="{{asset('public/img/freedom/05.png')}}" alt="" class="clients__img">
        </div>
    </section>

    <section class="works">
        <div class="works__body _container">
            <div class="works__title">
                <h2>Work</h2>
            </div>
            <div class="works__desc">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut <br> laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
            <div class="works__grid">
                <div class="works__row">
                    <a href="" class="img-wrapper">
                        <img src="{{asset('public/img/freedom/img5.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay__text">
                                <h3>Clean Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="img-wrapper">
                        <img src="{{asset('public/img/freedom/img8.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay__text">
                                <h3>Clean Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="works__row">
                    <a href="" class="img-wrapper">
                        <img src="{{asset('public/img/freedom/img6.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay__text">
                                <h3>Clean Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="img-wrapper">
                        <img src="{{asset('public/img/freedom/img9.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay__text">
                                <h3>Clean Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="img-wrapper">
                        <img src="{{asset('public/img/freedom/img7.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay__text">
                                <h3>Clean Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews _container">
        <div class="reviews__title">
            <h2>Customer Reviews</h2>
        </div>
        <div class="reviews__comment">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="reviews__sign">
            <p><span>Alex Clarson</span>, Metronic Customer</p>
        </div>

    </section>

    <section class="team">
        <div class="team__body _container">
            <div class="team__title">
                <h2>Meet the Team</h2>
            </div>
            <div class="team__desc">
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut <br> laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
            <div class="team__list">
                <div class="team__item">
                    <img src="{{asset('public/img/freedom/img4.jpg')}}" alt="" class="team__item">
                    <h2 class="title">Alicia Keys</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <div class="team__link">
                    <a href="">Readme More</a>
                </div>
                </div>
                <div class="team__item">
                    <img src="{{asset('public/img/freedom/img10.jpg')}}" alt="" class="team__item">
                    <h2 class="title">James Millner</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <div class="team__link">
                    <a href="">Readme More</a>
                </div>
                </div>
                <div class="team__item">
                    <img src="{{asset('public/img/freedom/img11.jpg')}}" alt="" class="team__item">
                    <h2 class="title">Scarlet Johanson</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <div class="team__link">
                    <a href="">Readme More</a>
                </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-menu _container">
        <ul>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Home</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">About</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Work</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Contact</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Twitter</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Facebook</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Instagram</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Youtube</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Subscribe to Our Newsletter</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Privacy Policy</a></li>
            <li class="footer-menu__item">
                <a href="" class="footer-menu__link">Terms & Conditions</a></li>

        </ul>
    </div>

    <footer class="footer">
        <div class="footer__body _container">
            <div class="logo">
                <span class="firstLetter">F</span><span>reedom</span>
            </div>
            <div class="footer__creator">
                <p>Freedom Theme Powered by: <a href="">Aleks Lyashenko</a></p>
            </div>
        </div>
    </footer>
    <div class="button-top">
        <a href="#top">Top</a>
    </div>

    <script>
        'use strict'

        let burger = document.querySelector('.menu__burger');

        burger.addEventListener('click', function () {
            let secondary = document.querySelector('.secondary');
            let bar1 = document.querySelector('.bar1');
            let bar2 = document.querySelector('.bar2');
            let bar3 = document.querySelector('.bar3');

            bar1.classList.toggle('bar_active');
            bar2.classList.toggle('bar_active');
            bar3.classList.toggle('bar_active');
            secondary.classList.toggle('shown');
        });

        //Свайп
        let clientsBox = document.querySelector('.clients');
        let clients = document.querySelectorAll('.clients__img');
        let clientWidth = clients[0].offsetWidth;
        let clientIndex = 0;
        let posInit = 0;
        let posX1 = 0;
        let posX2 = 0;
        let posY1 = 0;
        let posY2 = 0;
        let posFinal = 0;

        // console.log(clientWidth);

        clientsBox.style = 'overflow: hidden';
        for(let i=0; i<clients.length;i++) {
            clients[i].style.transform = 'translate(1220px)';
            clients[i].style.transition = 'all 10s';
        }

        //Объекты
        let user = {
            name: 'Alex',
            age: 32,
            getName() {
                alert(this.name);
            }
        };

        user.getName();

        console.log(user.age);

    </script>

{{--    <script src="{{asset('public/js/script.js')}}"></script>--}}

</body>
</html>
