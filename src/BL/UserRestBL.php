<?php
namespace BL;

/**
* User Rest BL
*/
class UserRestBL {


	/**
	* validate User Rest
	*/
	public function validateUserRest():object {
		$arrResponse = null;
		$urlService  = "http://www.mocky.io/";
		$pthService  = "v2/5d9f38fd3000005b005246ac?mocky-delay=10s";
		$api = new \RestClient([
			'base_url' => $urlService
		]);
		$result = $api->get($pthService, []);
		if($result->info->http_code == 200) {
			$arrResponse = $result->decode_response();
		}
		// default Response
		return $arrResponse;
	}
}