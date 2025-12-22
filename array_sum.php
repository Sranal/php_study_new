<?php

//两数之和，从数组nums中找出目标值为target的两个整数
//利用循环寻找是否有两个数的和为target

$nums = array(2,7,11,15);
$target = 9;

for($i = 0,$len = count($nums); $i < $len; $i++){
	
	for($j = $i+1; $j < $len; $j++){    //寻找是否存在两个数的和为target
		
		if($nums[$i] + $nums[$j] == $target){  
			
			echo $i,'<br/>',$j,'<br/>';              //返回对应数值的坐标
			echo $nums[$i],'+',$nums[$j],'=',$target;    //返回对应的数值
			
			break;
		}
	}
}