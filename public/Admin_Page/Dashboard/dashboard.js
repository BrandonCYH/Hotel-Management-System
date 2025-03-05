$(document).ready(function () {
    load_barchart();
    load_piechart();
});


function load_barchart() {
    const revenueData = [
        { month: 'January', revenue: 5000 },
        { month: 'February', revenue: 7000 },
        { month: 'March', revenue: 8000 },
        { month: 'April', revenue: 6500 },
        { month: 'May', revenue: 7200 },
        { month: 'June', revenue: 7200 },
        { month: 'July', revenue: 7200 },
        { month: 'August', revenue: 7200 },
        { month: 'September', revenue: 7200 },
        { month: 'October', revenue: 7200 },
        { month: 'November', revenue: 7200 },
        { month: 'December', revenue: 7200 },
    ];

    const labels = revenueData.map(data => data.month);
    const dataPoints = revenueData.map(data => data.revenue);

    const ctx = document.getElementById('revenueChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Monthly Revenue',
                data: dataPoints,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function load_piechart() {
    // Revenue data for each room type
    const revenueByRoomType = [
        { roomType: 'Single Room', revenue: 15000 },
        { roomType: 'Double Room', revenue: 25000 },
        { roomType: 'Family Room', revenue: 17000 },
        { roomType: 'King Room', revenue: 14000 },
        { roomType: 'Deluxe Room', revenue: 23000 },
        { roomType: 'Suite', revenue: 30000 }
    ];

    // Extract room types (labels) and revenue data
    const labels = revenueByRoomType.map(data => data.roomType);
    const dataPoints = revenueByRoomType.map(data => data.revenue);

    // Function to generate random colors
    const generateColors = (count) => {
        return Array.from({ length: count }, () => {
            const r = Math.floor(Math.random() * 256);
            const g = Math.floor(Math.random() * 256);
            const b = Math.floor(Math.random() * 256);
            return `rgba(${r}, ${g}, ${b}, 0.7)`; // Adjust transparency
        });
    };

    // Generate dynamic colors based on dataset size
    const backgroundColors = generateColors(dataPoints.length);

    // Get the canvas context
    const ctx = document.getElementById('roomRevenueChart').getContext('2d');

    // Create the Doughnut Chart
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels, // Room types as labels
            datasets: [{
                label: 'Revenue',
                data: dataPoints, // Revenue values
                backgroundColor: backgroundColors,
                hoverOffset: 4 // Highlight effect on hover
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom' // Legend below the chart
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            const value = tooltipItem.raw.toLocaleString(); // Format numbers with commas
                            return `${tooltipItem.label}: $${value}`;
                        }
                    }
                }
            },
            responsive: true, // Make it responsive
            maintainAspectRatio: false // Allow custom container size
        }
    });
}