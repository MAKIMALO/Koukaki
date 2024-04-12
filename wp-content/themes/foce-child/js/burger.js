document.addEventListener('DOMContentLoaded', function() {
    const topnav = document.querySelector(".topnav");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");

    function openMenu() {
        topnav.classList.add('active');
        openBtn.style.display = 'none'; // Cacher le bouton hamburger
        closeBtn.style.display = 'block'; // Afficher le bouton croix
    }

    function closeMenu() {
        topnav.classList.remove('active');
        openBtn.style.display = 'block'; // Afficher le bouton hamburger
        closeBtn.style.display = 'none'; // Cacher le bouton croix
    }

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
});
