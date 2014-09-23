<?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:43:54
         compiled from "./templates/commit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790747095401a793c115a3-93954506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4d9751aa3ed9ff568a7cd87bd36997c9f09d3e' => 
    array (
      0 => './templates/commit.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    '2354a78962501f7b13aacb3fe4745483180d0c89' => 
    array (
      0 => './templates/projectbase.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    '48ad11f68be179e1830edf3ce56b82b0712baeff' => 
    array (
      0 => './templates/main.tpl',
      1 => 1411226985,
      2 => 'file',
    ),
    '8913f48352ffd7a7ba3cddb8c622ed2ffad6b0ab' => 
    array (
      0 => './templates/nav.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    '0a047b74efa928f7e1a01580b5e7beacd8ee9a4f' => 
    array (
      0 => './templates/refbadges.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    'a6ee9eb6bce9c20daaae03a86e639a1014044e2d' => 
    array (
      0 => './templates/title.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790747095401a793c115a3-93954506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401a794168a28_17387802',
  'variables' => 
  array (
    'currentprimarylocale' => 0,
    'version' => 0,
    'pagetitle' => 0,
    'baseurl' => 0,
    'stylesheet' => 0,
    'javascript' => 0,
    'googlejs' => 0,
    'snapshotformats' => 0,
    'format' => 0,
    'extension' => 0,
    'project' => 0,
    'debug' => 0,
    'loginenabled' => 0,
    'loggedinuser' => 0,
    'action' => 0,
    'supportedlocales' => 0,
    'requesturl' => 0,
    'requestvars' => 0,
    'var' => 0,
    'val' => 0,
    'locale' => 0,
    'currentlocale' => 0,
    'language' => 0,
    'homelink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401a794168a28_17387802')) {function content_5401a794168a28_17387802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_buglink')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/modifier.buglink.php';
if (!is_callable('smarty_function_cycle')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_localfiletype')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.localfiletype.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['currentprimarylocale']->value;?>
">
  <!-- gitphp web interface <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
, (C) 2006-2011 Christopher Han <xiphux@gmail.com> -->
  <head>
    <title>
    
<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 :: <?php echo $_smarty_tpl->tpl_vars['project']->value->GetProject();?>
<?php if ($_smarty_tpl->tpl_vars['actionlocal']->value){?>/<?php echo $_smarty_tpl->tpl_vars['actionlocal']->value;?>
<?php }?>

    </title>
    
  <link rel="alternate" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetProject(), ENT_QUOTES, 'UTF-8', true);?>
 log (Atom)" href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'atom'),$_smarty_tpl);?>
" type="application/atom+xml" />
  <link rel="alternate" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetProject(), ENT_QUOTES, 'UTF-8', true);?>
 log (RSS)" href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'rss'),$_smarty_tpl);?>
" type="application/rss+xml" />

    
  <?php if ($_smarty_tpl->tpl_vars['project']->value->GetCloneUrl()){?>
  <link rel="vcs-git" href="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetCloneUrl();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetDescription(), ENT_QUOTES, 'UTF-8', true);?>
" />
  <?php }?>

    <?php if (file_exists('css/gitphp.min.css')){?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/gitphp.min.css" type="text/css" />
    <?php }else{ ?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/gitphp.css" type="text/css" />
    <?php }?>
    <?php if (file_exists("css/".((string)$_smarty_tpl->tpl_vars['stylesheet']->value).".min.css")){?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['stylesheet']->value;?>
.min.css" type="text/css" />
    <?php }else{ ?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['stylesheet']->value;?>
.css" type="text/css" />
    <?php }?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/ext/jquery.qtip.min.css" type="text/css" />
    
    
    <?php if ($_smarty_tpl->tpl_vars['javascript']->value){?>
    <script type="text/javascript">
    var require = {
    	baseUrl: '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js',
	paths: {
		jquery: [
			<?php if ($_smarty_tpl->tpl_vars['googlejs']->value){?>
			'//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min',
			<?php }?>
			'ext/jquery-1.8.2.min'
		],
		d3: 'ext/d3.v2.min',
		qtip: 'ext/jquery.qtip.min',
		modernizr: 'ext/modernizr.custom'
	},
	config: {
		'modules/snapshotformats': {
			formats: {
				<?php  $_smarty_tpl->tpl_vars['extension'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extension']->_loop = false;
 $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['snapshotformats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['extension']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['extension']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['extension']->key => $_smarty_tpl->tpl_vars['extension']->value){
$_smarty_tpl->tpl_vars['extension']->_loop = true;
 $_smarty_tpl->tpl_vars['format']->value = $_smarty_tpl->tpl_vars['extension']->key;
 $_smarty_tpl->tpl_vars['extension']->iteration++;
 $_smarty_tpl->tpl_vars['extension']->last = $_smarty_tpl->tpl_vars['extension']->iteration === $_smarty_tpl->tpl_vars['extension']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['formats']['last'] = $_smarty_tpl->tpl_vars['extension']->last;
?>
				"<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
": "<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['formats']['last']){?>,<?php }?>
				<?php } ?>
			}
		},
		<?php if ($_smarty_tpl->tpl_vars['project']->value){?>
		'modules/getproject': {
			project: '<?php echo $_smarty_tpl->tpl_vars['project']->value->GetProject();?>
'
		},
		<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['debug']->value){?>
    'common': {
      debug: true
    },
    <?php }?>
		'modules/geturl': {
			baseurl: '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/'
		},
		'modules/resources': {
			resources: {
				Loading: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading…<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				LoadingBlameData: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading blame data…<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				Snapshot: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
snapshot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				NoMatchesFound: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No matches found for "%1"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        UsernameLabel: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
username:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        PasswordLabel: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
password:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        Login: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        AnErrorOccurredWhileLoggingIn: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while logging in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        LoginTitle: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        UsernameIsRequired: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username is required<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
        PasswordIsRequired: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'js')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password is required<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'js'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
			}
		}
	}
    };
    
      <?php if (file_exists('js/common.min.js')){?>
      require.paths.common = 'common.min';
      <?php }?>
      require.deps = ['common'];
    
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/ext/require.js"></script>
    <?php }?>
  </head>
  <body>
    <div class="page_header">
      <?php if ($_smarty_tpl->tpl_vars['loginenabled']->value){?>
      <div class="login">
      <?php if ($_smarty_tpl->tpl_vars['loggedinuser']->value){?>
        <a href="<?php echo smarty_function_geturl(array('action'=>'logout'),$_smarty_tpl);?>
" /><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['loggedinuser']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['loggedinuser']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
logout %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['loggedinuser']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
      <?php }elseif($_smarty_tpl->tpl_vars['action']->value=='login'){?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      <?php }else{ ?>
        <a href="<?php echo smarty_function_geturl(array('action'=>'login'),$_smarty_tpl);?>
" class="loginLink" /><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
      <?php }?>
      </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['supportedlocales']->value){?>
      <div class="lang_select">
        <form action="<?php echo $_smarty_tpl->tpl_vars['requesturl']->value;?>
" method="get" id="frmLangSelect">
         <div>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['requestvars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['var']->value!="l"){?>
	<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }?>
	<?php } ?>
	<label for="selLang"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
language:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
	<select name="l" id="selLang">
	  <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['supportedlocales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['locale']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
	    <option <?php if ($_smarty_tpl->tpl_vars['locale']->value==$_smarty_tpl->tpl_vars['currentlocale']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['language']->value){?><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
)<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
<?php }?></option>
	  <?php } ?>
	</select>
	<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
set<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="btnLangSet" />
         </div>
	</form>
      </div>
      <?php }?>
      
  <a href="<?php echo smarty_function_geturl(array(),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['homelink']->value){?><?php echo $_smarty_tpl->tpl_vars['homelink']->value;?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
projects<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></a> / 
  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->GetProject();?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['actionlocal']->value){?>
     / <?php echo $_smarty_tpl->tpl_vars['actionlocal']->value;?>

  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['enablesearch']->value){?>
    <form method="get" action="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'search','hash'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded">
      <div class="search">
        <?php if (!$_smarty_tpl->tpl_vars['router']->value->GetCleanUrl()){?>
	<input type="hidden" name="p" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetProject();?>
" />
        <input type="hidden" name="a" value="search" />
        <input type ="hidden" name="h" value="<?php if ($_smarty_tpl->tpl_vars['commit']->value){?><?php echo $_smarty_tpl->tpl_vars['commit']->value->GetHash();?>
<?php }else{ ?>HEAD<?php }?>" />
	<?php }?>
        <select name="st">
          <option <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=='commit'){?>selected="selected"<?php }?> value="commit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
          <option <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=='author'){?>selected="selected"<?php }?> value="author"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
          <option <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=='committer'){?>selected="selected"<?php }?> value="committer"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
committer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
          <?php if ($_smarty_tpl->tpl_vars['filesearch']->value){?>
            <option <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=='file'){?>selected="selected"<?php }?> value="file"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
          <?php }?>
        </select> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <input type="search" name="s" <?php if ($_smarty_tpl->tpl_vars['search']->value){?>value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"<?php }?> />
      </div>
    </form>
  <?php }?>

    </div>


 <div class="page_nav">
   <?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('logcommit'=>$_smarty_tpl->tpl_vars['commit']->value,'treecommit'=>$_smarty_tpl->tpl_vars['commit']->value,'current'=>'commit'), 0, '1790747095401a793c115a3-93954506');
content_541da0bb218a07_18910475($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "nav.tpl" */?>
   <br /><br />
 </div>

<?php if ($_smarty_tpl->tpl_vars['commit']->value->GetParent()){?>
 	<?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titlecommit'=>$_smarty_tpl->tpl_vars['commit']->value,'target'=>'commitdiff'), 0, '1790747095401a793c115a3-93954506');
content_541da0bb27ef04_17702099($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>
<?php }else{ ?>
	<?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titlecommit'=>$_smarty_tpl->tpl_vars['commit']->value,'titletree'=>$_smarty_tpl->tpl_vars['tree']->value,'target'=>'tree'), 0, '1790747095401a793c115a3-93954506');
content_541da0bb27ef04_17702099($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>
<?php }?>
 
 <div class="title_text">
   
   <table>
     <tr>
       <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
       <td><?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorName();?>
</td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td>
       <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%a, %d %b %Y %H:%M:%S %z");?>
</time>
       <?php $_smarty_tpl->tpl_vars['hourlocal'] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorLocalEpoch(),"%H"), null, 0);?>
       <?php if ($_smarty_tpl->tpl_vars['hourlocal']->value<6){?>
       (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorLocalEpoch(),"%Y-%m-%dT%H:%M:%S");?>
<?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorTimezone(true);?>
"><span class="latenight"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorLocalEpoch(),"%R");?>
</span> <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorTimezone();?>
</time>)
       <?php }else{ ?>
       (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorLocalEpoch(),"%Y-%m-%dT%H:%M:%S");?>
<?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorTimezone(true);?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorLocalEpoch(),"%R");?>
 <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorTimezone();?>
</time>)
       <?php }?>
       </td>
       <td></td>
     </tr>
     <tr>
       <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
committer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
       <td><?php echo $_smarty_tpl->tpl_vars['commit']->value->GetCommitterName();?>
</td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td> <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%a, %d %b %Y %H:%M:%S %z");?>
</time> (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterLocalEpoch(),"%Y-%m-%dT%H:%M:%S");?>
<?php echo $_smarty_tpl->tpl_vars['commit']->value->GetCommitterTimezone(true);?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterLocalEpoch(),"%R");?>
 <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetCommitterTimezone();?>
</time>)</td>
       <td></td>
     </tr>
     <tr>
       <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
       <td class="monospace"><?php echo $_smarty_tpl->tpl_vars['commit']->value->GetHash();?>
</td>
       <td></td>
     </tr>
     <tr>
       <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
       <td class="monospace"><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['tree']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
" class="list"><?php echo $_smarty_tpl->tpl_vars['tree']->value->GetHash();?>
</a></td>
       <td class="link"><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['tree']->value,'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'snapshot','hash'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
" class="snapshotTip"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
snapshot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
     </tr>
     <?php  $_smarty_tpl->tpl_vars['par'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['par']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetParents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['par']->key => $_smarty_tpl->tpl_vars['par']->value){
$_smarty_tpl->tpl_vars['par']->_loop = true;
?>
       <tr>
         <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
parent<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
	 <td class="monospace"><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['par']->value),$_smarty_tpl);?>
" class="list"><?php echo $_smarty_tpl->tpl_vars['par']->value->GetHash();?>
</a></td>
         <td class="link"><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['par']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'hashparent'=>$_smarty_tpl->tpl_vars['par']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commitdiff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
       </tr>
     <?php } ?>
   </table>
 </div>
 <div class="page_body">
   <?php $_smarty_tpl->tpl_vars['bugpattern'] = new Smarty_variable($_smarty_tpl->tpl_vars['project']->value->GetBugPattern(), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['bugurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['project']->value->GetBugUrl(), null, 0);?>
   <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetComment(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
     <?php if (strncasecmp(trim($_smarty_tpl->tpl_vars['line']->value),'Signed-off-by:',14)==0){?>
     <span class="signedOffBy"><?php echo smarty_modifier_buglink(htmlspecialchars($_smarty_tpl->tpl_vars['line']->value),$_smarty_tpl->tpl_vars['bugpattern']->value,$_smarty_tpl->tpl_vars['bugurl']->value);?>
</span>
     <?php }else{ ?>
     <?php echo smarty_modifier_buglink(htmlspecialchars($_smarty_tpl->tpl_vars['line']->value),$_smarty_tpl->tpl_vars['bugpattern']->value,$_smarty_tpl->tpl_vars['bugurl']->value);?>

     <?php }?>
     <br />
   <?php } ?>
 </div>
 <div class="list_head">
   <?php if ($_smarty_tpl->tpl_vars['treediff']->value->Count()>10){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:")); $_block_repeat=true; echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 file changed:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }?>
 </div>
 <table>
   
   <?php  $_smarty_tpl->tpl_vars['diffline'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diffline']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['treediff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diffline']->key => $_smarty_tpl->tpl_vars['diffline']->value){
$_smarty_tpl->tpl_vars['diffline']->_loop = true;
?>
     <tr class="<?php echo smarty_function_cycle(array('values'=>"light,dark"),$_smarty_tpl);?>
">
	 
       <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetStatus()=="A"){?>
         <td>
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
" class="list">
	     <?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetFromFile();?>

	   </a>
	 </td>
         <td>
	   <span class="newfile">
	     <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFileType(),'assign'=>'localtotype'),$_smarty_tpl);?>

	     [
	     <?php if ($_smarty_tpl->tpl_vars['diffline']->value->ToFileIsRegular()){?>
	       <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
	       <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localtotype']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localtotype']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
new %1 with mode %2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localtotype']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	     <?php }else{ ?>
	     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localtotype']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localtotype']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
new %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localtotype']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	     <?php }?>
	     ]
	   </span>
	 </td>
         <td class="link">
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	    | 
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile(),'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 </td>
       <?php }elseif($_smarty_tpl->tpl_vars['diffline']->value->GetStatus()=="D"){?>
         <?php $_smarty_tpl->tpl_vars['parent'] = new Smarty_variable($_smarty_tpl->tpl_vars['commit']->value->GetParent(), null, 0);?>
         <td>
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
" class="list">
	     <?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetFromFile();?>

	   </a>
	 </td>
         <td>
	   <span class="deletedfile">
	     <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFileType(),'assign'=>'localfromtype'),$_smarty_tpl);?>

	     [ <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
deleted %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 ]
	   </span>
	 </td>
         <td class="link">
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	    | 
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'history','hash'=>$_smarty_tpl->tpl_vars['parent']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
history<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	    | 
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile(),'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 </td>
       <?php }elseif($_smarty_tpl->tpl_vars['diffline']->value->GetStatus()=="M"||$_smarty_tpl->tpl_vars['diffline']->value->GetStatus()=="T"){?>
         <td>
           <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetToHash()!=$_smarty_tpl->tpl_vars['diffline']->value->GetFromHash()){?>
             <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blobdiff','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashparent'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
" class="list">
	       <?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetToFile();?>

	     </a>
           <?php }else{ ?>
             <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
" class="list">
	       <?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetToFile();?>

	     </a>
           <?php }?>
         </td>
         <td>
	   <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetFromMode()!=$_smarty_tpl->tpl_vars['diffline']->value->GetToMode()){?>
	     <span class="changedfile">
	       [
	       <?php if ($_smarty_tpl->tpl_vars['diffline']->value->FileTypeChanged()){?>
	         <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFileType(),'assign'=>'localfromtype'),$_smarty_tpl);?>

	         <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFileType(),'assign'=>'localtotype'),$_smarty_tpl);?>

	         <?php if ($_smarty_tpl->tpl_vars['diffline']->value->FileModeChanged()){?>
		   <?php if ($_smarty_tpl->tpl_vars['diffline']->value->FromFileIsRegular()&&$_smarty_tpl->tpl_vars['diffline']->value->ToFileIsRegular()){?>
		     <?php $_smarty_tpl->tpl_vars['frommode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetFromModeShort(), null, 0);?>
		     <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['frommode']->value,4=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['frommode']->value,4=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed from %1 to %2 mode: %3 -> %4<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['frommode']->value,4=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }elseif($_smarty_tpl->tpl_vars['diffline']->value->ToFileIsRegular()){?>
		     <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed from %1 to %2 mode: %3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }else{ ?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed from %1 to %2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }?>
		 <?php }else{ ?>
		   <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed from %1 to %2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['localfromtype']->value,2=>$_smarty_tpl->tpl_vars['localtotype']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		 <?php }?>
	       <?php }else{ ?>
	         <?php if ($_smarty_tpl->tpl_vars['diffline']->value->FileModeChanged()){?>
		   <?php if ($_smarty_tpl->tpl_vars['diffline']->value->FromFileIsRegular()&&$_smarty_tpl->tpl_vars['diffline']->value->ToFileIsRegular()){?>
		     <?php $_smarty_tpl->tpl_vars['frommode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetFromModeShort(), null, 0);?>
		     <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['frommode']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['frommode']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed mode: %1 -> %2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['frommode']->value,2=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }elseif($_smarty_tpl->tpl_vars['diffline']->value->ToFileIsRegular()){?>
		     <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed mode: %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }else{ ?>
		     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <?php }?>
		 <?php }else{ ?>
		   <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
changed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		 <?php }?>
	       <?php }?>
	       ]
	     </span>
	   <?php }?>
	 </td>
         <td class="link">
           <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	   <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetToHash()!=$_smarty_tpl->tpl_vars['diffline']->value->GetFromHash()){?>
	     | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blobdiff','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashparent'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
diff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	   <?php }?>
	     | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'history','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
history<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
             | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile(),'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 </td>
       <?php }elseif($_smarty_tpl->tpl_vars['diffline']->value->GetStatus()=="R"){?>
         <td>
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
" class="list">
	     <?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetToFile();?>
</a>
	 </td>
         <td>
	   <span class="movedfile">
	     <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'fromfilelink', null); ob_start(); ?>
	     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromFile()),$_smarty_tpl);?>
" class="list"><?php echo $_smarty_tpl->tpl_vars['diffline']->value->GetFromFile();?>
</a>
	     <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	     [
	     <?php $_smarty_tpl->tpl_vars['similarity'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetSimilarity(), null, 0);?>
	     <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetFromMode()!=$_smarty_tpl->tpl_vars['diffline']->value->GetToMode()){?>
	       <?php $_smarty_tpl->tpl_vars['tomode'] = new Smarty_variable($_smarty_tpl->tpl_vars['diffline']->value->GetToModeShort(), null, 0);?>
	       <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value)); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
moved from %1 with %2%% similarity, mode: %3<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value,3=>$_smarty_tpl->tpl_vars['tomode']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	     <?php }else{ ?>
	       <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value)); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
moved from %1 with %2%% similarity<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fromfilelink']->value,2=>$_smarty_tpl->tpl_vars['similarity']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	     <?php }?>
	     ]
	   </span>
	 </td>
         <td class="link">
	   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	   <?php if ($_smarty_tpl->tpl_vars['diffline']->value->GetToHash()!=$_smarty_tpl->tpl_vars['diffline']->value->GetFromHash()){?>
	     | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blobdiff','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'hashparent'=>$_smarty_tpl->tpl_vars['diffline']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile()),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
diff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	   <?php }?>
	    | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToBlob(),'file'=>$_smarty_tpl->tpl_vars['diffline']->value->GetToFile(),'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 </td>
       <?php }?>

     </tr>
   <?php } ?>
 </table>


    <div class="page_footer">
      
  <div class="page_footer_text">
  <?php if ($_smarty_tpl->tpl_vars['project']->value->GetWebsite()){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetWebsite();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetDescription(), ENT_QUOTES, 'UTF-8', true);?>
</a>
  <?php }else{ ?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetDescription(), ENT_QUOTES, 'UTF-8', true);?>

  <?php }?>
  </div>
  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'rss'),$_smarty_tpl);?>
" class="rss_logo"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
RSS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'atom'),$_smarty_tpl);?>
" class="rss_logo"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Atom<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>

    </div>
    <div class="attr_footer">
    	<a href="http://www.gitphp.org/" target="_blank">BoxonGit, based on GitPHP by Chris Han</a>
    </div>
  </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:43:55
         compiled from "./templates/nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541da0bb218a07_18910475')) {function content_541da0bb218a07_18910475($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
?>

   <?php if ($_smarty_tpl->tpl_vars['current']->value=='summary'){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
summary<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
summary<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | 
   <?php if ($_smarty_tpl->tpl_vars['current']->value=='shortlog'||!$_smarty_tpl->tpl_vars['commit']->value){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['logcommit']->value,'mark'=>$_smarty_tpl->tpl_vars['logmark']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | 
   <?php if ($_smarty_tpl->tpl_vars['current']->value=='log'||!$_smarty_tpl->tpl_vars['commit']->value){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'log','hash'=>$_smarty_tpl->tpl_vars['logcommit']->value,'mark'=>$_smarty_tpl->tpl_vars['logmark']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | 
   <?php if ($_smarty_tpl->tpl_vars['current']->value=='commit'||!$_smarty_tpl->tpl_vars['commit']->value){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | 
   <?php if ($_smarty_tpl->tpl_vars['current']->value=='commitdiff'||!$_smarty_tpl->tpl_vars['commit']->value){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commitdiff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commitdiff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | 
   <?php if ($_smarty_tpl->tpl_vars['current']->value=='tree'||!$_smarty_tpl->tpl_vars['commit']->value){?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }else{ ?>
     <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hashbase'=>$_smarty_tpl->tpl_vars['treecommit']->value,'hash'=>$_smarty_tpl->tpl_vars['tree']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:43:55
         compiled from "./templates/title.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541da0bb27ef04_17702099')) {function content_541da0bb27ef04_17702099($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
?>

<div class="title">
	<?php if ($_smarty_tpl->tpl_vars['titlecommit']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['target']->value=='commitdiff'){?>
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['titlecommit']->value),$_smarty_tpl);?>
" class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['titlecommit']->value->GetTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }elseif($_smarty_tpl->tpl_vars['target']->value=='tree'){?>
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['titletree']->value,'hashbase'=>$_smarty_tpl->tpl_vars['titlecommit']->value),$_smarty_tpl);?>
" class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['titlecommit']->value->GetTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }else{ ?>
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['titlecommit']->value),$_smarty_tpl);?>
" class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['titlecommit']->value->GetTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }?>
		<?php /*  Call merged included template "refbadges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('refbadges.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('commit'=>$_smarty_tpl->tpl_vars['titlecommit']->value), 0, '1790747095401a793c115a3-93954506');
content_541da0bb2aa4b9_15035757($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "refbadges.tpl" */?>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['target']->value=='summary'){?>
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value),$_smarty_tpl);?>
" class="title">&nbsp;</a>
		<?php }elseif($_smarty_tpl->tpl_vars['target']->value=='shortlog'){?>
			<?php if ($_smarty_tpl->tpl_vars['disablelink']->value){?>
			  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
			  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog'),$_smarty_tpl);?>
" class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['target']->value=='tags'){?>
			<?php if ($_smarty_tpl->tpl_vars['disablelink']->value){?>
			  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tags<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
			  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tags'),$_smarty_tpl);?>
" class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tags<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['target']->value=='heads'){?>
			<?php if ($_smarty_tpl->tpl_vars['disablelink']->value){?>
			  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
heads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
			  <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'heads'),$_smarty_tpl);?>
" class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
heads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		<?php }else{ ?>
			&nbsp;
		<?php }?>
	<?php }?>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:43:55
         compiled from "./templates/refbadges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541da0bb2aa4b9_15035757')) {function content_541da0bb2aa4b9_15035757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
?>

<span class="refs">
	<?php  $_smarty_tpl->tpl_vars['commithead'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['commithead']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetHeads(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['commithead']->key => $_smarty_tpl->tpl_vars['commithead']->value){
$_smarty_tpl->tpl_vars['commithead']->_loop = true;
?>
		<span class="head">
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['commithead']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['commithead']->value->GetName();?>
</a>
		</span>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['committag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['committag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetTags(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['committag']->key => $_smarty_tpl->tpl_vars['committag']->value){
$_smarty_tpl->tpl_vars['committag']->_loop = true;
?>
		<span class="tag">
			<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tag','tag'=>$_smarty_tpl->tpl_vars['committag']->value),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['committag']->value->LightTag()){?>class="tagTip"<?php }?>><?php echo $_smarty_tpl->tpl_vars['committag']->value->GetName();?>
</a>
		</span>
	<?php } ?>
</span>
<?php }} ?>