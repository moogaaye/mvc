<?php 

	function C($name,$method){
	
		require_once ('framework/libs/Controller/'.$name.'Controller.class.php');
	
		$controller = $name.'Controller';

		$obj = new $controller();
		
		$obj->$method();
	}

	function M($name){
		
		require_once ('framework/libs/Model/'.$name.'Model.class.php');

		$Model = $name.'Model';

		$obj = new $Model();

		return $obj;
}
	function V($name){

		require_once('framework/libs/View/'.$name.'View.class.php');

		$View = $name.'View';

		$obj = new $View();

		return $obj;
	}
	
	function daddslashes($str){

		return(!get_magic_quotes_gpc())?addslashes($str):$str;
}


 ?>