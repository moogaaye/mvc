<?php 
	require_once ('../Smarty.class.php');
	$smarty = new Smarty();

	$smarty->left_delimiter = "{";
	$smarty->right_delimiter = "}";
	$smarty->template_dir = "tpl";
	$smarty->compile_dir = "template_c";
	$smarty->cache_dir = "cache";
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;


	$smarty->assign('happy','中秋
		中秋
		中秋');
	$smarty->display('test.tpl');



 ?>