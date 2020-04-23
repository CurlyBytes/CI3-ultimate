<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/third_party/debugbar/controllers/Debug.php');

class Debug extends CT_Controller 
{
    public function open_handler()
    {
        $this->output->enable_profiler(TRUE);
        $this->config->load('profiler', true);
        $path = $this->config->item('cache_path', 'profiler');
        $cache_path = ($path === '') ? APPPATH.'cache/debugbar/' : $path;
        $debugbar = new DebugBar();
        $debugbar->setStorage(new FileStorage($cache_path));
        $openHandler = new OpenHandler($debugbar);
        $data = $openHandler->handle(null, false, false);

        $this->output
            ->set_content_type('application/json')
            ->set_output($data);
    }
}