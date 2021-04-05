
<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sum = 0;
        $new_array = array();
        for($i = 0; $i < count($nums); $i++) {
            $sum += $nums[$i];
            $new_array[] = $sum;
        }
        return $new_array;
    }
}