function show_mainMenu() {
    let main_menu = document.getElementById("main_menu");
    let drinks_menu = document.getElementById("drinks_menu");

    drinks_menu.classList.add("d-none");
    main_menu.classList.remove("d-none");
    main_menu.style.animation = "fadeInUp 1s ease forwards";
}

function show_drinksMenu() {
    let main_menu = document.getElementById("main_menu");
    let drinks_menu = document.getElementById("drinks_menu");

    main_menu.classList.add("d-none");
    drinks_menu.classList.remove("d-none");
    drinks_menu.style.animation = "fadeInUp 1s ease forwards";
}

const jumbotron = document.getElementById('room_image');
const room_title = document.getElementById('room_title');
const room_description = document.getElementById('room_description');

const list_room_title = ['Single Room', 'Family Room', 'Residential Room', 'VIP Room', 'Ocean Heaven Hotel'];
const list_room_description = [
    "Experience comfort and relaxation in our cozy and stylish hotel rooms designed for your most convenience. Each room type is thoughtfully curated to offer a tranquil retreat, providing modern amenities and a welcoming ambiance for a delightful stay.",
    "A family room in our hotel is a spacious, welcoming space designed to accommodate families comfortably. It offers ample room and amenities to ensure a pleasant stay for both adults and children.",
    "A residential room in our hotel provides a homely atmosphere and essential amenities for a comfortable long-term stay, making it feel like a home away from home.",
    "The VIP room in our hotel is the pinnacle of luxury and comfort. The VIP room ensures an unforgettable experience, where every detail is curated to surpass expectations.",
    "Where comfort meets personalized care, our hotel is a sanctuary of hospitality. From the warm welcome at arrival to the attentive service during your stay, we strive to create memorable experiences that linger long after you've departed."
];

const images = ['../index/images/single_room_bg.jpg', '../index/images/family_room_bg.jpg', '../index/images/residential_room_bg.jpg',
    '../index/images/VIP_room_bg.jpg', '../index/images/beach.jpg'
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