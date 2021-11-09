<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Response;


trait ApiResponser
{

    public function successResponse($data, $code = 200)
    {
        return response()->json(['data' => $data], $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    public function sendResponse($result, $message = '', $code = 200)
    {
        return Response::json($this->makeResponse($code, $message, $result), $code);
    }

    public function sendError($error, $code = 500)
    {
        return Response::json($this->makeError($code, $error), $code);
    }


    /**
     * @param $code
     * @param $message
     * @param $data
     * @return array
     */
    public static function makeResponse($code, $message, $data)
    {
        return [
            'code' => $code,
            'data'    => $data,
            'message' => $message,
        ];
    }

    /**
     * @param $code
     * @param $message
     * @param array $data
     * @return array
     */
    public static function makeError($code, $message, array $data = [])
    {
        $res = [
            'code' => $code,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }

}