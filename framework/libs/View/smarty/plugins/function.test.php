<?php 
	
	function smarty_function_test($params){
		//smarty_function_插件名称
		// $参数1 = $params(['参数1'])
		// $参数2 = $params(['参数2'])
		$widht = $params(['widht']);
		$height = $params(['height']);
		$area = $width*$height;
		return $area;
	}

 ?>