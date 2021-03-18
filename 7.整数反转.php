class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $max = pow(2, 31);
        $res = 0;
        while ($x != 0) {
            $remainder = $x % 10;
            $x = ($x - $remainder) / 10;
            $res = $res * 10 + $remainder;
        }
        if($res>($max-1)) return 0;
        if($res<(-1*$max)) return 0;
        return $res;
    }
}