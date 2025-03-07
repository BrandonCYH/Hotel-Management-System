document.addEventListener("DOMContentLoaded", function () {
    const backToTopButton = document.getElementById('back-to-top');

    // Show or hide the button based on scroll position
    window.onscroll = function () {
        toggleBackToTopButton();
    };

    function toggleBackToTopButton() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    }

    // Scroll smoothly to the top when the button is clicked
    backToTopButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Initially hide the button
    backToTopButton.style.display = "none";
});