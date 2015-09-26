<?php 

header("Content-type:text/html; charset=utf-8");

$config = array(
		'viewconfig'=> array(

			'left_delimiter'  => '{'   ,
			'right_delimiter' => '}'   ,
			'template_dir'    => 'tpl' ,
			'compile_dir'     => 'data/template_c'),


		'dbconfig' => array(

			'dbhost'    =>     'localhost',
			'dbuser'    =>     'root',
			'dbpws'     =>     '',
			'dbname'    =>     'newsreport',
			'dbcharset' =>     'utf8')

)

?>