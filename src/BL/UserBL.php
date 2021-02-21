<?php
namespace BL;

include_once 'src\Model\User.php';

use Model\User;

/**
* User BL
*/
class UserBL {


	/**
	* construct
	*/
	public function __construct() {
	}

	/**
	* login User Validate
	*/
	public function loginUserValidate(array $usrData):int {
		return User::where('email', '=', trim($usrData['usrEmail']))
			->where('password', '=', MD5(trim($usrData['usrPassword'])))
			->where('enabled', '=', 1)
			->count();
	}

	/**
	* exist User Validate
	*/
	public function existUserValidate(array $usrData):int {
		return User::where('email', '=', trim($usrData['usrEmail']))
			->orWhere('document', '=', trim($usrData['usrDocument']))
			->count();
	}

	/**
	* find User Data
	*/
	public function findUserData(string $usrValue): ?object {
		return User::where('email', '=', trim($usrValue))
			->orWhere('document', '=', trim($usrValue))
			->get()->first();
	}

	/**
	* create User
	*/
	public function createUser(array $usrData):bool {
		// create Default Var
		$booValidate = true;
		try {
			// intance Model Class
			$users               = new User;
			// set Values
			$users->name         = $usrData['usrName'];
			$users->document     = $usrData['usrDocument'];
			$users->email        = $usrData['usrEmail'];
			$users->country_code = $usrData['usrCountry'];
			$users->password     = MD5($usrData['usrPassword']);
			$users->enabled      = true;
			$users->save();
		} catch (\Exception $ex) {
			echo "Error: ".$ex->getMessage();die;
			$booValidate = false;
		}
		// default Return
		return $booValidate;
	}

		
	/**
	* set User Session
	*/
	public function setUserSession(string $usrEmail):void {
		// validate Email
		if ($usrEmail != "") {
			// set Session
			$_SESSION['user'] = $usrEmail;
		}
	}

	/**
	* user Logout
	*/
	public function userLogout():void {
		// session Destroy
		session_destroy();
	}
}