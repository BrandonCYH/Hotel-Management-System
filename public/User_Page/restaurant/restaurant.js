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

function show_mainMenu() {
    let main_menu = document.getElementById("main_menu");
    let drinks_menu = document.getElementById("drinks_menu");
    let btn_main_menu = document.getElementById("btn_main_menu");
    let btn_drinks_menu = document.getElementById("btn_drinks_menu");

    drinks_menu.classList.add("d-none");
    main_menu.classList.remove("d-none");

    btn_main_menu.classList.add("active");
    btn_drinks_menu.classList.remove("active");

    main_menu.style.animation = "fadeInUp 1s ease forwards";
}

function show_drinksMenu() {
    let main_menu = document.getElementById("main_menu");
    let drinks_menu = document.getElementById("drinks_menu");
    let btn_main_menu = document.getElementById("btn_main_menu");
    let btn_drinks_menu = document.getElementById("btn_drinks_menu");

    main_menu.classList.add("d-none");
    drinks_menu.classList.remove("d-none");

    btn_drinks_menu.classList.add("active");
    btn_main_menu.classList.remove("active");

    drinks_menu.style.animation = "fadeInUp 1s ease forwards";
}

const jumbotron = document.getElementById('hall_reservation');
const hall_title = document.getElementById('hall_title');
const hall_description = document.getElementById('hall_description');

const list_hall_title = ['Birthday Hall', 'Aniversary Parties', 'Graduation Reservation', 'Wedding Hall'];
const list_hall_description = [
    "Birthdays Made Memorable: Celebrate Life's Milestones with Us. From intimate gatherings to grand celebrations, let us turn your special day into an unforgettable experience filled with joy, laughter, and cherished memories.",
    "Anniversary Bliss: Celebrate Love's Journey with Us. Whether it's your first or fiftieth year together, mark this milestone surrounded by elegance and warmth. Let us create an unforgettable celebration as timeless as your love.",
    "Graduation Glory: Commemorate Achievements with Us. Step into a world of celebration as you mark this significant milestone. From cap and gown to future plans, let us host your journey's next chapter in style.",
    "Crafting timeless memories, our wedding reception service ensures every detail is perfect, from the grandest ballroom to the smallest detail. Entrust us with your dream day, and let love's journey begin in elegance and joy."
];

const images = ['../images/birthday_hall.jpg', '../images/aniversary_parties.jpg',
    '../images/graduation_hall.jpg', '../images/wedding_hall.jpg'
]; // Replace with your image URLs

let currentImageIndex = -1;
let currentTextIndex = -1;
let currentDescriptionIndex = -1;

function changeBackgroundImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    currentTextIndex = (currentTextIndex + 1) % list_hall_title.length;
    currentDescriptionIndex = (currentDescriptionIndex + 1) % list_hall_description.length;

    jumbotron.style.animation = "none"; // Reset animation to 'none'
    setTimeout(() => {
        jumbotron.style.backgroundImage =
            `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)),url('${images[currentImageIndex]}')`;
        jumbotron.style.animation = "fadeInUp 1s ease"; // Apply fade-in animation
        hall_title.innerHTML = list_hall_title[currentTextIndex];
        hall_description.innerHTML = list_hall_description[currentDescriptionIndex];
    }, 500); // Time to wait before changing the image (in sync with the transition duration)
}

setInterval(changeBackgroundImage, 5000); // Change image every 1000ms (1 second)