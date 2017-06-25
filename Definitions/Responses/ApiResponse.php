<?php

namespace Ney\Lagger\Definitions\Responses;

use Ney\Lagger\Definitions\BaseDefinition;
use Kobe\Kobe;

/**
 * Class ApiResponse
 *
 * @package App\Swagger\Definitions\Responses
 */
class ApiResponse extends BaseDefinition
{
    /**
     * DemoResponse constructor.
     */
    public function __construct()
    {
        $this->setProperties([
            'code'    => Kobe::makeInteger(),
            'message' => Kobe::makeString(),
            'type'    => Kobe::makeString(),
        ]);
    }
}
