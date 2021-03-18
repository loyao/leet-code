class Solution {

/**
 * @param Integer[][] $matrix
 * @return Integer[]
 */
function spiralOrder($matrix) {
    //首先计算m和n
    $num_m = count($matrix);
    $num_n = count($matrix[0]);
    $all_num = $num_n * $num_m;

    //计算四角
    $right = $num_n-1;
    $down = $num_m-1;
    $left = 0;
    $up = 0;
    $res = [];

    while(true){
      for($i=$left;$i<=$right;$i++){
      array_push($res,$matrix[$up][$i]);
     }
     $up++;
    if($up>$down) break;

     for($i=$up;$i<=$down;$i++){
         array_push($res,$matrix[$i][$right]);
     }
     $right--;
    if($right<$left) break;

    for($i=$right;$i>=$left;$i--){
     array_push($res,$matrix[$down][$i]);
      }
     $down--;
    if($down<$up) break;

    for($i=$down;$i>=$up;$i--){
       array_push($res,$matrix[$i][$left]);
    }
     $left++;
     if($left>$right) break;
    }
    return $res;
 }
}