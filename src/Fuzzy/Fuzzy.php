<?php namespace Fuzzy;

class Fuzzy {

    /**
     * Perform a fuzzy string searching.
     *
     * @param array $rows
     * @param string $query
     * @param integer $threshold
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

        return $this->transformResult($this->sortMatchedStrings($matched));
    }

    /**
     * Calculate the Levenshtein distance between two strings.
     *
     * @param string $one
     * @param string $two
     * @return int
     */
    protected function calculateDistance($one, $two)
    {
        return levenshtein($one, $two);
    }

    /**
     * Sort the matched strings.
     *
     * @param array $matched
     * @return array
     */
    protected function sortMatchedStrings(array $matched)
    {
        usort($matched, function(array $left, array $right)
        {
            return ($left[0] - $right[0]);
        });

        return $matched;
    }

    /**
     * Transform a given array of matches.
     *
     * @param array $matched
     * @return array
     */
    protected function transformResult(array $matched)
    {
        $iterator = function(array $element)
        {
            return $element[1];
        };

        return array_map($iterator, $matched);
    }

}
