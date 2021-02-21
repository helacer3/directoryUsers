<?php
namespace Controller;

include_once 'src\Controller\Base\BaseAjaxController.php';
include_once 'src\BL\UserBL.php';

use Controller\Base\BaseAjaxController;
use BL\CustomerDataBL;

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
			// load Customer User BL
			$customerBL = new CustomerDataBL();
			// request User Value
			$usrValue   = $_POST['usrValue'];
			// find User Data
			$usrData    = $customerBL->validateUserData($usrValue);
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