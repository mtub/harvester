<?php /* Smarty version 2.6.10, created on 2005-11-15 15:18:48
         compiled from about/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'about/index.tpl', 15, false),array('function', 'translate', 'about/index.tpl', 18, false),)), $this); ?>

<?php $this->assign('pageTitle', "navigation.about");  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if (! empty ( $this->_tpl_vars['about'] )): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['about'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<a href="<?php echo $this->_tpl_vars['pageUrl']; ?>
/about/harvester"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.harvester"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>