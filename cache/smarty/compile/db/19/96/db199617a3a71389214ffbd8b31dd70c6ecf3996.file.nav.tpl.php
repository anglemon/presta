<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:03
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2019059b0bcff3fa519-54084672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db199617a3a71389214ffbd8b31dd70c6ecf3996' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\modules\\blockuserinfo\\nav.tpl',
      1 => 1499342965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2019059b0bcff3fa519-54084672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bcff42cb21_34827830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bcff42cb21_34827830')) {function content_59b0bcff42cb21_34827830($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div class="wrap_user_info">
	<div class="header_user_info">
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		<?php } else { ?>
			<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<div class="header_user_info">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
	        	<span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['cookie']->value->customer_firstname,2,'.'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
	        </a>
		</div>
	    <?php } else { ?>
	    <div class="header_user_info">
	    	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
	    </div>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
