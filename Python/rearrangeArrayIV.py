
class Solution:
	def rearrange(self, nums: list[int]) -> None:
		# Write your code here...
        left = 0
        right = len(nums) - 1

        while left < right:
            if nums[left] > 0:
                temp = nums[left]
                nums[left] = nums[right]
                nums[right] = temp
                right -= 1
            else:
                left += 1
        return


sol = Solution()
sol.rearrange([9, -3, 5, -2, -8, -6, 1, 3])