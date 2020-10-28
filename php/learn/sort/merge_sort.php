<?php
/**
 * 时间复杂度：O(nlogn)
 */

//递归调用,分解数组
function mergeSort(array $arr, $p, $r)
{
    if ($p >= $r) {
        return [$arr[$r]];
    }
    $q = (int)(($p + $r) / 2);
    print_r($q);die;
    $left = mergeSort($arr, $p, $q);

    $right = mergeSort($arr, $q + 1, $r);

    return merge($left, $right);
}

//合并
function merge(array $left, array $right)
{
//    print_r($right);
    $tmp = [];

    $i = 0;

    $j = 0;

    $leftLength = count($left);

    $rightLength = count($right);

    do {
        if ($left[$i] <= $right[$j]) {
            $tmp[] = $left[$i++];
        } else {
            $tmp[] = $right[$j++];
        }

    } while ($i < $leftLength && $j < $rightLength);


    $start = $i;
    $end = $leftLength;
    $copyArr = $left;

    if ($j < $rightLength) {
        $start = $j;
        $end = $rightLength;
        $copyArr = $right;
    }

    for (; $start < $end; $start++) {
        $tmp[] = $copyArr[$start];
    }

    return $tmp;
}

$arr = [4, 5, 6, 1, 3, 2];
$length = count($arr);

$p = 0;
$r = $length - 1;

$result = mergeSort($arr, $p, $r);

print_r($result);