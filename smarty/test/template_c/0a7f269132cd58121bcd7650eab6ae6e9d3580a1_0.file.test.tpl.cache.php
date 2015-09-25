<?php /* Smarty version 3.1.27, created on 2015-09-25 08:53:21
         compiled from "tpl/test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11575769255604ef61d839f7_37659191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7f269132cd58121bcd7650eab6ae6e9d3580a1' => 
    array (
      0 => 'tpl/test.tpl',
      1 => 1443163998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11575769255604ef61d839f7_37659191',
  'variables' => 
  array (
    'abcde' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5604ef61df7d90_07268940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5604ef61df7d90_07268940')) {
function content_5604ef61df7d90_07268940 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11575769255604ef61d839f7_37659191';
echo (($tmp = @$_smarty_tpl->tpl_vars['abcde']->value)===null||$tmp==='' ? "no title" : $tmp);

}
}
?>