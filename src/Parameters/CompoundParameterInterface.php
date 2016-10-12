<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters;

/**
 * Interface CompoundParameterInterface
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters
 */
interface CompoundParameterInterface
{
    /**
     * Gets the payload parameters and their values.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Gets the parameters and their value in a human readable form.
     *
     * @return array
     */
    public function getReadableParameters();
}
