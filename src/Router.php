<?php
namespace Routing;

use Routing\Interfaces\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class Router implements RouterInterface
{
    /**
     * The request object created from Request::createFromGlobals().
     *
     * @var Object | NULL
     */
    private $request = NULL;

    /**
     * An instance of Symfony\Compontent\Routing\RouteCollection.
     *
     * @var RouteCollection | NULL
     */
    private $routes = NULL;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->routes = new RouteCollection();
    }

    public function handle() : void
    {
        // TODO
    }

    public function get($path)
    {
        // TODO
    }

    public function post($path)
    {
        // TODO
    }
}

