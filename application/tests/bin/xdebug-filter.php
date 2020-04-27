<?php declare(strict_types=1);
if (!\function_exists('xdebug_set_filter')) {
    return;
}

\xdebug_set_filter(
    \XDEBUG_FILTER_CODE_COVERAGE,
    \XDEBUG_PATH_WHITELIST,
    [
        'C:\xampp\htdocs\CI3-ultimate\application\controllers\\',
        'C:\xampp\htdocs\CI3-ultimate\application\models\\',
        'C:\xampp\htdocs\CI3-ultimate\application\views\\',
        'C:\xampp\htdocs\CI3-ultimate\application\libraries\\',
        'C:\xampp\htdocs\CI3-ultimate\application\helpers\\',
        'C:\xampp\htdocs\CI3-ultimate\application\hooks\\'
    ]
);
