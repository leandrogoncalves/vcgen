<?php

namespace leandrogoncalves\exceptions;

class NullException extends \Exception
{
    public  function __construct($message, $code, Exception $previous)
    {
        parent::__construct($message, $code, $previous);
        return  $message . parent::getMessage();
    }
}