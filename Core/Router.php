<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function get($uri, $controller)
    {
        // var_dump("$uri");
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET',
        ];
    }

    public function post($uri, $controller)
    {
        // dd("delete here".$controller);
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST',
        ];
    }

    public function delete($uri, $controller)
    {
        // dd($controller);
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE',
        ];
    }

    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH',
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT',
        ];
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            // dd($route);
            // echo basePath($route['controller']);
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                
                // dd($method);
                // dd(basePath($route['controller']));
                return require basePath($route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($status = 404)
    {
        http_response_code(404);
        $txt = basePath("Views/Partials/errorPage/" . $status . ".php");
        require $txt;
        die();
    }
}