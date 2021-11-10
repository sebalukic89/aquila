<?php

/**
 * Bootstraps the Theme
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    public function __contruct()
    {
        //  Load classes
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        // actions and filters
    }
}
