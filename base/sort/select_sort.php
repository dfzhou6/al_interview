<?php
/**
 * Class SelectSort
 * 选择排序
 */

class SelectSort
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }
        $len = count($nums);
        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = $i + 1; $j < $len; $j++) {
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

print_r(SelectSort::run([1,2,3,4,5]));
print_r(SelectSort::run([1,2]));
print_r(SelectSort::run([1]));
print_r(SelectSort::run([]));
print_r(SelectSort::run([2,4,1,3,5]));
