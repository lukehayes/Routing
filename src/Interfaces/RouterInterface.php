<?php
namespace Routing\Interfaces;

interface RouterInterface
{
    /**
     * Hande the incoming request.
     *
     * @return void
     */
    public function handle() : void;
}

