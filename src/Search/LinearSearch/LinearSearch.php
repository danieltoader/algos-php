<?php

namespace Algos\Search\LinearSearch;

use Algos\Contracts\SearchInterface;

/**
 * Class LinearSearch
 *
 * @package Algos\Search\LinearSearch
 * @author Daniel Toader <developer@danieltoader.com>
 */
final class LinearSearch implements SearchInterface
{
    /**
     * Performs a linear search
     *
     * @inheritDoc
     */
    public function execute(array $haystack, int $needle): int
    {
        foreach ($haystack as $index => $item) {
            if ($item === $needle) {
                return $index;
            }
        }

        return SearchInterface::NEEDLE_NOT_FOUND;
    }
}
