class Solution {

/**
 * @param Integer $n
 * @return Integer[][]
 */
function generateMatrix($n) {
    //计算四角
    $right = $n-1;
    $down = $n-1;
    $left = 0;
    $up = 0;
    $res = [];
    $num = 1;//初始数字
    $res =  array_fill(0,$n,array_fill(0,$n,0));
    while(true){
        //先从左到右，顶部数字不会变化
        for($i = $left;$i<=$right;$i++){
            $res[$up][$i] = $num;
            $num++;
        }
        $up++;
        if($up>$down){
            break;
        }
        //计算从右上角到右下角,右数字不变
        for($i = $up;$i<=$down;$i++){
            $res[$i][$right] = $num;
            $num++;
        }
        $right--;//右下角第一个已经被写入了
        if($right<$left){
            break;
        }
        //计算右下角到左下角，这个时候是横着的坐标不变竖着的坐标在变动
        for($i=$right;$i>=$left;$i--){
            $res[$down][$i] = $num;
            $num++;
        }
        $down--;//向上走
        if($down<$up){
            break;
        }
        //计算的是左下到左上，这个时候竖着的坐标是不变的，就是左是变的
        for($i=$down;$i>=$up;$i--){
            $res[$i][$left] = $num;
            $num++;
        }
         $left++;
        if($left > $right){
            break;
        } 
    }
    return $res;
}
}