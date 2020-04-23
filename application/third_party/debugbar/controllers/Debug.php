<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use DebugBar\DebugBar;
use DebugBar\OpenHandler;
use DebugBar\Storage\FileStorage;

class Debug extends MY_Controller
{

    public function open_handler()
    {
        $this->config->load('profiler', true);
        $path = $this->config->item('cache_path', 'profiler');

        $debugbar = new DebugBar();
        $debugbar->setStorage(new FileStorage($path));

        $openHandler = new OpenHandler($debugbar);
        $data = $openHandler->handle(NULL, FALSE, FALSE);

        $this->output->enable_profiler(FALSE);
        $this->output->set_content_type('json');
        $this->output->set_output($data);
    }

}
