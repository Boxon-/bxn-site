<?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:24:27
         compiled from "./templates/projectindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14799860735401a65b9af7e9-68730096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48ef827302722fbf79524c7f1cb02ebf1290f74' => 
    array (
      0 => './templates/projectindex.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14799860735401a65b9af7e9-68730096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projectlist' => 0,
    'proj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401a65b9c2a18_04983749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401a65b9c2a18_04983749')) {function content_5401a65b9c2a18_04983749($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projectlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value){
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['proj']->value->GetProject();?>

<?php } ?>
<?php }} ?>