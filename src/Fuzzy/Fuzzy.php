<?php namespace Fuzzy;

class Fuzzy {

    /**
     * Performs fuzzy string searching
     *
     * @param array $rows
     * @param string $query
     * @param int $threshold
     * @return array
     */
    public function search(array $rows, $query, $threshold = 3)
    {
        $matched = [];

        foreach($rows as $row)
        {
            $distance = $this->calculateDistance($query, $row);

            if ($threshold >= $distance)
            {
                $matched[] = [$distance, $row];
            }
        }

        \usort($matched, function(array $left, array $right)
        {
            return ($left[0] - $right[0]);
        });

        return \array_map(function(array $element)
        {

            return $element[1];

        }, $matched);
    }

    /**
     * Calculate Levenshtein distance between two strings
     *
     * @param string $first
     * @param string $second
     * @return int
     */
    protected function calculateDistance($first, $second)
    {
        return \levenshtein($first, $second);
    }

}

