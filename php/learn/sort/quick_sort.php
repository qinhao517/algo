<?php

/**
 * 快速排序
 * 分而治之的思想，选定基准值，分为两个部分，使用递归排序两个部分最终得到结果集
 * 时间复杂度O(n*logn)
 */
function quick_sort($arr = []){
    if(count($arr) < 2){
        return $arr;
    }
    //设置递归条件
    $pivot = $arr[0];//基准值
    $less = [];
    $greater = [];
    for ($i=0;$i<count($arr)-1;$i++){
        if($arr[$i] <= $pivot){//由所有小于基准值的元素组成的子数组
            $less[] = $arr[$i];
        }else{//由所有大于基准值的元素组成的子数组
            $greater[] = $arr[$i];
        }
    }

//    $less = quick_sort($less);
//    $greater = quick_sort($greater);
    return array_merge(quick_sort($less),[$pivot],quick_sort($greater));
}

$arr = [10, 5, 2, 3,12,343,463];
$a = quick_sort($arr);
print_r($a);