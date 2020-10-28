<?php

/**
 * 冒泡排序只会操作相邻的两个数据。每次冒泡操作都会对相邻的两个元素进行比较，看是否满足大小关系要求。如果不满足就让它俩互换
 *
 * 经典的两个for循环，外层的循环表示需要排序多少次，内层的for表示每一次循环的数据比较
 * 冒泡排序
 * @param $arr
 * 时间复杂度：O(n*n)
 */
function bubble_sort($arr){
    $count = count($arr);
    for($i=0;$i<$count;$i++){
        // 提前退出冒泡循环的标志位
        $flag = false;//冒泡排序的优化，没有数据交换的话，其实就不用再进行下去了
        for($j=0;$j<$count-$i-1;$j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
                $flag = true;
            }
        }

        if (!$flag) break; // 没有数据交换，提前退出
    }
    return $arr;
}

$arr = [2,454,776,87,456,43,57,863,24,7,85,5];
print_r(bubble_sort($arr));