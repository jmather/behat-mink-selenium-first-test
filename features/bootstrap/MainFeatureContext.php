<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Step;

class MainFeatureContext extends BaseFeature
{
    public function __construct(array $parameters)
    {
        parent::__construct($parameters);
        $this->useContext('mink', new MinkContext($parameters));
    }
}