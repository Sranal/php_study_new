<?php

//两数之和，从数组nums中找出目标值为target的两个整数
//利用差值查找

$nums = array(19,40,11,15);
$target = 30;

for($i = 0,$len = count($nums); $i < $len; $i++){
	
	$sub = $target - $nums[$i];           //目标值与数值的差
	
	if(in_array($sub,$nums) == true){    //如果差值存在，返回对应的坐标，结束循环
		
       $j = array_search($sub,$nums);
		   echo $i,'<br/>',$j;
	       break;
	}
			
}
