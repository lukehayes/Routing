<?php
namespace Routing;

use Routing\Interfaces\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

class Router implements RouterInterface
{
    /**
     * The request object created from Request::createFromGlobals().
     *
     * @var Object | NULL
     */
    private $request = NULL;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
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

