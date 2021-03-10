<?php

class HeapSort
{
    public static function run($nums)
    {
        $n = count($nums) - 1;
        if ($n <= 1) {
            return $nums;
        }
        for ($i = $n / 2; $i >= 1; $i--) {
            self::sink($nums, $i, $n);
        }
        while ($n > 1) {
            self::swap($nums, 1, $n--);
            self::sink($nums, 1, $n);
        }
        return $nums;
    }

    public static function swap(&$nums, $a, $b)
    {
        $t = $nums[$a];
        $nums[$a] = $nums[$b];
        $nums[$b] = $t;
    }

    public static function sink(&$nums, $i, $n)
    {
        while (2 * $i <= $n) {
            $j = 2 * $i;
            if ($j + 1 <= $n && $nums[$j + 1] > $nums[$j]) {
                $j = $j + 1;
            }
            if ($nums[$i] < $nums[$j]) {
                self::swap($nums, $i, $j);
                $i = $j;
            } else {
                break;
            }
        }
    }
}

print_r(HeapSort::run([0,1,2,3,4,5]));
print_r(HeapSort::run([0,1,2]));
print_r(HeapSort::run([0,1]));
print_r(HeapSort::run([0]));
print_r(HeapSort::run([0,2,4,1,3,5]));

