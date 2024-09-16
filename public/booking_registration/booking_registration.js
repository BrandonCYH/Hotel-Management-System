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