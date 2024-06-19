// login.js
$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                let res = JSON.parse(response);
                Swal.fire({
                    icon: res.success ? 'success' : 'error',
                    title: res.success ? 'Seja bem vindo' : 'Oops...',
                    text: res.message
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed) {
                        if (res.success) {
                            window.location.href = res.redirect;
                        }
                    }
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo deu errado!'
                });
            }
        });
    });
});
