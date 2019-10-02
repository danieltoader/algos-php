<?php

namespace Algos\Sort\BubbleSort;

use Algos\Contracts\SortInterface;

/**
 * Class Basic
 *
 * @package Algos\Sort\BubbleSort
 * @author Daniel Toader <developer@danieltoader.com>
 */
final class Basic implements SortInterface
{
    /**
     * Performs a basic bubble sort
     *
     * @inheritDoc
     */
    public function execute(array $toSort): array
    {
        $end = count($toSort);
        for ($i = 0; $i < $end; $i++) {
            for ($j = 0; $j < $end - 1; $j++) {
                if ($toSort[$j] > $toSort[$j + 1]) {
                    $tmp = $toSort[$j + 1];
                    $toSort[$j + 1] = $toSort[$j];
                    $toSort[$j] = $tmp;
                }
            }
        }

        return $toSort;
    }
}
