<?php

class SelectSortPc
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }

        $n = count($nums);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$i] > $nums[$j]) {
                    $t = $nums[$i];
                    $nums[$i] = $nums[$j];
                    $nums[$j] = $t;
                }
            }
        }
        return $nums;
    }
}

print_r(SelectSortPc::run([1,2,3,4,5]));
print_r(SelectSortPc::run([1,2]));
print_r(SelectSortPc::run([1]));
print_r(SelectSortPc::run([]));
print_r(SelectSortPc::run([2,4,1,3,5]));
