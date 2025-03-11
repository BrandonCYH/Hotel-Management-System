$(function () {

  var from_$input = $('.input_from').pickadate(),
    from_picker = from_$input.pickadate('picker')

  var to_$input = $('.input_to').pickadate(),
    to_picker = to_$input.pickadate('picker')


  // Check if there’s a “from” or “to” date to start with.
  if (from_picker.get('value')) {
    to_picker.set('min', from_picker.get('select'))
  }
  if (to_picker.get('value')) {
    from_picker.set('max', to_picker.get('select'))
  }

  // When something is selected, update the “from” and “to” limits.
  from_picker.on('set', function (event) {
    if (event.select) {
      to_picker.set('min', from_picker.get('select'))
    }
    else if ('clear' in event) {
      to_picker.set('min', false)
    }
  })
  to_picker.on('set', function (event) {
    if (event.select) {
      from_picker.set('max', to_picker.get('select'))
    }
    else if ('clear' in event) {
      from_picker.set('max', false)
    }
  })

  $(".input_from, .input_to").each(function () {
    $(this).pickadate(); // Initialize pickadate for each input field
  });

  $("#directBooking_form form").on("submit", function (event) {
    let from_picker = $(this).find(".input_from").pickadate("picker");
    let to_picker = $(this).find(".input_to").pickadate("picker");

    if (!from_picker.get("select") || !to_picker.get("select")) {
      alert("Please select both check-in and check-out dates for Direct Booking.");
      event.preventDefault(); // Stop form submission
    }
  });

  $("#check_availability_form form").on("submit", function (event) {
    let from_picker = $(this).find(".input_from").pickadate("picker");
    let to_picker = $(this).find(".input_to").pickadate("picker");

    if (!from_picker.get("select") || !to_picker.get("select")) {
      alert("Please select both check-in and check-out dates for Check Availability.");
      event.preventDefault(); // Stop form submission
    }
  });
});