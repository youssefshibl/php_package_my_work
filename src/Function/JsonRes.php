<?php

namespace Shebl;

use Exception;
use Shebl\Helper\JsonHelper;

class JsonRes
{
    // convert array to josn
    static function ToJson($array)
    {
        try {
            return JsonHelper::convert_to_json($array);
        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }
    /* 
    convet json to array or boject
    @json -> json string
    @associative if you want output associative array
    */
    static function FromJson($json, $associative = false)
    {
        try {
            return JsonHelper::convert_from_json($json, $associative);
        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }
    /*  send error to user 
    @number -> number of error
    @message -> message of this error
    */
    static function SendError($number, $message)
    {
        $data = [
            'status' => false,
            'number' => $number,
            'message' => $message
        ];
        try {
            return JsonHelper::convert_to_json($data);
        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }
    /*
    send data to user 

    */
    static function SendData($key, $data)
    {

        $data = [
            'status' => true,
            $key => $data
        ];
        try {
            return JsonHelper::convert_to_json($data);
        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }
    public function SendSuccess()
    {
        $data = [
            'status' => true
        ];
        try {
            return JsonHelper::convert_to_json($data);
        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }
}
