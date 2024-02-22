window.addEventListener('scroll', function () {
    var navtitle = this.document.querySelector('.navbar-brand');
    var navbar = document.querySelector('.navbar');
    var navlinks = document.querySelectorAll('.nav-link');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
        navtitle.classList.add('text-light');
        navbar.classList.add('scrolled');
        navlinks.forEach(function(link) {
            link.classList.add('text-light');
            link.classList.remove('text-dark');
        });
    } else {
        navtitle.classList.remove('text-light');
        navbar.classList.remove('scrolled');
        navlinks.forEach(function(link) {
            link.classList.remove('text-light');
            link.classList.add('text-dark');
        });
    }
});

const jumbotron = document.getElementById('room_image');
const room_title = document.getElementById('room_title');
const room_description = document.getElementById('room_description');

const list_room_title = ['Family Room', 'Residential Room', 'VIP Room', 'Single Room'];
const list_room_description = [
    "A family room in our hotel is a spacious, welcoming space designed to accommodate families comfortably. It offers ample room and amenities to ensure a pleasant stay for both adults and children.",
    "A residential room in our hotel provides a homely atmosphere and essential amenities for a comfortable long-term stay, making it feel like a home away from home.",
    "The VIP room in our hotel is the pinnacle of luxury and comfort. The VIP room ensures an unforgettable experience, where every detail is curated to surpass expectations.",
    "Experience comfort and relaxation in our cozy and stylish hotel rooms designed for your most convenience. Providing modern amenities and a welcoming ambiance for a delightful stay."
];

const images = ['../images/family_room_bg.jpg', '../images/residential_room_bg.jpg',
    '../images/VIP_room_bg.jpg', '../images/single_room_bg.jpg'
]; // Replace with your image URLs

let currentImageIndex = -1;
let currentTextIndex = -1;
let currentDescriptionIndex = -1;

function changeBackgroundImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    currentTextIndex = (currentTextIndex + 1) % list_room_title.length;
    currentDescriptionIndex = (currentDescriptionIndex + 1) % list_room_description.length;

    jumbotron.style.animation = "none"; // Reset animation to 'none'
    setTimeout(() => {
        jumbotron.style.backgroundImage =
            `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)),url('${images[currentImageIndex]}')`;
        jumbotron.style.animation = "fadeInUp 1s ease"; // Apply fade-in animation
        room_title.innerHTML = list_room_title[currentTextIndex];
        room_description.innerHTML = list_room_description[currentDescriptionIndex];
    }, 500); // Time to wait before changing the image (in sync with the transition duration)
}

setInterval(changeBackgroundImage, 5000); // Change image every 1000ms (1 second)