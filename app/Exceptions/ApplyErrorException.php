<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

/**
 * アプリケーションエラー全般を扱う拡張例外クラス
 */
class ApplyErrorException extends Exception
{
    public $message;

    public function __construct(\Throwable $th)
    {
        $this->message = $th->getMessage();
        Log::error($this->message);
        Log::error($th);
        throw $th;
    }
}
