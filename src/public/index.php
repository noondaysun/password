<?php
namespace Password;
//: Includes
require __DIR__ . '/vendor/autoload.php';
//: End
//: Object
class password
{
	//: Variables
	
	//: End
	//: Public functions
	//: Magic functions
	public function __construct()
	{
		//: Does the config exist?
		if (file_exists(__DIR__ . 'config') === false) {
			header('Location: setup.php');
			exit;
		}
		//: End
	}
	//: End
	//: End
}
//: End
$password = new \Password\password();