<?php
namespace Model;

require_once 'config.php'; 

class CustomerDataLog extends \Illuminate\Database\Eloquent\Model {
	// set table
	protected $table = 'customer_data_log'; 
}