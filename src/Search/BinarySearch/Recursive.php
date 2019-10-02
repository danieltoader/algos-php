<?php

namespace Algos\Search\BinarySearch;


use Algos\Contracts\SearchInterface;

/**
 * Class Recursive
 *
 * @package Algos\Search\BinarySearch
 * @author Daniel Toader <developer@danieltoader.com>
 */
final class Recursive implements SearchInterface
{
    /**
     * Performs a recursive binary search
     *
     * @inheritDoc
     */
    public function execute(array $haystack, int $needle): int
    {
        return $this->algorithm($haystack, $needle, 0, count($haystack) - 1);
    }

    private function algorithm(array $haystack, int $needle, int $start, int $end): int
    {
        if ($end < $start) {
            return SearchInterface::NEEDLE_NOT_FOUND;
        }

        $middle = ceil($start + ($end - $start) / 2);

        if ($needle === $haystack[$middle]) {
            return $middle;
        }

        if ($needle < $haystack[$middle]) {
            return $this->algorithm($haystack, $needle, $start, $middle - 1);
        }

        return $this->algorithm($haystack, $needle, $middle + 1, $end);
    }
}