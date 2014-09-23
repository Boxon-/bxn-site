<?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:40:11
         compiled from "./templates/committip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20827635885401aa0bbb3e43-18322990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9e66430931dafd5f0f803028fa10022eafe511' => 
    array (
      0 => './templates/committip.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20827635885401aa0bbb3e43-18322990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'commit' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401aa0bbf2200_50269710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401aa0bbf2200_50269710')) {function content_5401aa0bbf2200_50269710($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/block.t.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/lib/smarty/libs/plugins/modifier.date_format.php';
?>
<div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorName();?>
 (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%Y-%m-%d %H:%M:%S");?>
</time>)
<br />
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
committer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetCommitterName();?>
 (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%Y-%m-%d %H:%M:%S");?>
</time>)
<br /><br />
<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetComment(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
<?php if (strncasecmp(trim($_smarty_tpl->tpl_vars['line']->value),'Signed-off-by:',14)==0){?>
<span class="signedOffBy"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php }?>
<br />
<?php } ?>
</div>
<?php }} ?>