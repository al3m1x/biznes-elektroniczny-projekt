<?php
/* Smarty version 3.1.48, created on 2024-11-30 21:49:03
  from '/var/www/html/prestashop/admin9308dqo0o/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b7a3fdf45a9_69665272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18dca9cddb3979ac42f5cbcc8db409c25d96da8d' => 
    array (
      0 => '/var/www/html/prestashop/admin9308dqo0o/themes/default/template/content.tpl',
      1 => 1732313112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b7a3fdf45a9_69665272 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
