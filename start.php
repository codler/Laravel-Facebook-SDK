<?php
/**
 * @author Han Lin Yap < http://zencodez.net/ >
 * @copyright 2012 zencodez.net
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Facebook SDK (Laravel Bundle)
 * @version 1.0 - 2012-02-25
 */

Autoloader::map(array(
	'Facebook' => Bundle::path('facebook-sdk').'facebook/facebook.php',
));

Laravel\IoC::singleton('facebook-sdk', function()
{
    $config = array();
	$config['appId'] = Config::get('facebook.app_id');
	$config['secret'] = Config::get('facebook.secret');
	$config['fileUpload'] = true; // optional

	return new Facebook($config);
});