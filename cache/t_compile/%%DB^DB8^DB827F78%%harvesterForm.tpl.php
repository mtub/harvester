<?php /* Smarty version 2.6.10, created on 2005-11-20 21:13:26
         compiled from file:/home/asmecher/cvs/harvester2/plugins/harvesters/oai//harvesterForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fieldLabel', 'file:/home/asmecher/cvs/harvester2/plugins/harvesters/oai//harvesterForm.tpl', 13, false),array('function', 'translate', 'file:/home/asmecher/cvs/harvester2/plugins/harvesters/oai//harvesterForm.tpl', 17, false),array('modifier', 'escape', 'file:/home/asmecher/cvs/harvester2/plugins/harvesters/oai//harvesterForm.tpl', 15, false),)), $this); ?>

	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'oaiUrl','key' => "plugins.harvesters.oai.archive.form.oaiUrl",'required' => 'true'), $this);?>
</td>
		<td class="value">
			<input type="text" id="oaiUrl" name="oaiUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['oaiUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" maxlength="120" class="textField" />
			<br/>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.harvesters.oai.archive.form.oaiUrl.description"), $this);?>

		</td>
	</tr>