<?php

namespace App\Controllers;
use App\Models\PAOModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AllRowsController
{
    private PAOModel $model;
    public function __construct(PAOModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response)
    {
        $rows = $this->model->allRows();
        $responseBody = [
            'message' => 'Books successfully retrieved from database.',
            'status' => 200,
            'data' => $rows
        ];

        return $response->withHeader('Access-Control-Allow-Origin', '*')->withJson($responseBody);
    }
}