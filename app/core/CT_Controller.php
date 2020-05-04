<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CT_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $languages = $this->config->item('language_available');

        if (in_array($this->uri->segment(1), $languages)) {
            $languageFolder = array_search($this->uri->segment(1), $languages);

            $this->load->language('page_home', $languageFolder);
        }

        $this->output->enable_profiler(true);
    
        // foreach($languages as $x => $x_value) {
    //      echo "Key=" . $x . ", Value=" . $x_value;
    //     echo "<br>";
    //  }


    }
}
