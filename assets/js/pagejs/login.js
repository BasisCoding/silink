$(document).ready(function() {

	$('#form-login').on('submit', function() {

		$.ajax({
			url: base_url+'loginproses',
			type: 'POST',
			dataType: 'JSON',
			data: $(this).serialize(),
			success: function(response) {
				notification(response.type, response.title, response.message);

				setTimeout(function() {
					window.location.href = response.redirect;
				}, 1500);
			}
		});

		return false;
	});
});