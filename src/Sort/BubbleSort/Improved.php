<?php

namespace Algos\Sort\BubbleSort;

use Algos\Contracts\SortInterface;

/**
 * Class Improved
 *
 * @package Algos\Sort\BubbleSort
 * @author Daniel Toader <developer@danieltoader.com>
 */
final class Improved implements SortInterface
{
    /**
     * Performs an improved version of bubble sort
     *
     * @inheritDoc
     */
    public function execute(array $toSort): array
    {
        $swapped = true;
        $end = count($toSort);

        while ($swapped) {
            $swapped = false;
            for ($i = 0; $i < $end - 1; $i++) {
                if ($toSort[$i] > $toSort[$i + 1]) {
                    $tmp = $toSort[$i + 1];
                    $toSort[$i + 1] = $toSort[$i];
                    $toSort[$i] = $tmp;
                    $swapped = true;
                }
            }
            $end--;
        }

        return $toSort;
    }
}
