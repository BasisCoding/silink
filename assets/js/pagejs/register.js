$(document).ready(function() {

    $('#form-register').on('submit', function() {

        $.ajax({
            url: base_url + 'registerproses',
            type: 'POST',
            dataType: 'JSON',
            data: $(this).serialize(),

            success: function(response) {
                if (response.type == 'val_error') {
                    $('.invalid-feedback-nama_lengkap').html(response.nama_lengkap);
                    $('.invalid-feedback-username').html(response.username);
                    $('.invalid-feedback-email').html(response.email);
                    $('.invalid-feedback-password').html(response.password);
                    $('.invalid-feedback-password_confirmation').html(response.password_confirmation);
                } else {
                    notification(response.type, response.title, response.message)

                    setTimeout(function() {
                        window.location.href = response.redirect;
                    }, 1500);
                }
            }
        });

        return false;
    });
});
