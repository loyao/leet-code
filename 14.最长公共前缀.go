/*
 * @lc app=leetcode.cn id=14 lang=golang
 *
 * [14] 最长公共前缀
 */

// @lc code=start
func longestCommonPrefix(strs []string) string {
	num := len(strs)

	if num == 0 {
		return ""
	}
	firstLen := len(strs[0])-1

	for i := 0; i < num; i++ {
		k:=0
		for ;k<=firstLen;k++ {
			if k > len(strs[i])-1 || strs[0][k] != strs[i][k]{
				if k == 0 {
					return ""
				}
				break;
			}
		}
		firstLen = k-1
	}
	s := strs[0][:firstLen+1]
	return s
}
// @lc code=end

