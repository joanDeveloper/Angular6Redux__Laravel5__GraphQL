<?php
return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |
     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     
     'allowedOrigins' => env(["http://localhost:4200,http://localhost:4200/","http://127.0.0.1:4200","http://127.0.0.1:4200/"]) ? explode(',', env('["http://localhost:4200,http://localhost:4200/","http://127.0.0.1:4200","http://127.0.0.1:4200/"]')) : ['*'],
     'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Authorization'],
      'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Authorization'], 
    //  */
    // 'supportsCredentials' => true,
    // 'allowedOrigins' => ['*'],
    // 'allowedHeaders' => ['*'],
    // /* 'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Content-Range', 'Content-Disposition', 
    
    // //production
    // //'Content-Description', 'application/x-www-form-urlencoded;charset=utf8', 'application/json', 'Token ' + token],
    
    // //testing
    // 'Content-Description', 'application/x-www-form-urlencoded;charset=utf8', 'application/json', 'Token '], */
    // 'allowedMethods' => ['PUT, POST, GET, OPTIONS, DELETE'],
    // 'exposedHeaders' => [],
    // /* ->header('Access-Control-Allow-Methods', 'PUT, POST, GET, OPTIONS, DELETE'); */
    // 'maxAge' => 864000,
         /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |
     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With'],
    'allowedMethods' => ['*'], // ex: ['GET', 'POST', 'PUT',  'DELETE']
    'exposedHeaders' => [],
    'maxAge' => 0,

];