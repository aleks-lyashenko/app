//Добавление красного фона каждой статье
let posts = document.querySelectorAll('.post');
console.log(posts);
for ($i=0;$i<posts.length;$i++) {
    posts[$i].addEventListener('click', function (){
       this.style.backgroundColor = 'red';
    });
}

//Переключение дневного/ночного режима
let body = document.querySelector('body');
let toggle = document.querySelector('#toggle');
toggle.addEventListener('click', function () {
   body.classList.toggle('night');
});





