<?php

namespace BonicApplicantTest;

/**
 * Interface TaskTestInterface
 * @package BonicApplicantTest
 */
interface TaskTestInterface
{
    /**
     * @param TaskInterface $task
     * @return $this
     */
    public function setTask(TaskInterface $task);

    /**
     * @return TaskInterface
     */
    public function getTask();

    /**
     * @param mixed $expectedResults (optional)
     * @return bool
     */
    public function test($expectedResults=null);

    /**
     * @return Message[]
     */
    public function getMessages();
}