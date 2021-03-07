<?php

class InsertSortPc
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }

        $n = count($nums);
        for ($i = 1; $i < $n; $i++) {
            for ($j = $i; $j > 0; $j--) {
                if ($nums[$j] < $nums[$j-1]) {
                    $t = $nums[$j];
                    $nums[$j] = $nums[$j-1];
                    $nums[$j-1] = $t;
                } else {
                    break;
                }
            }
        }
        return $nums;
    }
}

print_r(InsertSortPc::run([1,2,3,4,5]));
print_r(InsertSortPc::run([1,2]));
print_r(InsertSortPc::run([1]));
print_r(InsertSortPc::run([]));
print_r(InsertSortPc::run([2,4,1,3,5]));
