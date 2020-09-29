<?php

declare(strict_types=1);

namespace Gooyer\Module;

abstract class ModuleProvider
{
    public function __construct()
    {

    }

    public abstract function register();

    public final function boot()
    {

    }

}