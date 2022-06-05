$(document).ready(function () {
	$(document).on('click', '.send_form', function () {
		let form = $('#send_ship');
		let $data = {};
		form.find('input, textearea, select').each(function () {
			$data[this.name] = $(this).val();
		});
		$.ajax({
			url: '/shipment/services/sendform/',
			type: 'post',
			data: $data,
			dataType: 'json',
			success: function (res) {
				if (res.success === 1) {
					Swal.fire(
						'Успешно!',
						'Ваш номер отслеживания: ' + res.trackCode,
						'success'
					);
				} else {
					Swal.fire(
						'Ошибка!',
						res.error,
						'error'
					);
				}
			}
		});
	});
	$(document).on('click', '.check_form', function () {
		let form = $('#check_ship');
		let $data = {};
		form.find('input, textearea, select').each(function () {
			$data[this.name] = $(this).val();
		});
		$.ajax({
			url: '/shipment/services/checkform/',
			type: 'post',
			data: $data,
			dataType: 'json',
			success: function (res) {
				if (res.success === 1) {
					Swal.fire(
						'Ваш статус:',
						res.status,
						'success'
					);
				} else {
					Swal.fire(
						'Ошибка!',
						res.error,
						'error'
					);
				}
			}
		});
	});
});