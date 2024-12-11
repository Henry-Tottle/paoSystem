<?php
declare(strict_types=1);

use App\Controllers\CoursesAPIController;
use Slim\App;


return function (App $app) {
    //could get rid of this line? not sure what it's doing
    $container = $app->getContainer();

    $app->get('/rows', \App\Controllers\AllRowsController::class);
    $app->get('/rows/{key}', \App\Controllers\RowByKeyController::class);
};
