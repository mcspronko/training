<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;

/**
 * Class User
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        var_dump('User object has been initialized.');
    }

    public function getName()
    {
        return $this->name;
    }
}

