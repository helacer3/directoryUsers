<?php
namespace BL;

/**
* Customer Data BL
*/
class CustomerDataBL {

	public function __construct() {

	} 
	/**
	*  validateUserDocument
	*/
	public function validateUserDocument(string $usrDocument):bool {
		//create Empty Var
		$booValidate = true;
		try {
			// sample Validate
			// $arrValidate = $this->restService->validateUserRegistered($usrDocument));
			// register Validate Log
			// $this->registerLogValidate($arrValidate);
			// default return
		} catch (\Exception $ex) {
			throw new Exception("Error Validando documento en fuentes de datos", 1);			
		}
		return $booValidate;
	}
}