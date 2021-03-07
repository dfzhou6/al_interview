<?php
/**
 * Class BubbleSort
 * 冒泡排序
 */

class BubbleSort
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }
        $len = count($nums);
        $is_sort = false;
        for ($i = $len - 1; $i > 0 && !$is_sort; $i--) {
            $is_sort = true;
            for ($j = 0; $j < $i; $j++) {
                if ($nums[$j] > $nums[$j+1]) {
                    $t = $nums[$j];
                    $nums[$j] = $nums[$j+1];
                    $nums[$j+1] = $t;
                    $is_sort = false;
                }
            }
        }
        return $nums;
    }
}

print_r(BubbleSort::run([1,2,3,4,5]));
print_r(BubbleSort::run([1,2]));
print_r(BubbleSort::run([1]));
print_r(BubbleSort::run([]));
print_r(BubbleSort::run([2,4,1,3,5]));
