$(document).ready(function () {
	$(document).on('change', '#select_ship', function () {
		let val = $(this).val();
		$.ajax({
			url: '/shipment/services/getship/',
			type: 'post',
			data: { 'shipId': val },
			dataType: 'json',
			success: function (res) {
				if (res.success === 1) {
					$('#shipment_option').html(res.html);
				}
			}
		});
	});
	$(document).on('click', '#save_status', function () {
		let status = $('#status_text').val();
		let id = $('#status_text').attr('data-form');
		$.ajax({
			url: '/shipment/services/changestatus/',
			type: 'post',
			data: { status, id },
			dataType: 'json',
			success: function (res) {
				if (res.success === 1) {
					Swal.fire(
						'Успешно!',
						'Статус заказа был изменен',
						'success'
					)
				}
			}
		});
	});
	$(document).on('click', '#save_ship', function () {
		let shipId = $('#select_ship').val();
		let id = $('#status_text').attr('data-form');
		$.ajax({
			url: '/shipment/services/changeship/',
			type: 'post',
			data: { shipId, id },
			dataType: 'json',
			success: function (res) {
				if (res.success === 1) {
					Swal.fire(
						'Успешно!',
						'Судно заказа было изменено',
						'success'
					)
				}
			}
		});
	});
	$(document).on('click', '#delete_order', function () {
		let id = $('#status_text').attr('data-form');
		Swal.fire({
			title: 'Вы уверены что хотите удалить заказ?',
			showCancelButton: true,
			confirmButtonText: 'Да',
			cancelButtonText: `Отмена`,
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: '/shipment/services/deleteform/',
					type: 'post',
					data: { id },
					dataType: 'json',
					success: function (res) {
						if (res.success === 1) {
							location.href = '/shipment/panel/';
						}
					}
				});
			}
		})

	});
});