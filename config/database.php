<?php
$url = parse_url(getenv("DATABASE_URL"));

$host = $url["DB_HOST"];
$username = $url["DB_USERNAME"];
$password = $url["DB_PASSWORD"];
$database = substr($url["DB_DATABASE"], 1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'fetch' => PDO::FETCH_CLASS,

    'default' => env('DATABASE_URL', 'pgsql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST','ec2-79-125-117-53.eu-west-1.compute.amazonaws.com'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE','df37eqr9a7ckit'),
            'username' => env('DB_USERNAME', 'tixvhtndhkvsae'),
            'password' => env('DB_PASSWORD', '9890c80a20528a1af5f4045b1435e26bd02a9fcf3060ae8616fc06033ed8ee67'),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'require',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
