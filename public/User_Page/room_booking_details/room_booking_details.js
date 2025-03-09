document.addEventListener('DOMContentLoaded', function () {
    // Example array in JavaScript
    const list_room_title = ['Standard Room', 'Family Room', 'King Room', 'Residential Room', 'VIP Room',
        'Deluxe Room', 'Executive Room', 'Couple Room', 'Single Room'
    ];
    const list_room_description = [
        "A comfy space with modern decor. It has a queen or twin beds, a private bathroom, and a work desk. It's a cozy spot for your stay, whether you're here for work or play.",
        "A family room in our hotel is a spacious, welcoming space designed to accommodate families comfortably. It offers ample room and amenities to ensure a pleasant stay for both adults and children.",
        "A spacious and luxurious option for guests seeking extra comfort during their stay. It features a stylish private bathroom with a shower or bathtub, and a cozy seating area for relaxation.",
        "A residential room in our hotel provides a homely atmosphere and essential amenities for a comfortable long-term stay, making it feel like a home away from home.",
        "The VIP room in our hotel is the pinnacle of luxury and comfort. The VIP room ensures an unforgettable experience, where every detail is curated to surpass expectations.",
        "Designed to exceed expectations, our Deluxe Rooms offer an unparalleled blend of elegance and comfort, ensuring an unforgettable stay for our esteemed guests.",
        "Crafted with discerning travelers in mind, embody refined luxury and unparalleled comfort. Immerse yourself in a world of exclusivity to meet your every need during your stay.",
        "Where romance meets luxury. Nestled in a serene ambiance, our Couple Rooms offer the perfect sanctuary for you and your loved one to escape and create unforgettable memories together.",
        "Experience comfort and relaxation in our cozy and stylish hotel rooms designed for your convenience. Providing modern amenities and a welcoming ambiance for a delightful stay."
    ];

    const list_room_overview = [
        "A cozy and affordable stay with all the essentials. It typically features a comfortable queen-size or twin bed, a private bathroom, free Wi-Fi, a flat-screen TV, and a work desk. The room is ideal for 1-2 guests looking for a simple, relaxing space with modern conveniences at a budget-friendly rate.",
        "A spacious and perfect for families or groups, offering multiple beds, such as a queen bed and twin beds, to comfortably accommodate up to 4 guests. It includes a private bathroom, free Wi-Fi, a flat-screen TV, and a seating area. Designed for convenience and relaxation, the room provides plenty of space for everyone to unwind and enjoy a comfortable stay together.",
        "A luxurious and spacious stay with a large, comfortable king-size bed. Ideal for couples or solo travelers seeking extra comfort, the room includes amenities like a private bathroom, free Wi-Fi, a flat-screen TV, and a work desk. With its elegant design and modern facilities, the King Room provides a relaxing and upscale experience for guests.",
        "Designed for extended stays, offering a spacious and home-like environment. It typically includes a separate bedroom with a queen or king-size bed, a living area, and a fully equipped kitchenette for added convenience. Guests can enjoy amenities such as free Wi-Fi, a flat-screen TV, a work desk, and a private bathroom. Ideal for long-term guests or families, the Residential Room provides comfort, privacy, and all the essentials for a longer, more relaxed stay.",
        "An exclusive, premium experience with spacious and elegantly designed interiors. It features a luxurious king-size bed, a stylish seating area, and upscale amenities such as a private bathroom with premium toiletries, free Wi-Fi, a flat-screen TV, and a minibar. Guests staying in the VIP Room enjoy added perks like personalized services, enhanced privacy, and top-tier comfort, making it perfect for those seeking a lavish and memorable stay.",
        "A blend of comfort and luxury, with more space and upgraded amenities. It features a plush king-size or queen-size bed, a private bathroom with premium toiletries, free Wi-Fi, a flat-screen TV, and a cozy seating area. Designed for guests who appreciate both comfort and style, the Deluxe Room provides a relaxing, upscale atmosphere for a memorable stay.",
        "A blend of luxury and comfort, designed for both business and leisure travelers. Featuring a spacious layout with elegant furnishings, the room includes a plush king-sized bed, a well-appointed work desk, and high-speed internet access. Guests can enjoy modern amenities such as a flat-screen TV, minibar, and premium toiletries, as well as access to exclusive lounge areas and enhanced services for a truly memorable stay.",
        "A romantic retreat designed for pairs seeking a cozy and intimate escape. This charming room features a comfortable queen-sized bed, stylish decor, and soft lighting to create a warm atmosphere. It includes thoughtful amenities like a private balcony, a relaxing seating area, and a mini-bar. With its inviting ambiance and attention to detail, the Couple Room provides the perfect setting for a memorable stay together.",
        "A well-appointed space ideal for solo travelers seeking comfort and convenience. It features a cozy single bed, a functional work desk, and modern amenities like a flat-screen TV and high-speed internet access. The room is thoughtfully designed with a stylish and contemporary decor, ensuring a pleasant and relaxing stay. It also includes essential conveniences such as a mini-fridge and a private bathroom with quality toiletries.",
    ];

    document.querySelectorAll('.room-description').forEach(function (container) {
        const bladeValue = container.dataset.roomType;

        // Find the index of the bladeValue in the list_room_title array
        const roomIndex = list_room_title.indexOf(bladeValue);

        if (roomIndex !== -1) {
            // If the room name is found, get the corresponding description
            const roomDescription = list_room_description[roomIndex];

            // Display the description in the DOM
            container.querySelector('.room_description').textContent = roomDescription;
        }
    });

    document.querySelectorAll('.room-overview').forEach(function (container) {
        const bladeValue = container.dataset.roomType;

        // Find the index of the bladeValue in the list_room_title array
        const roomIndex = list_room_title.indexOf(bladeValue);

        if (roomIndex !== -1) {
            // If the room name is found, get the corresponding description
            const roomOverview = list_room_overview[roomIndex];

            // Display the description in the DOM
            container.querySelector('.room_overview').textContent = roomOverview;
        }
    })
});

const btn_checkAvailability = document.getElementById("btn_checkAvailability");
const checkAvailability_form = document.getElementById('check_availability_form');

const btn_directBooking = document.getElementById("btn_directBooking");
const directBooking_form = document.getElementById('directBooking_form');

function call_directBooking_Form() {
    btn_directBooking.classList.remove("btn-secondary");
    btn_directBooking.classList.add("btn-primary");

    btn_checkAvailability.classList.remove("btn-primary");
    btn_checkAvailability.classList.add("btn-secondary");

    checkAvailability_form.style.display = "none";

    directBooking_form.style.display = "block";
    directBooking_form.style.animation = "fadeInUp 1s ease";
}

function call_checkAvailability_Form() {
    btn_checkAvailability.classList.add("btn-primary");
    btn_checkAvailability.classList.remove("btn-secondary");

    btn_directBooking.classList.remove("btn-primary");
    btn_directBooking.classList.add("btn-secondary");

    checkAvailability_form.style.display = "block";
    checkAvailability_form.style.animation = "fadeInUp 1s ease";

    directBooking_form.style.display = "none";
}
