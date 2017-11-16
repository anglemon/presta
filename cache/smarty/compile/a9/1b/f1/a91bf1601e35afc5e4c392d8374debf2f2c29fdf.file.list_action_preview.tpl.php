<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 09:46:38
         compiled from "D:\CFYC\SourceCode\prestashop\admin054nupz2f\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342259b2048ef2f6f0-42069633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91bf1601e35afc5e4c392d8374debf2f2c29fdf' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\admin054nupz2f\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1498211114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342259b2048ef2f6f0-42069633',
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
  'unifunc' => 'content_59b2048ef3fa38_36473007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2048ef3fa38_36473007')) {function content_59b2048ef3fa38_36473007($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
