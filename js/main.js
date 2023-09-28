$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        $.ajax({
            type: 'POST',
            url: 'send-mail.php',
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function(response) {
                if (response === 'success') {
                    $('#form-message-success').css('display', 'block');
                    $('#form-message-warning').css('display', 'none');
                    $('#contactForm')[0].reset();
                } else {
                    $('#form-message-warning').css('display', 'block');
                    $('#form-message-success').css('display', 'none');
                }
            },
            error: function() {
                $('#form-message-warning').css('display', 'block');
                $('#form-message-success').css('display', 'none');
            }
        });
    });
});
