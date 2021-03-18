/*
 * @lc app=leetcode.cn id=13 lang=php
 *
 * [13] 罗马数字转整数
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $num_arr = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        $roma_num = str_split($s);//罗马数字集合
        $res = 0;
        $last = 0;//保存上一个数字
        foreach($roma_num as $val){
            if($last&&$last<$num_arr[$val]){
                $res +=  $num_arr[$val]-$last*2;//4=1+5-1*2,多加了一个就减一个
            }else{
                $res += $num_arr[$val];
            }
            $last = $num_arr[$val];
        }
        return $res;
    }
}
// @lc code=end

