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

    document.querySelectorAll('.room-container').forEach(function (container) {
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
});
