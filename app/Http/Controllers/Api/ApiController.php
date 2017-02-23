<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{

    /*
    * code = 200, Ok
    */
    protected $statusCode=200;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($code) 
    {
        $this->statusCode = $code;
        return $this;
    }

    /*
    * code = 404, Not Found
    */
    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /*
    * code = 500, Internal Error
    */
    public function respondInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    /*
    * code = 401, Login Failed username or password doesnt match
    */
    public function respondUnathourize($message = 'Login Failed username or password doesnt match')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    public function respond($data, $headers=[])
    {
        return response()->json($data,$this->getStatusCode(), $headers);
    }

    private function respondWithError($message) 
    {
        $data = [
            'message'=>$message,
            'code' => $this->getStatusCode()
        ];
        return $this->respond($data);
    }
}
