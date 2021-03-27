/*
 * @lc app=leetcode.cn id=61 lang=golang
 *
 * [61] 旋转链表
 */

// @lc code=start
/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func rotateRight(head *ListNode, k int) *ListNode {
	if head == nil || k == 0 {
		return head
	}
	//计算链表长度
	var n int = 1
	lenList := head
	for lenList.Next != nil {
		lenList = lenList.Next
		n++
	}
	k = k % n //实际变换
	lenList.Next = head
	for i := 1; i <= n-k; i++ {
		lenList = lenList.Next
	}
	head, lenList.Next = lenList.Next, nil
	return head
}

// @lc code=end

