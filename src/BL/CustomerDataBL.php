<?php
namespace BL;

// bl
include_once 'src\BL\UserBL.php';
include_once 'src\BL\UserRestBL.php';

use BL\UserBL;
use BL\UserRestBL;

/**
* Customer Data BL
*/
class CustomerDataBL {

	public function __construct() {

	} 
	
	/**
	*  validate User Data
	*/
	public function validateUserData(string $usrData) {
		//create Default Response
		$infUser = null;
		try {
			// instance User BL
			$blUser     = new UserBl();
			// instance User Rest BL
			$blUserRest = new UserRestBL();
			// validate User In Database
			$infUser    = $blUser->findUserData($usrData);
			// validate Response
			if ($infUser == null) {
				// load Users Rest Service
				$lstUsers = $blUserRest->validateUserRest();
				$infUser  = $this->validateServiceResponse($lstUsers, $usrData);
			}
		} catch (\Exception $ex) {
			throw new Exception("Error Validando documento en fuentes de datos", 1);			
		}
		return $infUser;
	}


	/**
	* validate Service Response
	*/
	public function validateServiceResponse($lstUsers, $usrData) {
		// default Var
		$defResponse = array();
		// validate Service Response
		if ($lstUsers != null && property_exists($lstUsers, "objects")) {
			// iterate Users
			foreach ($lstUsers->objects as $user) {
				// validate User Data
				if ($user->correo == $usrData || $user->cedula == $usrData) {
					$defResponse = array (
						'name'         => $user->primer_nombre." ".$user->apellido,
						'email'        => $user->correo,
						'document'     => $user->cedula,
						'country_code' => $user->pais
					);
				}
			}
		}
		// default Return
		return $defResponse;
	}
}