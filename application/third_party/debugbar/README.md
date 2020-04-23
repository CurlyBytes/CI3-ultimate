# Debugbar
Debugbar for Codeigniter 3

## Requirements

- PHP 5.3.x (Composer requirement)
- CodeIgniter 3.0.x

## Installation
### Step 1 Installation by Composer
#### Run composer
```shell
composer require maltyxx/debugbar
```

### Step 2 Configuration
Edit file `./application/config/config.php` set `$config['composer_autoload'] = FALSE;` to `$config['composer_autoload'] = FCPATH.'vendor/autoload.php';`

Duplicate configuration file `./application/third_party/debugbar/config/profiler.php` in `./application/config/profiler.php`.

### Step 3 Create files
Create controller file in `/application/controllers/Debug.php`.
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/third_party/debugbar/controllers/Debug.php');
```

### Step 4 Examples
Controller file is located in `./application/core/MY_Controller.php`.
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->add_package_path(APPPATH.'third_party/debugbar');
        $this->load->library('console');
        $this->output->enable_profiler(TRUE);

        $this->console->debug('Hello world !');
    }
}
```