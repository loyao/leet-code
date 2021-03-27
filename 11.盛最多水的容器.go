/*
 * @lc app=leetcode.cn id=11 lang=golang
 *
 * [11] 盛最多水的容器
 */

// @lc code=start
func maxArea(height []int) int {
	Area, maxArea, left, right := 0, 0, 0, len(height)-1
	var h, d int
	for left < right {
		d = right - left
		if height[left] < height[right] {
			//固定最长的那个，移动短的
			h = height[left]
			left++
		} else {
			h = height[right]
			right--
		}
		Area = h * d
		if Area > maxArea {
			maxArea = Area
		}
	}
	return maxArea
}

// @lc code=end

