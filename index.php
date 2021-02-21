<?php
require_once 'vendor/autoload.php';
include_once 'src\Controller\IndexController.php';
include_once 'src\Controller\UserController.php';
include_once 'src\Controller\AjaxController.php';
include_once 'src\Service\ValidateService.php';

use Controller\IndexController;
use Controller\UserController;
use Controller\AjaxController;
use Service\ValidateService;


//inicio de sesion
session_start();
// twig File System Loader
$loader  = new \Twig\Loader\FilesystemLoader('templates/views');
$options = array('cache' => 'cache/twig/', 'debug' => true);
$twig    = new \Twig\Environment($loader, $options);
$twig->addGlobal('session', $_SESSION);

// echo print_r($_POST);
// validate Post
if (isset($_POST['action'])) {
	// validate Request Type
	if (isset($_POST['reqType']) && $_POST['reqType'] == "ajax") {
		// ajax Controller
		$ajxController = new AjaxController();
	} else { 
		// clean Session
		if (isset($_SESSION['errMessage'])) { unset($_SESSION['errMessage']); }
		// validate Service
		$vldService    = new ValidateService($usrService);
		// instance Class
		$usrController = new UserController($vldService, $twig); 
		// call User Action Method
		$usrController->indexAction();
	}
} else {
	// instance Class
	$indController = new IndexController($twig);
	// call Route Action Method
	$indController->routeAction();
}
// clean POST
unset($_POST);
