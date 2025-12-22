<?php

function reverse($a)
{
          while ($a != 0) {     //对数值进行反转
          $digit = $a % 10;
          $reversed = $reversed * 10 + $digit;
          $a = (int)($a / 10);		
		}
		return $reversed;
}

function reverseNum($x) {
    
	if($x<0){            //判断是否为负数
		echo 'false';
    }
	else{ 
		$reversed = reverse($x);		
		
		echo 'reveresd number is ', $reversed ,'<br/>'; //返回反转值
		
		if($reversed==$x){
		      echo 'true';
        }
	    else{
		       echo 'false';
	        }
    }
  
}
 reverseNum(234565432);