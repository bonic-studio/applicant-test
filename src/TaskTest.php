<?php

namespace BonicApplicantTest;

use Exception;

/**
 * Class TaskTest
 * @package BonicApplicantTest
 */
class TaskTest implements TaskTestInterface
{
    /** @var TaskInterface */
    protected $_task;

    /** @var Message[] */
    protected $_messages = [];

    /**
     * @param TaskInterface $task
     * @return $this
     */
    public function setTask(TaskInterface $task)
    {
        $this->_task = $task;
        return $this;
    }

    /**
     * @return TaskInterface
     */
    public function getTask()
    {
        return $this->_task;
    }

    /**
     * @param array $parameters
     * @param mixed $expectedResults
     * @return bool
     */
    public function test($parameters=[], $expectedResults=null)
    {
        $results = null;
        try {
            $this->_task->setParameters($parameters);
            $this->_task->execute();
            $results = $this->_task->getResults();
        }
        catch(Exception $e) {
            $this->_messages[] = new Message($e);
        }
        return $results === $expectedResults;
    }

    /**
     * @return Message[]
     */
    public function getMessages()
    {
        return $this->_messages;
    }

}