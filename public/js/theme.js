let toggle = document.getElementById('mode');
let div = document.getElementById('content');
let hone = document.getElementById('hone');
let navbardark = document.getElementById('navbar-dark');


toggle.addEventListener('click',()=> {
    div.classList.toggle('bg-dark');
    hone.classList.toggle('text-light');
    navbardark.classList.toggle('bg-dark');

});
