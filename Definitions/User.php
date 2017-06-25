<?php

namespace Ney\Lagger\Definitions;

use Kobe\Kobe;

/**
 * Class User
 *
 * @package App\Swagger\Definitions
 */
class User extends BaseDefinition
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->setProperties([
            'id'   => Kobe::makeInteger(),
            'name' => Kobe::makeString(),
        ]);
    }
}
