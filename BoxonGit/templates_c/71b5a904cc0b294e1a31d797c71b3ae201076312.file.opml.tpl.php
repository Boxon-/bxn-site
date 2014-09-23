<?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 14:26:59
         compiled from "./templates/opml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4280629625401df33cfedd3-85190606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b5a904cc0b294e1a31d797c71b3ae201076312' => 
    array (
      0 => './templates/opml.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4280629625401df33cfedd3-85190606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'projectlist' => 0,
    'proj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401df33e8d669_88035719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401df33e8d669_88035719')) {function content_5401df33e8d669_88035719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.geturl.php';
?>
<?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>

<opml version="1.0">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 OPML Export</title>
  </head>
  <body>
    <outline text="git Atom feeds">

      <?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projectlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value){
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
      <outline type="rss" text="<?php echo $_smarty_tpl->tpl_vars['proj']->value->GetProject();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['proj']->value->GetProject(), ENT_QUOTES, 'UTF-8', true);?>
" xmlUrl="<?php echo smarty_function_geturl(array('fullurl'=>true,'project'=>$_smarty_tpl->tpl_vars['proj']->value,'action'=>'atom'),$_smarty_tpl);?>
" htmlUrl="<?php echo smarty_function_geturl(array('fullurl'=>true,'project'=>$_smarty_tpl->tpl_vars['proj']->value),$_smarty_tpl);?>
" />

      <?php } ?>
    </outline>
  </body>
</opml>
<?php }} ?>