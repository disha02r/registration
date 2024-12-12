$(document).ready(function () {
    $('#applicationForm').on('submit', function (event) {
        // Get the input values
        const fullName = $('#name').val();
        const email = $('#email').val();

        // Validation
        if (fullName === '' || email === '') {
            alert('Please fill out all required fields.');
            event.preventDefault();
        } else {
            alert('Form submitted successfully!');
        }
    });
});
