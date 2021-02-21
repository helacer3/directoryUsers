<?php
namespace Controller;

include_once 'Controller\Base\BaseAjaxController.php';
include_once 'BL\UserBL.php';

use Service\UserService;
/**
* Ajax Controller Class
*/
class AjaxController extends BaseAjaxController {

	/**
	* construct
	*/
	public function __construct() {
		$_POST     = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$reqAction = $_POST['action'];
		$this->{$reqAction}();
	}

	/**
	* get User Info
	*/
	public function getUserInfo() {
		// default Var
		$arrResponse = array('status' => 'OK', 'data' => null);
		try {
			// load User BL
			$usrBL    = new UserBL();
			// request User Value
			$usrValue = $_POST['usrValue'];
			// find User Data
			$usrData  = $usrBL->findUserData($usrValue);
			// echo "<pre>"; print_r($usrData); echo "</pre>"; die;
			// validate Response
			if ($usrData != null) {
				$arrResponse = array(
					'status' => 'OK', 
					'data'   => $usrData
				);
			}
		} catch (\Exception $ex) {
			$arrResponse = array('status' => 'ERROR', 'data' => null);
		}
		// default Echo
		echo $this->genericResponseJson($arrResponse);
		die();
	}
}