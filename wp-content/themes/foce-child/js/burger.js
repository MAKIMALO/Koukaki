document.addEventListener('DOMContentLoaded', function() {
    const mytopnav = document.getElementById("mytopnav");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");

    function openMenu() {
        mytopnav.classList.add('active');
    }

    function closeMenu() {
        mytopnav.classList.remove('active');
    }

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
});

