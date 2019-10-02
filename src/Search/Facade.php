<?php

namespace Algos\Search;

use Algos\Contracts\AlgorithmException;
use Algos\Contracts\SearchInterface;

/**
 * Class Facade
 *
 * @package Algos\Search
 * @author Daniel Toader <developer@danieltoader.com>
 */
class Facade
{
    /**
     * @param SearchInterface $searchAlgorithm
     * @param int[] $haystack
     * @param int $needle
     *
     * @return int
     * @throws AlgorithmException
     */
    public static function run(SearchInterface $searchAlgorithm, array $haystack, int $needle): int
    {
        $result = $searchAlgorithm->execute($haystack, $needle);
        if ($result === SearchInterface::NEEDLE_NOT_FOUND) {
            throw new AlgorithmException(sprintf(AlgorithmException::SEARCH_NOT_FOUND_MESSAGE, $needle, implode(',', $haystack)));
        }

        return $result;
    }
}
