<?php

class QuickSort
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }
        self::sort($nums, 0, count($nums) - 1);
        return $nums;
    }

    public static function sort(&$nums, $l, $r)
    {
        if ($l >= $r) {
            return;
        }
        $lt = $l;
        $i = $l + 1;
        $gt = $r;
        $v = $nums[$l];
        while ($i <= $gt) {
            if ($nums[$i] < $v) {
                self::swap($nums, $lt++, $i++);
            } elseif ($nums[$i] > $v) {
                self::swap($nums, $i, $gt--);
            } else {
                $i++;
            }
        }
        self::sort($nums, $l, $lt - 1);
        self::sort($nums, $gt + 1, $r);
    }

    public static function swap(&$nums, $a, $b)
    {
        $t = $nums[$a];
        $nums[$a] = $nums[$b];
        $nums[$b] = $t;
    }
}

print_r(QuickSort::run([1,2,3,4,5]));
print_r(QuickSort::run([1,2]));
print_r(QuickSort::run([1]));
print_r(QuickSort::run([]));
print_r(QuickSort::run([2,4,1,3,5]));
