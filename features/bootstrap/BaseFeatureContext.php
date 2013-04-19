<?php

use Behat\Behat\Context\Step;
use Behat\MinkExtension\Context\RawMinkContext;

class BaseFeature extends RawMinkContext
{
    protected $config;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->config = $parameters;
    }

    /**
     * @param Callable $lambda Returns true when condition is complete. Exceptions captured.
     * @param int $wait time to wait for timeout in seconds
     * @return bool
     * @throws Exception on timeout
     */
    public function spin($lambda, $wait = 60)
    {
        for ($i = 0; $i < $wait; $i++)
        {
            try {
                if ($lambda($this)) {
                    return true;
                }
            } catch (Exception $e) {
                // do nothing
            }

            sleep(1);
        }

        $backtrace = debug_backtrace();

        throw new \Exception(
            "Timeout thrown by " . $backtrace[1]['class'] . "::" . $backtrace[1]['function'] . "()\n" .
                $backtrace[1]['file'] . ", line " . $backtrace[1]['line']
        );
    }
}