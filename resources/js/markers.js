const map = document.getElementById('map');

document.addEventListener('contextmenu', function(event) {
    event.preventDefault();

    const menu = document.getElementById('addMarkerMenu');

    const mouseX = event.clientX;
    const mouseY = event.clientY;

    menu.style.left = mouseX + 'px';
    menu.style.top = mouseY + 'px';

    menu.classList.remove('hidden');
});