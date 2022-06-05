<?php

include_once "../models/AuthModel.php";
    $smarty->setTemplateDir(TemplateAdminPrefix);

function IndexAction($smarty){
    if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
        header("Location: /panel/");
    }
	$smarty->assign('pageTitle', 'Авторизация');
	loadTemplate($smarty, 'adminlogin/body');
}

function authAction(){
    if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
        header("Location: /panel/");
    }
    if(!$_POST['login'] || !$_POST['pwd']){
        header('Location: /adminlogin/');
        die;
    }
	$login = isset($_POST['login']) ? $_POST['login'] : null;
    $login = trim($login);
    $login = htmlspecialchars($login);

    $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
    $pwd = trim($pwd);
    $pwd = htmlspecialchars($pwd);
    $pwd = md5($pwd);

    $check = checkAdmin($login, $pwd);
    if($check){
        $_SESSION['admin'] = $check;
        $res['title'] = 'Успешно!';
        $res['message'] = 'Вы будете перенаправлены на панель администратора';
        $res['icon'] = 'success';
    } else {
        $res['title'] = 'Ошибка!';
        $res['message'] = 'Неверный логин или пароль';
        $res['icon'] = 'error';
    }

    echo json_encode($res);
}

function amdinlogoutAction(){
    if(!isset($_SESSION['admin'])){
        header("Location: /panel/");
        die;
    }
    unset($_SESSION['admin']);
    $res['success'] = 1;
    echo json_encode($res);
    //header('Location: /adminlogin/');
}
