<?php

namespace Ney\Lagger\Definitions;

use Kobe\Schemas\Definition;

/**
 * Class BaseDefinition
 *
 * @package App\Swagger
 */
 class BaseDefinition extends Definition
{
    /**
     * @return string
     */
    public function getBaseNamespace()
    {
        return 'Ney\\Lagger\\Definitions\\';
    }
}
