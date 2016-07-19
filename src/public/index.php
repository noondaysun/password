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
		print('sex');
		if (file_exists(__DIR__ . 'config') === false) {
			header('Location: setup.php');
			exit;
		}
		//: End
		print(file_get_contents(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'header.html'));
		
		print(file_get_contents(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'footer.html'));
	}
	//: End
	//: End
}
//: End
$password = new \Password\password();