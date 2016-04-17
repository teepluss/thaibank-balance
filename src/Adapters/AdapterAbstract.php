<?php

namespace Teepluss\Balance\Adapters;

abstract class AdapterAbstract
{
    public function find($amount, $period = [])
    {
        return "Transaction Number";
    }
}
