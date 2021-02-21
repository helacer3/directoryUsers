<?php
namespace Controller\Base;

/**
* Bse Ajax Controller Class
*/
class BaseAjaxController {
	
	/**
	* construct
	*/
	public function __construct() {
		$reqAction  = $_POST['action'];
		$this->{$reqAction}();
	}

	/**
	* generic Response
	*/
	public genericResponseJson(array $arrResponse) {
		return json_encode($arrResponse);
	}
}
