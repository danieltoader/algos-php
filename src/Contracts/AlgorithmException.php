<?php

namespace Algos\Contracts;

use \Exception;

/**
 * Class AlgorithmException
 *
 * @package Algos\Contracts
 * @author Daniel Toader <developer@danieltoader.com>
 */
class AlgorithmException extends Exception
{
    const SEARCH_NOT_FOUND_MESSAGE = "%d not found in [%s]";
}
