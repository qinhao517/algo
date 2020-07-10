<?php
/**
 * User: lide01
 * Date: 2018/10/9 14:06
 * Desc:
 */

namespace Algo_07;
require_once '../vendor/autoload.php';

use Algo_06\SingleLinkedList;


/**
 *
 * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
 * 你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍

 * 示例:
    给定 nums = [2, 7, 11, 15], target = 9
    因为 nums[0] + nums[1] = 2 + 7 = 9,所以返回 [0, 1]

 */


/**
 * 解法一
 *
 *解题思路：可以给数组先按照升序排列，再根据首尾指针的方式进行解题
 *
 * @param $nums
 * @param $target
 * @return array
 */
function twoSumOne($nums, $target){
    $right = count($nums)-1;//尾指针
    $left = 0;//首指针
    $old_nums = $nums;
    sort($nums);
    while ($left<$right){
        if($nums[$left]+$nums[$right] == $target){
            $res = [$nums[$left],$nums[$right]];
            break;
        }else if($nums[$left]+$nums[$right] < $target){
            $left++;
        }else{
            $right--;
        }
    }

    //找到是哪两个值，再获取对应的key即可
    list($fir_value,$sec_value) = $res;
    $fir_key = array_keys($old_nums,$fir_value)[0];
    unset($old_nums[$fir_key]);//解决相同值只返回同一个位置key的情况
    $sec_key = array_keys($old_nums,$sec_value)[0];
    return [$fir_key,$sec_key];
}g

/**
 * 解法二
 * @param $nums
 * @param $target
 *
 */
function twoSumTwo($nums, $target){
    $count = count($nums);
    $queue = [$nums[0] => 0];
    for($i = 1; $i < $count; $i++) {
        $x = $target - $nums[$i];
        if(isset($queue[$x])) return [$queue[$x], $i];
        isset($queue[$nums[$i]]) || $queue[$nums[$i]] = $i;
    }
    return [];
}


$nums=[3,3];
$target = 6;
$res = twoSumOne($nums, $target);
print_r($res);die;