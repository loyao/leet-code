/*
 * @lc app=leetcode.cn id=39 lang=golang
 *
 * [39] 组合总和
 */

// @lc code=start
func combinationSum(candidates []int, target int) [][]int {
	//先排序在相加
	sort.Ints(candidates)
	return dfs(candidates,target)
}

func dfs(candidates []int,target int) [][]int  {
	var ret [][]int
	for i, d := range candidates {
		if target-d < 0 {
			break
		} else if target-d == 0 {
			ret = append(ret, []int{d})
			continue
		}
		for _, v := range dfs(candidates[i:], target-d) {
			ret = append(ret, append([]int{d}, v...))
		}
	}
	return ret
}
// @lc code=end

