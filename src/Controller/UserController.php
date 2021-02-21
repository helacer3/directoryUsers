<?php
namespace Controller;

include_once 'src\Controller\Base\BaseController.php';
// bl
include_once 'src\BL\UserBL.php';
include_once 'src\BL\CustomerDataBL.php';

use Controller\Base\BaseController; 
use BL\UserBL;
use BL\CustomerDataBL;

/**
* user Controller Class
*/
class UserController extends BaseController {

	protected $twig;
	protected $basePath;
	protected $cstService;
	protected $usrService;
	protected $clsValidate;

	/**
	* construct
	*/
	public function __construct($clsValidate, $twig) {
		$this->twig        = $twig;
		$this->clsValidate = $clsValidate;
		$this->basePath    = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	}
		
	/**
	* index Action
	*/
	public function indexAction() {
		// default Vars
		$arrParams = array();
		$mtdName = "loginUser";
		// define ID Page
 		$actPage   = (isset($_POST['action'])) ? $_POST['action']: 'login';
		// switch Destination Page
		switch ($actPage) {
			case 'login':
				$mtdName = "loginUser";
				break;
			case 'register':
				$mtdName = "registerUser";
				break;			
			default:
				break;
		}
		// default Return
		return $this->{$mtdName}();
	}

	/**
	* login User
	*/
	private function loginUser() {
		// request Params
		$usrData = array(
			'usrEmail'    => $_POST['usr_email'],
			'usrPassword' => $_POST['usr_password']
		);
		// instace User BL
		$blUser = new UserBL();
		// login User Validate 
		if ($blUser->loginUserValidate($usrData) > 0) {
			// set User Session
			$blUser->setUserSession($usrData['usrEmail']);
			// default Redirect
			header("Location: http://".$this->basePath);
		}
		// default Redirect
		header("Location: http://".$this->basePath."?page=login");
	}

	/**
	* register User
	*/
	private function registerUser():void {
		// request Params
		$usrData = array(
			'usrName'     => $_POST['usr_name'],
			'usrDocument' => $_POST['usr_document'],
			'usrCountry'  => $_POST['usr_country'],
			'usrEmail'    => $_POST['usr_email'],
			'usrPassword' => $_POST['usr_password']
		);
		// clean POST
		unset($_POST);
		// data Validate
		$datValidate = $this->clsValidate->registerValidate($usrData);
		// data Validate
		if ($datValidate['status'] == "OK") {
			// instace User BL
			$blUser = new UserBL();
			// instance Customer Data BL
			$blCustomerData = new CustomerDataBL();
			// call Customer Service Data Validation
			$blCustomerData->validateUserDocument($usrData['usrDocument']);
			// create User Validate
			if ($blUser->createUser($usrData)) {
				// redirect To Home
				header("Location: http://".$this->basePath."?page=login");
			} else {
				$_SESSION['errMessage'] = "Ocurrió un error al registrar el usuario";
			}
		} else {
			$_SESSION['errMessage'] = $datValidate['message'];
		}
		// default Redirect
		header("Location: http://".$this->basePath."?page=login");
	}
}