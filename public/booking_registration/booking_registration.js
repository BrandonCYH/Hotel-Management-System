document.addEventListener("DOMContentLoaded", function () {
    var updateServicesUrl = "{{ route('update.services') }}";
    const output = document.getElementById('output');
    const service_name = document.getElementById('service_name');
    const service_price = document.getElementById('service_price');
    const selectedServices = {};

    // Function to update the displayed services
    function updateOutput() {
        output.innerHTML = '';
        service_name.innerHTML = '';
        service_price.innerHTML = '';

        const servicesSelected = Object.keys(selectedServices).some(serviceName => selectedServices[serviceName].quantity > 0); //check if the service is selected

        if (!servicesSelected) {
            // If no services are selected, display a message
            output.innerHTML = '<div>No service selected</div>';
        } else {
            // Prepare an array to hold the selected services data
            let selectedServicesData = [];

            // Loop through each selected service
            Object.keys(selectedServices).forEach(serviceName => {
                const { price, quantity } = selectedServices[serviceName];

                if (quantity > 0) {
                    // Append the service data to the HTML output
                    service_name.innerHTML += `<h5 style="font-size: 1rem;"><i class="fa-solid fa-circle-check" style="color: green;"></i> ${serviceName} <span class="text-success"> ($${price.toFixed(2)}) X ${quantity}</span> each:</h5>`;
                    service_price.innerHTML += `<h5 style="font-size: 1rem;" class="text-success mt-2"> $${(price * quantity).toFixed(2)}</h5>`;

                    // Add the selected service data to the array
                    selectedServicesData.push({
                        service_name: serviceName,
                        service_price: price,
                        quantity: quantity
                    });
                }
            });

            console.log(selectedServicesData);
        }
    }

    // Handle increment buttons
    document.querySelectorAll('.button-increment').forEach(button => {
        button.addEventListener('click', function () {
            const parent = this.closest('.col-4').previousElementSibling;  // Get the sibling with the service name and price
            const serviceName = parent.querySelector('h5').dataset.serviceName;
            const price = parseFloat(parent.querySelector('h5').dataset.servicePrice);
            const input = this.parentElement.querySelector('.number-input');
            let value = parseInt(input.value);

            if (value < input.max) {
                value += 1;
                input.value = value;

                // Store the selected service in the object
                if (!selectedServices[serviceName]) {
                    selectedServices[serviceName] = { price: price, quantity: value };
                } else {
                    selectedServices[serviceName].quantity = value;
                }

                updateOutput();
            }
        });
    });

    // Handle decrement buttons
    document.querySelectorAll('.button-decrement').forEach(button => {
        button.addEventListener('click', function () {
            const parent = this.closest('.col-4').previousElementSibling;  // Get the sibling with the service name and price
            const serviceName = parent.querySelector('h5').dataset.serviceName;
            const price = parseFloat(parent.querySelector('h5').dataset.servicePrice);
            const input = this.parentElement.querySelector('.number-input');
            let value = parseInt(input.value);

            if (value > input.min) {
                value -= 1;
                input.value = value;

                // Update the selected service in the object
                if (selectedServices[serviceName]) {
                    selectedServices[serviceName].quantity = value;
                }

                updateOutput();
            }
        });
    });
});

$('.countrypicker').countrypicker();