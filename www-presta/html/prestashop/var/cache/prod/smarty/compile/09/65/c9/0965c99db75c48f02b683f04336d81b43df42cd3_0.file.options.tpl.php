<?php
/* Smarty version 3.1.48, created on 2024-11-30 21:51:16
  from '/var/www/html/prestashop/admin9308dqo0o/themes/default/template/controllers/stores/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b7ac4c755d5_30171727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0965c99db75c48f02b683f04336d81b43df42cd3' => 
    array (
      0 => '/var/www/html/prestashop/admin9308dqo0o/themes/default/template/controllers/stores/helpers/options/options.tpl',
      1 => 1732313112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b7ac4c755d5_30171727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718563432674b7ac4c72810_56853926', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_1718563432674b7ac4c72810_56853926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1718563432674b7ac4c72810_56853926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function ajaxStoreStates(id_state_selected)
{
    $.ajax({
	url: "index.php",
	cache: false,
	data: "ajax=1&tab=AdminStates&token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStates'),$_smarty_tpl ) );?>
&action=states&id_country="+$('#PS_SHOP_COUNTRY_ID').val() + "&id_state=" + $('#PS_SHOP_STATE_ID').val(),
	success: function(html)
	{
	    if (html == 'false')
	    {
		$("#conf_id_PS_SHOP_STATE_ID").parent().fadeOut();
		$('#PS_SHOP_STATE_ID option[value=0]').attr("selected", "selected");
	    }
	    else
	    {
		$("#PS_SHOP_STATE_ID").html(html);
		$("#conf_id_PS_SHOP_STATE_ID").parent().fadeIn();
		$('#PS_SHOP_STATE_ID option[value=' + id_state_selected + ']').attr("selected", "selected");
	    }
	}
    });
}

$(document).ready(function(){
    <?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['fields']['PS_SHOP_STATE_ID']['value']))) {?>
	    if ($('#PS_SHOP_COUNTRY_ID') && $('#PS_SHOP_STATE_ID'))
	    {
			ajaxStoreStates(<?php echo $_smarty_tpl->tpl_vars['categoryData']->value['fields']['PS_SHOP_STATE_ID']['value'];?>
);
			$('#PS_SHOP_COUNTRY_ID').change(function() {
			    ajaxStoreStates();
			});
	    }
    <?php }?>
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}