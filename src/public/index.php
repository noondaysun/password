<?php
namespace Password;
// : Defines
defined('BASE') || define('BASE', substr(dirname(realpath(__FILE__)), 0, strrpos(dirname(realpath(__FILE__)), 'password')));
// : End
//: Includes
require BASE . 'password' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//: End
class IndexController
{
	//: Variables
	
	//: End
	//: Public functions
	public function __construct()
	{
		//: Header
		print(file_get_contents(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'header.html'));
		//: Content
		if (file_exists(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'config') === false) {
			$this->setMeUp();
		} else {
			$this->showPasswords();
		}
	}
	
	public function __destruct()
	{
		//: Footer
		print(file_get_contents(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'footer.html'));
	}
	//: End
	//: Private functions
	private function setMeUp()
	{
		if (!empty($_POST)) {
			$file = (string) dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'config';
			$fp = fopen($file, 'w');
			fwrite($fp, $_POST['remember_for']);
			fclose($fp);
			header('Location: /');
		} else {
			print(file_get_contents(dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'setup.html'));
		}
	}
	
	private function showPasswords()
	{
		print('<div class="eleven columns">');
		print('<img id="aj_load" alt="Ajax Loader" src="ajax-loader.gif" />');
		print('</div>');
	}
	//: End
}
$IndexController = new IndexController();