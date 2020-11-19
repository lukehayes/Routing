<?php
namespace Routing;

use Routing\Interfaces\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

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
        $this->routes->add('home', new Route("/") , []);
        $this->routes->add('hello', new Route("/hello") , []);

        $context = new RequestContext();
        $context->fromRequest($this->request);
        $matcher = new UrlMatcher($this->routes, $context);

        $attributes = $matcher->match($this->request->getPathInfo());

        $response = new Response($attributes["_route"]);
        $response->send();
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

