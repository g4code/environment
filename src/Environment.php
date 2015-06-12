<?php

namespace G4\Environment;

class Environment
{

    /**
     * @var string
     */
    private $env;

    /**
     * @param string $env
     */
    public function __construct($env)
    {
        $this->env = $env;
    }

    /**
     * @return string
     */
    public function getEnv()
    {
        return $this->env;
    }
}