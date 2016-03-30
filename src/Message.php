<?php

namespace BonicApplicantTest;

use Exception;

/**
 * Class Message
 * @package BonicApplicantTest
 */
class Message
{
    /** @var string */
    private $_message;

    /**
     * Message constructor.
     * @param Exception|string $exceptionOrString
     */
    public function __construct($exceptionOrString)
    {
        $message = '';
        if($exceptionOrString instanceof Exception) {
            $message.= $exceptionOrString->getMessage() . ' [' . get_class($exceptionOrString) . ']:' . PHP_EOL;
            $message.= join(PHP_EOL, $exceptionOrString->getTrace()) . PHP_EOL;
        } else {
            $message = (string)$exceptionOrString;
        }
        $this->_message = $message;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->_message;
    }
}