<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:09
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:853159b0bd058b0202-68451080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0a984f7249d4523c4c58f14adbb1b716c10bb0' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\index.tpl',
      1 => 1499342963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '853159b0bd058b0202-68451080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bd058c06f4_82220170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bd058c06f4_82220170')) {function content_59b0bd058c06f4_82220170($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php }} ?>
