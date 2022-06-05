<?php

function getAllForms()
{
	$sql = "SELECT * FROM `users_form`";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	$rs = createSmartyRsArray($rs);
	return $rs;
}

function getFormById($formId)
{
	$sql = "SELECT * FROM `users_form` WHERE `form_id` = '{$formId}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	$rs = mysqli_fetch_assoc($rs);
	return $rs;
}

function getAllShipments()
{
	$sql = "SELECT * FROM `shipment_options`";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	$rs = createSmartyRsArray($rs);
	return $rs;
}

function getShipById($id)
{
	$sql = "SELECT * FROM `shipment_options` WHERE `option_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	$rs = mysqli_fetch_assoc($rs);
	return $rs;
}

function changeStatus($id, $status)
{
	$sql = "UPDATE `users_form` SET `form_status` = '{$status}' WHERE `form_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	return $rs;
}
function changeShip($id, $shipId)
{
	$sql = "UPDATE `users_form` SET `shipment_options` = '{$shipId}' WHERE `form_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	return $rs;
}
function deleteForm($id)
{
	$sql = "DELETE FROM `users_form` WHERE `form_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	return $rs;
}

function saveForm($form)
{
	$sql = "INSERT INTO `users_form`(
		`form_id`, 
		`name_sender`, 
		`email_sender`, 
		`phone_sender`, 
		`point_departure`, 
		`point_destination`, 
		`inn_sender`, 
		`name_recipient`, 
		`inn_recipient`, 
		`phone_recipient`, 
		`weight`, 
		`height`, 
		`width`, 
		`length`,
		`form_status`,
		`shipment_options`) VALUES (
			NULL,
			'{$form['name_sender']}',
			'{$form['email_sender']}',
			'{$form['phone_sender']}',
			'{$form['point_departure']}',
			'{$form['point_destination']}',
			'{$form['inn_sender']}',
			'{$form['name_recipient']}',
			'{$form['inn_recipient']}',
			'{$form['phone_recipient']}',
			'{$form['weight']}',
			'{$form['height']}',
			'{$form['width']}',
			'{$form['length']}',
			'Ожидает модерацию.',
			0)";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	if ($rs) {
		$sql = "SELECT `form_id` FROM `users_form` ORDER BY `form_id` DESC LIMIT 1";
		$rs = mysqli_query($GLOBALS["db"], $sql);
		$rs = mysqli_fetch_assoc($rs);
	}
	return $rs;
}

function checkForm($formId)
{
	$sql = "SELECT `form_status` FROM `users_form` WHERE `form_id` = '{$formId}'";
	$rs = mysqli_query($GLOBALS["db"], $sql);
	$rs = mysqli_fetch_assoc($rs);
	return $rs;
}
