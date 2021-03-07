<?php

class MergeSort
{
    public static function run($nums)
    {
        if (empty($nums)) {
            return [];
        }

        $n = count($nums);
        for ($i = 1; $i < $n; $i += $i) {
            for ($j = 0; $j + $i < $n; $j += $i + $i) {
                self::merge($nums, $j, $j + $i - 1, min($j + $i + $i - 1, $n - 1));
            }
        }
        return $nums;
    }

    public static function merge(&$nums, $l, $m, $r)
    {
        $bk = [];
        for ($i = $l; $i <= $r; $i++) {
            $bk[$i] = $nums[$i];
        }
        $a = $l;
        $b = $m + 1;
        for ($i = $l; $i <= $r; $i++) {
            if ($a > $m) {
                $nums[$i] = $bk[$b++];
            } elseif ($b > $r) {
                $nums[$i] = $bk[$a++];
            } elseif ($bk[$a] < $bk[$b]) {
                $nums[$i] = $bk[$a++];
            } else {
                $nums[$i] = $bk[$b++];
            }
        }
    }
}

print_r(MergeSort::run([1,2,3,4,5]));
print_r(MergeSort::run([1,2]));
print_r(MergeSort::run([1]));
print_r(MergeSort::run([]));
print_r(MergeSort::run([2,4,1,3,5]));
