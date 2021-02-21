<?php
namespace Model;

require_once 'config.php';
 
class User extends \Illuminate\Database\Eloquent\Model {
	// set table
	protected $table = 'users'; 
}
 