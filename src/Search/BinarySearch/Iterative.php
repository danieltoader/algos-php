<?php

namespace Algos\Search\BinarySearch;

use Algos\Contracts\SearchInterface;

/**
 * Class Iterative
 *
 * @package Algos\Search\BinarySearch
 * @author Daniel Toader <developer@danieltoader.com>
 */
final class Iterative implements SearchInterface
{
    /**
     * Performs an iterative binary search
     *
     * @inheritDoc
     */
    public function execute(array $haystack, int $needle): int
    {
        return $this->algorithm($haystack, $needle, 0, count($haystack) - 1);
    }

    private function algorithm(array $haystack, int $needle, int $start, int $end): int
    {
        while ($start <= $end) {
            $middle = ceil($start + ($end - $start) / 2);

            if ($needle === $haystack[$middle]) {
                return $middle;
            }

            if ($needle > $haystack[$middle]) {
                $end = $middle - 1;
            }

            if ($needle < $haystack[$middle]) {
                $start = $middle + 1;
            }
        }

        return SearchInterface::NEEDLE_NOT_FOUND;
    }
}