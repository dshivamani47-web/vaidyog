document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function () {

            mobileMenu.classList.toggle('hidden');

            const isOpen = !mobileMenu.classList.contains('hidden');

            menuButton.setAttribute('aria-expanded', isOpen);
            menuButton.innerHTML = isOpen ? '&times;' : '☰';

        });
    }

});