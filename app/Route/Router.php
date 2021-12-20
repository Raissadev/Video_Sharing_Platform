<?php

namespace app\Route;

use app\Controllers\Controller;

class Router
{

    protected string $httpMethod;
    public string $index;

    public function get($path, $class, $params)
    {
        $this->httpMethod = 'GET';

        if(strpos($_SERVER['REQUEST_URI'], $path) !== false){
            ((new $class)->$params());
        }
        
    }

    public function post($path, $class, $params): void
    {
        $this->httpMethod = 'POST';

        if(strpos($_SERVER['REQUEST_URI'], $path) !== false){
            ((new $class)->$params());
        } 

    }

    public function put($path, $class, $params): void
    {
        $this->httpMethod = 'PUT';

        if(strpos($_SERVER['PATH_INFO'], $path) !== false){
            ((new $class)->$params());
        } 

    }

    public function delete($path, $class, $params): void
    {
        $this->httpMethod = 'DELETE';

        if(strpos($_SERVER['PATH_INFO'], $path) !== false){
            ((new $class)->$params());
        } 

    }

}

?>