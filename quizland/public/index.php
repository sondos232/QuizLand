<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 */

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Check If The Application Is Installed
|--------------------------------------------------------------------------
|
| The first thing we will do is check if the application is installed. If it is,
| we will create an instance of the application kernel and handle the request.
| If not, we will just provide an error response.
|
*/

if (!file_exists(__DIR__ . '/../storage/framework/installed')) {
    http_response_code(503);
    exit('The application is not installed.');
}

/*
|--------------------------------------------------------------------------
| Setup Autoloading
|--------------------------------------------------------------------------
|
| We will load the Composer autoloader to handle the loading of all necessary
| dependencies for this Laravel application. Afterward, we'll load the
| application and run the requests through the Kernel.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the autoloader in place, we can boot the Laravel framework and
| send the request to the application's kernel. The kernel will return a
| response which will be sent back to the user's browser.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
