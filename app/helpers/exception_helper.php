<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Defines common exception functions that are globally available
 * http://www.naijaz.com/extending-the-core-exception-class-in-codeigniter-3x/
 * https://stackoverflow.com/questions/27449155/custom-exceptions-in-codeigniter
 * role_field 
 * https://www.guru99.com/error-handling-and-exceptions.html
 */
 
if ( ! function_exists('show_custom_error'))
{
    function show_custom_error($message)
    {
        $_error =& load_class('Exceptions', 'core');
        echo $_error->show_custom_error($message);
        exit;
    }
}