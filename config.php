<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Doc route relate path
  |--------------------------------------------------------------------------
  |
  */
  'path' => env("LAGGER_DOC_PATH", 'docs'),

  /*
  |--------------------------------------------------------------------------
  | Json route relate path
  |--------------------------------------------------------------------------
  |
  */
  'json' => env("LAGGER_JSON_PATH", 'json'),

  /*
  |--------------------------------------------------------------------------
  | Dirs which shouldn be scanned by lagger
  |--------------------------------------------------------------------------
  |
  */
   'dirs' => [
     base_path('vendor/ney/lagger/'),
   ],

   /*
   |--------------------------------------------------------------------------
   | Definitions Map
   |--------------------------------------------------------------------------
   |
   */
   'definitions' => [
     [base_path('vendor/ney/lagger/Definitions'),'Ney\\Lagger\\Definitions\\'],

   ]
];
