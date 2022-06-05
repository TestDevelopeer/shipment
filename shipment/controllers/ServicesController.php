<?php

include_once('../models/ServicesModel.php');

function sendformAction()
{
	$saveForm = saveForm($_POST);
	if ($saveForm) {
		$res['success'] = 1;
		$res['trackCode'] = $saveForm['form_id'];
	} else {
		$res['success'] = 0;
		$res['error'] = 'Ошибка при сохранении доставки';
	}

	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}

function checkformAction()
{
	$checkForm = checkForm($_POST['form_id']);
	if ($checkForm) {
		$res['success'] = 1;
		$res['status'] = $checkForm['form_status'];
	} else {
		$res['success'] = 0;
		$res['error'] = 'Ваш заказ не найден';
	}

	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}

function getshipAction()
{
	$ship = getShipById($_POST['shipId']);
	if ($ship) {
		$html = "<tr>
					<th scope='row'>{$ship['option_id']}</th>
					<td>
						{$ship['option_regnumber']}
					</td>
					<td>
						{$ship['option_name']}
					</td>
					<td>
						{$ship['option_type']}
					</td>
					<td>
						{$ship['option_year']}
					</td>
					<td class='text-end'>{$ship['option_skipper']}</td>
				</tr>";
		$res['success'] = 1;
		$res['html'] = $html;
	} else {
		$res['success'] = 0;
	}
	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}

function changestatusAction()
{
	$changeStatus = changeStatus($_POST['id'], $_POST['status']);
	if ($changeStatus) {
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}

function changeshipAction()
{
	$changeShip = changeShip($_POST['id'], $_POST['shipId']);
	if ($changeShip) {
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}

function deleteformAction()
{
	$deleteForm = deleteForm($_POST['id']);
	if ($deleteForm) {
		$res['success'] = 1;
		header('Location: /shipment/panel/');
	} else {
		$res['success'] = 0;
	}
	http_response_code(200);
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
}
