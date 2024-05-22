window.addEventListener('scroll', function () {
    var navtitle = this.document.querySelector('.navbar-brand');
    var navbar = document.querySelector('.navbar');
    var navlinks = document.querySelectorAll('.nav-link');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
        navtitle.classList.add('text-light');
        navbar.classList.add('scrolled');
        navlinks.forEach(function (link) {
            link.classList.add('text-light');
            link.classList.remove('text-dark');
        });
    } else {
        navtitle.classList.remove('text-light');
        navbar.classList.remove('scrolled');
        navlinks.forEach(function (link) {
            link.classList.remove('text-light');
            link.classList.add('text-dark');
        });
    }
});