<?php
class WhoopsHook
{
    public function bootWhoops()
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
        if (\Whoops\Util\Misc::isAjaxRequest()) {
            $jsonHandler = new Whoops\Handler\JsonResponseHandler();
        
            // You can also tell JsonResponseHandler to give you a full stack trace:
            $jsonHandler->addTraceToOutput(true);
        
            // You can also return a result compliant to the json:api spec
            // re: http://jsonapi.org/examples/#error-objects
            // tl;dr: error[] becomes errors[[]]
             $jsonHandler->setJsonApi(true);
        
            // And push it into the stack:
            $whoops->pushHandler($jsonHandler);
        }
        $whoops->register();


      

    }
}
