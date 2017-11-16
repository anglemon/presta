<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:09
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752859b0bd052cd387-98509729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cde482efcf7b44ce5e50a52a418affa4e211825' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1499342964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752859b0bd052cd387-98509729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bd052e49b8_63730193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bd052e49b8_63730193')) {function content_59b0bd052e49b8_63730193($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
    <div class="insert">
        <h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
        <div class="facebook-fanbox">
            <div class="fb-like-box" 
                data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" 
                data-height="237" 
                data-colorscheme="light" 
                data-show-faces="true" 
                data-header="false" 
                data-stream="false" 
                data-show-border="false"
                connections="10">
            </div>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
