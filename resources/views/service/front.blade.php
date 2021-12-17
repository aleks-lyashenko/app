@extends('layouts.layout')


<div class="container">
    <h1 class="matrix"></h1>
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
