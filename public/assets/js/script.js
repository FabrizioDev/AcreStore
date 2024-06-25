window.addEventListener('load', () => {
    let links = document.querySelectorAll('header ul li a');

    links.forEach((link) => {
        if (link.getAttribute('href') == window.location.href) {
            link.classList.add('active');
        }
    });
});