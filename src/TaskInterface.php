<?php

namespace BonicApplicantTest;

/**
 * Interface TaskInterface
 * @package BonicApplicantTest
 */
interface TaskInterface
{
    /**
     * @return void
     */
    public function execute();

    /**
     * @param array $parameters
     * @return $this
     */
    public function setParameters(array $parameters);

    /**
     * @return mixed
     */
    public function getResults();
}