<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MY_Exceptions extends CI_Exceptions {
   
  function __construct()
  {
      parent::__construct();    
  }
  
  public function show_custom_error($message)
  {
      //add your logic
      //assign your $header, $template, and $status values  
      //if needed you can also call the show_error method of the parent class.
      return $this->show_error($header, $message, $template, $status);  
  }
 }