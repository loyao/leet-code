func isPalindrome(x int) bool {
     if (x < 0) {
            return false;
        }
        var use int = x;
        var num int = 0;
        for (x > 0) {
            num = num * 10 + x % 10;
            x = (x / 10);
        }
        return num==use;
}