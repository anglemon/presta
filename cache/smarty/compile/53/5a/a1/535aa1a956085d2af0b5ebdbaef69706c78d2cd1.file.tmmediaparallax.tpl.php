<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:29:02
         compiled from "D:\CFYC\SourceCode\prestashop\modules\tmmediaparallax\views\templates\hook\tmmediaparallax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3230259b0bcfe60a4f4-51449205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '535aa1a956085d2af0b5ebdbaef69706c78d2cd1' => 
    array (
      0 => 'D:\\CFYC\\SourceCode\\prestashop\\modules\\tmmediaparallax\\views\\templates\\hook\\tmmediaparallax.tpl',
      1 => 1499342967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3230259b0bcfe60a4f4-51449205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_path' => 0,
    'smooth_scroll_on' => 0,
    'smooth_scroll_time' => 0,
    'smooth_scroll_distance' => 0,
    'parallaxitems' => 0,
    'item' => 0,
    'media_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b0bcfe6bd3a5_89549120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0bcfe6bd3a5_89549120')) {function content_59b0bcfe6bd3a5_89549120($_smarty_tpl) {?><script>
	function addVideoParallax(selector, path, filename)
	{
		var selector = $(selector);

		selector.addClass('parallax_section');
		selector.attr('data-type-media', 'video_html');
		selector.attr('data-mp4', 'true');
		selector.attr('data-webm', 'true');
		selector.attr('data-ogv', 'true');
		selector.attr('data-poster', 'true');
		selector.wrapInner('<div class="parallax_content"></div>');
		selector.append('<div class="parallax_inner"><video class="parallax_media" width="100%" height="100%" autoplay loop poster="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
'+path+filename+'.jpg"><source src="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
'+path+filename+'.mp4" type="video/mp4"><source src="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
'+path+filename+'.webdm" type="video/webm"><source src="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
'+path+filename+'.ogv" type="video/ogg"></video></div>');

		selector.tmMediaParallax();
	}
	
	function addImageParallax(selector, path, filename, width, height)
	{
		var selector = $(selector);

		selector.addClass('parallax_section');
		selector.attr('data-type-media', 'image');
		selector.wrapInner('<div class="parallax_content"></div>');
		selector.append('<div class="parallax_inner"><img class="parallax_media" src="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
'+path+filename+'" data-base-width="'+width+'" data-base-height="'+height+'"/></div>');

		selector.tmMediaParallax();
	}

	function checkBrowser()
	{
	    var ua = navigator.userAgent;
	    
	    if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
	    if (ua.search(/Firefox/) > 0) return 'Firefox';
	    if (ua.search(/Opera/) > 0) return 'Opera';
	    if (ua.search(/Chrome/) > 0) return 'Google Chrome';
	    if (ua.search(/Safari/) > 0) return 'Safari';
	    if (ua.search(/Konqueror/) > 0) return 'Konqueror';
	    if (ua.search(/Iceweasel/) > 0) return 'Debian Iceweasel';
	    if (ua.search(/SeaMonkey/) > 0) return 'SeaMonkey';
	    if (ua.search(/Gecko/) > 0) return 'Gecko';

	    return 'Search Bot';
	}

	<?php if ($_smarty_tpl->tpl_vars['smooth_scroll_on']->value==1) {?>

		$(window).load(function(){  
		    if(checkBrowser() == 'Google Chrome' && device.windows()){
		        if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
		            window.onmousewheel = document.onmousewheel = wheel;

		            var time = <?php echo $_smarty_tpl->tpl_vars['smooth_scroll_time']->value;?>
;
		            var distance = <?php echo $_smarty_tpl->tpl_vars['smooth_scroll_distance']->value;?>
;

		            function wheel(event) {
		                if (event.wheelDelta) delta = event.wheelDelta / 90;
		                else if (event.detail) delta = -event.detail / 3;
		                handle();
		                if (event.preventDefault) event.preventDefault();
		                event.returnValue = false;
		            }

		            function handle() {
		                $('html, body').stop().animate({
		                    scrollTop: $(window).scrollTop() - (distance * delta)
		                }, time);
		            }
		    }
		});

	<?php }?>

	$(window).load(function(){
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parallaxitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='image') {?>
				addImageParallax('<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
','<?php echo $_smarty_tpl->tpl_vars['media_path']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['width'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['height'];?>
');
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='video') {?>
				addVideoParallax('<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
','<?php echo $_smarty_tpl->tpl_vars['media_path']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
');
			<?php }?>
		<?php } ?>
	});
</script>
<?php }} ?>
