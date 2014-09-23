<?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:44:15
         compiled from "./templates/treelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110524449541da0cf0e8864-82844452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba8cefe55f8779f66f1cb28cf503702f18bfd15' => 
    array (
      0 => './templates/treelist.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110524449541da0cf0e8864-82844452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'treeitem' => 0,
    'project' => 0,
    'commit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_541da0cf14be58_24878111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541da0cf14be58_24878111')) {function content_541da0cf14be58_24878111($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
?>

<?php  $_smarty_tpl->tpl_vars['treeitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['treeitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tree']->value->GetContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['treeitem']->key => $_smarty_tpl->tpl_vars['treeitem']->value){
$_smarty_tpl->tpl_vars['treeitem']->_loop = true;
?>
  <tr class="<?php echo smarty_function_cycle(array('values'=>"light,dark"),$_smarty_tpl);?>
">
    <td class="monospace perms"><?php echo $_smarty_tpl->tpl_vars['treeitem']->value->GetModeString();?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['treeitem']->value instanceof GitPHP_Blob){?>
      <td class="filesize"><?php echo $_smarty_tpl->tpl_vars['treeitem']->value->GetSize();?>
</td>
      <td></td>
      <td class="list fileName">
        <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
" class="list"><?php echo $_smarty_tpl->tpl_vars['treeitem']->value->GetName();?>
</a>
      </td>
      <td class="link">
        <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 | 
	<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'history','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
history<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 | 
	<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath(),'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
      </td>
    <?php }elseif($_smarty_tpl->tpl_vars['treeitem']->value instanceof GitPHP_Tree){?>
      <td class="filesize"></td>
      <td class="expander"></td>
      <td class="list fileName">
        <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
" class="treeLink"><?php echo $_smarty_tpl->tpl_vars['treeitem']->value->GetName();?>
</a>
      </td>
      <td class="link">
        <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 | 
	<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'snapshot','hash'=>$_smarty_tpl->tpl_vars['treeitem']->value,'file'=>$_smarty_tpl->tpl_vars['treeitem']->value->GetPath()),$_smarty_tpl);?>
" class="snapshotTip"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
snapshot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
      </td>
    <?php }?>
  </tr>
<?php } ?>
<?php }} ?>