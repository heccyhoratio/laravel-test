<?php

namespace App\Http\Controllers;

use App\NumberProcessor;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Collects the number from the request and returns it after processing
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function processNumber(Request $request)
    {
        $processor = new NumberProcessor($request->number);
        $processor->createArrayWithoutInputNum();

        return response($processor->getNumberOutOfArray());
    }
}
