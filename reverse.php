<?php

function reverse($x) {  
    if($x<0){            //判断是否为负数
		echo 'false';
    }
    else{
		 $reversed = (int)strrev((string)$x);     //对数值进行反转
    
              if($reversed==$x){
		           echo 'true';
              }
	          else{
		           echo 'false';
	          }
         }
}

reverse(135531);

?>