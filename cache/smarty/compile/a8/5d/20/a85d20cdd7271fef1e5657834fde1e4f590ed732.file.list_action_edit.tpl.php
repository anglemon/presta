<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:24:27
         compiled from "D:\CFYC\SourceCode\prestashop\admin054nupz2f\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2194259b0bbeb8e8527-94253761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a85d20cdd7271fef1e5657834fde1e4f590ed732' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\admin054nupz2f\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1498211114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2194259b0bbeb8e8527-94253761',
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
  'unifunc' => 'content_59b0bbeb916798_27715311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bbeb916798_27715311')) {function content_59b0bbeb916798_27715311($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
