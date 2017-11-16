<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:09
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232459b0bd054d28c7-09070743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae04940e1458c73547373e2aedcb009f2dafda7' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1499342965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232459b0bd054d28c7-09070743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bd054e10c1_60733631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bd054e10c1_60733631')) {function content_59b0bd054e10c1_60733631($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
