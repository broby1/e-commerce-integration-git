<?php /* Smarty version Smarty-3.1.19, created on 2016-06-21 19:31:53
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/carriercompare/template/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179805470757697a095a7ce7-63059718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20e6325f8c6184737a56f4dc3cbdbd5444e150a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/carriercompare/template/configuration.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179805470757697a095a7ce7-63059718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57697a095d4454_45900299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57697a095d4454_45900299')) {function content_57697a095d4454_45900299($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['display_error']->value) {?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'An error occurred during form validation.','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php } else { ?>
		<div class="conf"><?php echo smartyTranslate(array('s'=>'Configuration updated','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">
	<fieldset>
		<div class="warn">
			<?php echo smartyTranslate(array('s'=>'This module is only available during the standard five-step checkout process. The carrier list has already been defined for one-page checkout.','mod'=>'carriercompare'),$_smarty_tpl);?>

		</div>
		<legend><?php echo smartyTranslate(array('s'=>'Global Configuration','mod'=>'carriercompare'),$_smarty_tpl);?>
</legend>
		
		<label for="refresh_method">Refresh carrier list method</label>
		<div class="margin-form">
			<select id="refresh_method" name="refresh_method">
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Anytime','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'The required information is set.','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
			</select>
			<p><?php echo smartyTranslate(array('s'=>'How would you like to refresh information for a customer?','mod'=>'carriercompare'),$_smarty_tpl);?>
</p>
		</div>
		
		<div class="margin-form">
			<input name="setGlobalConfiguration" type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'carriercompare'),$_smarty_tpl);?>
">
		</div>
	</fieldset>
</form>
<?php }} ?>
