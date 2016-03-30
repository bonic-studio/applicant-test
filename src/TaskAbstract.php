<?php

namespace BonicApplicantTest;

/**
 * Class TaskAbstract
 * @package BonicApplicantTest
 */
abstract class TaskAbstract implements TaskInterface
{
    /** @var array */
    protected $_parameters = [];

    /** @var mixed */
    protected $_results = null;

    /**
     * @inheritdoc
     */
    public function setParameters(array $parameters)
    {
        $this->_parameters = $parameters;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getResults()
    {
        return $this->_results;
    }
}