<?php

/**
 * 选择排序(选定一个值，挨个比较，得出第一个最小值，多次循环，得到结果集)
 * 循环取出最小的值
 * 时间复杂度O(n*n)
 */
function select_sort($arr = []){
    if(count($arr) < 2){
        return $arr;
    }
    for($i=0;$i<count($arr)-1;$i++){
        $min_index = $i;//假定最小值的索引
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$min_index] > $arr[$j]){
                $min_index = $j;//得到每次循环结果的最小值索引
            }
        }
        if($i != $min_index){//说明假定的值，不是最小值
            $temp = $arr[$i];
            $arr[$i] = $arr[$min_index];
            $arr[$min_index] = $temp;
        }
    }
    return $arr;
}
$arr = [10, 5, 2, 3,12];
$a = select_sort($arr);
print_r($a);die;