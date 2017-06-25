<?php

namespace Ney\Lagger\Definitions\Responses;

use Kobe\Kobe;

/**
 * Class FailureResponse
 *
 * @package App\Swagger\Definitions\Responses
 */
class FailureResponse extends ApiResponse
{
    /**
     * FailureResponse constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setProperties([
            'code'    => Kobe::makeInteger()->setExample(400),
            'message' => Kobe::makeString()->setExample('an error message'),
            'type'    => Kobe::makeString()->setExample('error'),
        ]);
    }
}
