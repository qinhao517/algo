<?php

/**
 * 首先，我们将数组中的数据分为两个区间，已排序区间和未排序区间
 * 初始已排序区间只有一个元素，就是数组的第一个元素。插入算法的核心思想
 * 是取未排序区间中的元素，在已排序区间中找到合适的插入位置将其插入，并保证已排序区间数据一直有序。重复这个过程，直到未排序区间中元素为空，算法结束
 *
 * 步骤：
    1.从第一个元素开始，该元素可以认为已经被排序
    2.取出下一个元素，在已经排序的元素序列中从后向前扫描
    3.如果该元素（已排序）大于新元素，将该元素移到下一位置
    4.重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
    5.将新元素插入到该位置中
    6.重复步骤2
 *
 * 插入排序
 * @param $arr
 *  时间复杂度：O(n*n)
 */
function insert_sort($arr){
    $n = count($arr);
    if($n < 2){
        return $arr;
    }

    for($i=1;$i<$n;$i++){
        $value = $arr[$i];//47 i=2
        //内层循环控制 比较 并 插入
        for($j=$i-1;$j>=0;$j--){//j=1
            //$arr[$i];需要插入的元素
            //$arr[$j];需要比较的元素
            if($arr[$j]<$value){ //从小到大 > || 从大到小 <
                //发现插入的元素要小，交换位置
                //将后边的元素与前面的元素互换
                $arr[$j+1] = $arr[$j];

                //将前面的数设置为 当前需要交换的数
                $arr[$j] = $value;

            }else{
                break;
            }

        }
    }
    return $arr;
}

$arr = [23,7,47,86,54,1,56,5,3,21,32,15];
print_r(insert_sort($arr));