<?php
namespace Service;

use BL\UserBL;

/**
* validate Service Class
*/
class ValidateService {

	/**
	* construct
	*/
	public function __construct() {
	}
		
	/**
	* register Validate
	*/
	public function registerValidate(array $usrData):array {
		// default Var
		$arrResponse = array(
			'status'  => 'OK',
			'message' => 'Usuario Registrado Correctamente'
		);
		// instance User BL
		$userBL = new UserBL();
		// validate User Name
		if (strlen(trim($usrData['usrName'])) < 3) {
			$arrResponse = array(
				'status'  => 'ERROR',
				'message' => 'Favor digite su nombre completo'
			);	
		// validate User Email
		} else if (!filter_var($usrData['usrEmail'], FILTER_VALIDATE_EMAIL)) {
			$arrResponse = array(
				'status'  => 'ERROR',
				'message' => 'Favor digite una dirección de email valida'
			);
		// validate User Exist
		} else if ($userBL->existUserValidate($usrData) > 0) {
			$arrResponse = array(
				'status'  => 'ERROR',
				'message' => 'El usuario, ya está registrado en el sistema'
		);
		// validate User Password
		} else if (
			strlen(trim($usrData['usrPassword'])) < 6
			// preg_match("/[!@#$%*a-zA-Z0-9]{6,}/", $usrData['usrPassword']) // length and Digit
		) {	
			$arrResponse = array(
				'status'  => 'ERROR',
				'message' => 'El password debe tener mínimo 6 caracteres de longitud e incluir números'
			);
		}
		// default Response
		return $arrResponse;
	}
	
}