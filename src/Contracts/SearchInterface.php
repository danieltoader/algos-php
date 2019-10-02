<?php

namespace Algos\Contracts;

/**
 * Interface SearchInterface
 *
 * @package Algos\Contracts
 * @author Daniel Toader <developer@danieltoader.com>
 */
interface SearchInterface
{
    public const NEEDLE_NOT_FOUND = -1;

    /**
     * Performs a search algorithm
     * Returns the index of the number in the array.
     * If number doesn't exists in the array it will return -1 (const)
     *
     * @param int[] $haystack
     * @param int $needle
     * @return int
     */
    public function execute(array $haystack, int $needle): int;
}
