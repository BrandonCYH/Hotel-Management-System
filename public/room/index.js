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

document.getElementById('button-increment').addEventListener('click', function () {
    let input = document.getElementById('number');
    let value = parseInt(input.value);
    if (value < input.max) {
        input.value = value + 1;
    }
});

document.getElementById('button-decrement').addEventListener('click', function () {
    let input = document.getElementById('number');
    let value = parseInt(input.value);
    if (value > input.min) {
        input.value = value - 1;
    }
});

const jumbotron = document.getElementById('room_image');
const room_title = document.getElementById('room_title');
const room_description = document.getElementById('room_description');

const list_room_title = ['Standard Room', 'Family Room', 'King Room', 'Residential Room', 'VIP Room', 'Deluxe Room', 'Executive Room', 'Couple Room', 'Single Room'];
const list_room_description = [
    "a comfy space with modern decor. It has a queen or twin beds, a private bathroom, and a work desk. It's a cozy spot for your stay, whether you're here for work or play.",
    "A family room in our hotel is a spacious, welcoming space designed to accommodate families comfortably. It offers ample room and amenities to ensure a pleasant stay for both adults and children.",
    " a spacious and luxurious option for guests seeking extra comfort during their stay. It features a stylish private bathroom with a shower or bathtub, and a cozy seating area for relaxation.",
    "A residential room in our hotel provides a homely atmosphere and essential amenities for a comfortable long-term stay, making it feel like a home away from home.",
    "The VIP room in our hotel is the pinnacle of luxury and comfort. The VIP room ensures an unforgettable experience, where every detail is curated to surpass expectations.",
    "Designed to exceed expectations, our Deluxe Rooms offer an unparalleled blend of elegance and comfort, ensuring an unforgettable stay for our esteemed guests.",
    "Crafted with discerning travelers in mind, embody refined luxury and unparalleled comfort. Immerse yourself in a world of exclusivity to meet your every need during your stay.",
    " where romance meets luxury. Nestled in a serene ambiance, our Couple Rooms offer the perfect sanctuary for you and your loved one to escape and create unforgettable memories together.",
    "Experience comfort and relaxation in our cozy and stylish hotel rooms designed for your most convenience. Providing modern amenities and a welcoming ambiance for a delightful stay."
];

const images = ['../images/Standard Room.jpg', '../images/Family Room.jpg', '../images/King Room.jpg', '../images/Residential Room.jpg',
    '../images/VIP Room.jpg', '../images/Deluxe Room.jpg', '../images/Executive Room.jpg', '../images/Couple Room.jpg', '../images/Single Room.jpg'
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