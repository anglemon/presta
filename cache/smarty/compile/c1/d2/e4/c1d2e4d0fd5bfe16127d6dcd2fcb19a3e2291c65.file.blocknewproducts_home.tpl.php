<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:09
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3206659b0bd057ad284-92131920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1d2e4d0fd5bfe16127d6dcd2fcb19a3e2291c65' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1499342964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3206659b0bd057ad284-92131920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bd057bb2d4_78466843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bd057bb2d4_78466843')) {function content_59b0bd057bb2d4_78466843($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
    <ul id="blocknewproducts" class="blocknewproducts tab-pane">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
    </ul>
<?php }?><?php }} ?>
