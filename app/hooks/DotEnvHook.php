<?php
class DotEnvHook
{
    public function LoadEnvironment()
    {
        //$dotenv = new Dotenv\Dotenv();
        $dotenv = Dotenv\Dotenv::createImmutable(ROOT);
        $dotenv->load();
        $dotenv->required(['S3_BUCKET', 'SECRET_KEY', 'BASE_LINK']);
    }
}
