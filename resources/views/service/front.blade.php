@extends('layouts.layout')

<style>
    .box {
        display: flex;
        justify-content: center;
    }
    .left, .rightSide {
        align-items: center;
        align-self: stretch;
        /*height: 500px;*/
        border: 1px solid #808080;
        flex: 1;
        display: flex;
        padding: 5px;
    }
    .left {
        background-color: black;
        color: white;
    }
    .left:hover {
        background-color: white;
        color: black;
    }
    .rightSide__body {
        display: flex;
    }
    .rightSide__img {
        flex: 1;
    }
    .rightSide__img img {
        width: 150px;
        max-width: 100%;
        height: auto;
    }
    .rightSide__text {
        flex: 1;
        float: right;
    }
    .matrix {
        font-size: 4rem;
    }
</style>

<div class="container">
    <div class="box">
        <div class="left">
            <h1 class="matrix"></h1>
        </div>
        <div class="rightSide">
            <div class="rightSide__body">
                <div class="rightSide__img">
                    <img src="{{asset('public/img/todo.png')}}" alt="">
                </div>
                <div class="rightSide__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores at blanditiis culpa cupiditate dignissimos distinctio expedita illo, ipsam iste iusto libero magnam minima odio omnis placeat praesentium quidem! Accusamus asperiores deleniti dolorum explicabo iure iusto, labore molestias necessitatibus nisi, provident quae quaerat quam, quidem ratione velit! Culpa expedita illum ipsa labore molestias nihil nobis perspiciatis recusandae rem voluptatibus? Aut dolor magnam magni provident tempora. Animi, aperiam aspernatur culpa cum, dolore eius explicabo facilis fugiat incidunt, iure nam non obcaecati provident quaerat veniam vero voluptates. Ad aperiam aspernatur beatae consequuntur debitis, deleniti eius est ex expedita in itaque iusto nobis non officia perspiciatis quae qui quidem quo repudiandae saepe sed vero voluptate voluptatibus! Accusantium ad alias aliquam aliquid amet atque autem beatae, consequuntur cum deleniti dignissimos dolor dolorem doloribus eaque earum eos et expedita fuga id in incidunt ipsam laboriosam magnam, magni maiores maxime molestiae molestias mollitia officia porro provident quaerat quo sint temporibus ullam velit vero? Aperiam, molestiae, pariatur. Deserunt ducimus eius necessitatibus nemo obcaecati, recusandae ullam voluptas. A accusamus accusantium asperiores, blanditiis, corporis dignissimos dolorum est fugiat, incidunt laborum magni maxime minus nisi nulla officia omnis porro quod quos repellendus repudiandae sequi tempore totam veritatis! Fugiat, libero!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //Текст бегущей строкой

    const text = [
        'Hi! My name is Aleks.\n I\'m fullstack developer.',
    ];

    function showText() {
        let line = 0;
        let count = 0;
        let out = '';
        let matrix = document.querySelector('.matrix');

        function showLine() {
            let interval = setTimeout(()=>{
                out += text[line][count];
                matrix.innerHTML = out;
                count++
                // Проверки
                if(count >= text[line].length) {
                    count = 0;
                    line++;
                    if(line == text.length) {
                        clearTimeout(interval);
                        return true;
                    }
                }
                showLine();
            }, getRandomInt(250));
        }
        showLine();
    }
    function getRandomInt(max) {
        return Math.floor(Math.random()*Math.floor(max));
    }
    showText();
</script>
