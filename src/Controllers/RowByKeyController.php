<?php

namespace App\Controllers;

use App\Models\PAOModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RowByKeyController
{
    private PAOModel $model;
    public function __construct(PAOModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args)
    {
        $row = $this->model->rowByKey($args['key']);
        $responseBody = [
            'message' => 'Row successfully found',
            'status' => 200,
            'data' => $row
        ];

        return $response->withHeader('Access-Control-Allow-Origin', '*')->withJson($responseBody);
    }
}