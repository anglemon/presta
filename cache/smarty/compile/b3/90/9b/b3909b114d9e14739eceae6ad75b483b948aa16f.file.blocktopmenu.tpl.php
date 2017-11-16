<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:02
         compiled from "D:\CFYC\SourceCode\prestashop\themes\theme1133\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2811159b0bcfe8057a7-75702106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3909b114d9e14739eceae6ad75b483b948aa16f' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\themes\\theme1133\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1499342965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2811159b0bcfe8057a7-75702106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bcfe881774_89097930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bcfe881774_89097930')) {function content_59b0bcfe881774_89097930($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener">
        <div class="container">
            <div class="wrap-menu">
        		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Categories",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
                <ul class="sf-menu clearfix menu-content">
                    <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
                        <li class="sf-search noBack" style="float:right">
                            <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                                <p>
                                    <input type="hidden" name="controller" value="search" />
                                    <input type="hidden" value="position" name="orderby"/>
                                    <input type="hidden" value="desc" name="orderway"/>
                                    <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                                </p>
                            </form>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
