<?php

namespace Algos\Contracts;

/**
 * Interface SearchInterface
 *
 * @package Algos\Contracts
 * @author Daniel Toader <developer@danieltoader.com>
 */
interface SortInterface
{
    /**
     * Performs a sorting algorithm
     * Returns a sorted array.
     *
     * @param int[] $toSort
     * @return int[]
     */
    public function execute(array $toSort): array;
}
