<?php
namespace Rancher;

abstract class AbstractFilter
{
    protected $container = [];

    protected $allowedOptions = ["eq", "ne", "in", "notin"];

    public function toArray()
    {
        return $this->container;
    }
}