const menutoggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');
menutoggle.addEventListener('click', function() {
    menu.classList.toggle('active');
});