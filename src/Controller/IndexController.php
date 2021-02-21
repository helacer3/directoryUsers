<?php
namespace Controller;

include_once 'src\Controller\Base\BaseController.php';
// bl
include_once 'src\BL\UserBL.php';
include_once 'src\BL\CountriesBL.php';

use Controller\Base\BaseController;
use BL\UserBL;
use BL\CountriesBL;

/**
* principal Controller Class
*/
class IndexController {

	// class Vars
	protected $twig;
	protected $basePath;

	/**
	* construct
	*/
	public function __construct($twig) {
		$this->twig     = $twig;
		$this->basePath = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	}

	/**
	* route Action
	*/
	public function routeAction() {
		// default Vars
		$arrParams = array();
		// define ID Page
 		$idPage = (isset($_GET['page'])) ? $_GET['page']: 'home'; 
		// switch Destination Page
		switch ($idPage) {
			case 'login':
				$template  = $this->twig->load('login.html.twig');
				break;
			case 'register':
				$blCountries = new CountriesBL();
				$arrParams   = array(
					"countries"  => $blCountries->loadCountriesList(),
					"errMessage" => (isset($_SESSION['errMessage'])) ? $_SESSION['errMessage'] : ""
				); 
				$template  = $this->twig->load('register.html.twig');
				break;
			case 'logout':
				$blUser = new UserBL();
				$blUser->userLogout();
				$template = $this->twig->load('index.html.twig');
			default:
				$template = $this->twig->load('index.html.twig');
				break;
		}
		// render Tempate
		echo $template->render($arrParams);
	}
}