<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 09:46:43
         compiled from "D:\CFYC\SourceCode\prestashop\admin054nupz2f\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1261159b2049388efb3-85416119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4db848c33b5b5e9d730816ce4b0e0ce896ad12' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\admin054nupz2f\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1498211114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1261159b2049388efb3-85416119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b204938c3108_47922991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b204938c3108_47922991')) {function content_59b204938c3108_47922991($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
