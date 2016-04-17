<?php

namespace Teepluss\Balance;

class Factory
{
    public static function create($adapter, $config = [])
    {
        $className = "Teepluss\\Balance\\Adapters\\".ucfirst($adapter);
        return new $className($config);
    }
}
