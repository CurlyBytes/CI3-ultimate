<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['pre_system'][] = array(
  'class'    => 'WhoopsHook',
  'function' => 'bootWhoops',
  'filename' => 'WhoopsHook.php',
  'filepath' => 'hooks',
  'params'   => array()
);


$hook['pre_system'][] = array(
    'class'    => 'DotEnvHook',
    'function' => 'LoadEnvironment',
    'filename' => 'DotEnvHook.php',
    'filepath' => 'hooks',
    'params'   => array()
  );


  // $hook['display_override'][] = array(
  //   'class'  	=> 'Develbar',
  //     'function' 	=> 'debug',
  //     'filename' 	=> 'Develbar.php',
  //     'filepath' 	=> 'third_party/DevelBar/hooks'
  // );


  /***************************************************************************
 *
 * Force SSL the php file and being setup in the application
 *
 * @subpackage			http_ssl
 * @category		hooks 
 * @author			Francisco Abayon <franz.noyaba@gamail.com>
 * @copyright		Oct 20, 2018
 * @since			0.0.1	
 * @link			../../hooks/ssl_hook.php
 * @url 			https://matthewdaly.co.uk/blog/2018/06/23/forcing-ssl-in-codeigniter/
 *
 * @todo			create setup values to define wheter the port numbers are default or not
 * @todo			Autodetect that if its ssl was expired, send an email
 *
 ***************************************************************************/
$hook['post_controller_constructor'][] = array(
  'class' 		=> 'force_ssl',
  'function' 	=> 'force_ssl',
  'filename' 	=> 'ssl_hook.php',
  'filepath' 	=> 'hooks'
);