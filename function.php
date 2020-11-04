<?php
//二维数组去掉重复值
function arr_unique($a){     
    foreach($a[0] as $k => $v){  //二维数组的内层数组的键值都是一样，循环第一个即可  
        $ainner[]= $k;   //先把二维数组中的内层数组的键值使用一维数组保存  
    }
    foreach ($a as $k => $v){
        $v =join(",",$v);    //将 值用 逗号连接起来  
        $temp[$k] =$v;         
    }    
    $temp =array_unique($temp);    //去重
    foreach ($temp as $k => $v){
        $a = explode(",",$v);   //拆分后的重组  
        $arr_after[$k]= array_combine($ainner,$a);  //将原来的键与值重新合并 
    }    
    return $arr_after;
}

?>
