<?php

namespace Ney\Lagger\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function docs()
    {
        return view('lagger::index');
    }

    public function json()
    {
        // zircote/swagger-php
        $swagger = \Swagger\scan(
          config("lagger.dirs")
        );
// dd(onfig("lagger.dirs"));
        // Scan the whole directory for any PHP file and parse the class instances to Swagger definitions
        $definitions = collect(config('lagger.definitions'))->map(function($item, $key){
          return \Kobe\Kobe::scanPSR4($item[0], $item[1]);
        })->reduce(function($defs, $item){
          return array_merge($defs, $item);
        }, []);

        // Merge them together!
        $swaggerDefinition = array_merge(
            ((array) $swagger->jsonSerialize()),
            ['definitions' => $definitions]
        );

        return response()->json($swaggerDefinition, 200);

    }
}
