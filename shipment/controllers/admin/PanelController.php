<?php

include_once "../models/ServicesModel.php";

$smarty->setTemplateDir(TemplateAdminPrefix);

function IndexAction($smarty)
{
	$forms = getAllForms();

	$smarty->assign('forms', $forms);

	loadTemplate($smarty, 'index/index');
}

function formAction($smarty)
{
	$formId = $_GET['id'];

	$form = getFormById($formId);
	if ($form && $form['shipment_options'] !== 0) {
		$formShip = getShipById($form['shipment_options']);
		$smarty->assign('formShip', $formShip);
	}
	$shipmentOptions = getAllShipments();

	$smarty->assign('form', $form);
	$smarty->assign('shipmentOptions', $shipmentOptions);

	loadTemplate($smarty, 'form/index');
}
