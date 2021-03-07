<?php
/**
 * Class InsertSort
 * 插入排序
 */

class InsertSort
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }
        $len = count($nums);
        for ($i = 1; $i < $len; $i++) {
            for ($j = $i; $j > 0; $j--) {
                if ($nums[$j-1] > $nums[$j]) {
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

print_r(InsertSort::run([1,2,3,4,5]));
print_r(InsertSort::run([1,2]));
print_r(InsertSort::run([1]));
print_r(InsertSort::run([]));
print_r(InsertSort::run([2,4,1,3,5]));
