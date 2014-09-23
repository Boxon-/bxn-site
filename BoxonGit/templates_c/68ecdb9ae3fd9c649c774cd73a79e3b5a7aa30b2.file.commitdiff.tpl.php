<?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:46
         compiled from "./templates/commitdiff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7633241035401a79aec7233-90137260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ecdb9ae3fd9c649c774cd73a79e3b5a7aa30b2' => 
    array (
      0 => './templates/commitdiff.tpl',
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
      1 => 1388000248,
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
    '5580ac74bd18ec9d8230118bd5155125aa04af29' => 
    array (
      0 => './templates/filediffsidebyside.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    '17c57da193cc3cd283d1b64b6f25294d391b5bd6' => 
    array (
      0 => './templates/filediff.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7633241035401a79aec7233-90137260',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401a79b338744_27111809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5401a79b338744_27111809')) {function content_5401a79b338744_27111809($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/block.t.php';
if (!is_callable('smarty_modifier_buglink')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/modifier.buglink.php';
if (!is_callable('smarty_function_localfiletype')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.localfiletype.php';
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
    
require.deps = ['commitdiff'];
<?php if (file_exists('js/commitdiff.min.js')){?>
require.paths.commitdiff = "commitdiff.min";
<?php }?>

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
   <?php if ($_smarty_tpl->tpl_vars['commit']->value){?>
   <?php $_smarty_tpl->tpl_vars['tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['commit']->value->GetTree(), null, 0);?>
   <?php }?>
   <?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('current'=>'commitdiff','logcommit'=>$_smarty_tpl->tpl_vars['commit']->value,'treecommit'=>$_smarty_tpl->tpl_vars['commit']->value), 0, '7633241035401a79aec7233-90137260');
content_5401a79b0d8ad4_48068433($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "nav.tpl" */?>
   <br />
   <?php if ($_smarty_tpl->tpl_vars['sidebyside']->value){?>
   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'hashparent'=>$_smarty_tpl->tpl_vars['hashparent']->value,'diffmode'=>'unified'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
unified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }else{ ?>
   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'hashparent'=>$_smarty_tpl->tpl_vars['hashparent']->value,'diffmode'=>'sidebyside'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
side by side<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
   <?php }?>
   | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'hashparent'=>$_smarty_tpl->tpl_vars['hashparent']->value,'output'=>'plain'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
plain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
 </div>

 <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titlecommit'=>$_smarty_tpl->tpl_vars['commit']->value), 0, '7633241035401a79aec7233-90137260');
content_5401a79b153d84_55098346($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>
 
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
   <br />

   <?php if ($_smarty_tpl->tpl_vars['sidebyside']->value&&($_smarty_tpl->tpl_vars['treediff']->value->Count()>1)){?>
    <div class="commitDiffSBS">

     <div class="SBSTOC">
       <ul>
       <li class="listcount">
       <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:")); $_block_repeat=true; echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 file changed:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),1=>$_smarty_tpl->tpl_vars['treediff']->value->Count(),'plural'=>"%1 files changed:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="#" class="showAll"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(show all)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
       <?php  $_smarty_tpl->tpl_vars['filediff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filediff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['treediff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filediff']->key => $_smarty_tpl->tpl_vars['filediff']->value){
$_smarty_tpl->tpl_vars['filediff']->_loop = true;
?>
       <li>
       <a href="#<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetFromHash();?>
_<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToHash();?>
" class="SBSTOCItem">
       <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='A'){?>
         <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetToFile()){?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToFile();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToHash();?>
<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(new)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       <?php }elseif($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='D'){?>
         <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetFromFile()){?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetFromFile();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToFile();?>
<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(deleted)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       <?php }elseif($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='M'){?>
         <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetFromFile()){?>
	   <?php $_smarty_tpl->tpl_vars['fromfilename'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetFromFile(), null, 0);?>
	 <?php }else{ ?>
	   <?php $_smarty_tpl->tpl_vars['fromfilename'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetFromHash(), null, 0);?>
	 <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetToFile()){?>
	   <?php $_smarty_tpl->tpl_vars['tofilename'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetToFile(), null, 0);?>
	 <?php }else{ ?>
	   <?php $_smarty_tpl->tpl_vars['tofilename'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetToHash(), null, 0);?>
	 <?php }?>
	 <?php echo $_smarty_tpl->tpl_vars['fromfilename']->value;?>
<?php if ($_smarty_tpl->tpl_vars['fromfilename']->value!=$_smarty_tpl->tpl_vars['tofilename']->value){?> -&gt; <?php echo $_smarty_tpl->tpl_vars['tofilename']->value;?>
<?php }?>
       <?php }?>
       </a>
       </li>
       <?php } ?>
       </ul>
     </div>

     <div class="SBSContent">
   <?php }?>

   
   <?php  $_smarty_tpl->tpl_vars['filediff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filediff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['treediff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filediff']->key => $_smarty_tpl->tpl_vars['filediff']->value){
$_smarty_tpl->tpl_vars['filediff']->_loop = true;
?>
     <div class="diffBlob" id="<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetFromHash();?>
_<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToHash();?>
">
     <div class="diff_info">
     <?php if (($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='D')||($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='M')){?>
       <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromFileType()),$_smarty_tpl);?>
:<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromFile()),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetFromFile()){?>a/<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetFromFile();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetFromHash();?>
<?php }?></a>
       <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='D'){?>
         <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(deleted)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       <?php }?>
     <?php }?>

     <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='M'){?>
       -&gt;
     <?php }?>

     <?php if (($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='A')||($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='M')){?>
       <?php echo smarty_function_localfiletype(array('type'=>$_smarty_tpl->tpl_vars['filediff']->value->GetToFileType()),$_smarty_tpl);?>
:<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['filediff']->value->GetToBlob(),'hashbase'=>$_smarty_tpl->tpl_vars['commit']->value,'file'=>$_smarty_tpl->tpl_vars['filediff']->value->GetToFile()),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetToFile()){?>b/<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToFile();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetToHash();?>
<?php }?></a>

       <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='A'){?>
         <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(new)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

       <?php }?>
     <?php }?>
     </div>
     <?php if ($_smarty_tpl->tpl_vars['filediff']->value->IsBinary()){?>
<pre>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromLabel(),2=>$_smarty_tpl->tpl_vars['filediff']->value->GetToLabel())); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromLabel(),2=>$_smarty_tpl->tpl_vars['filediff']->value->GetToLabel()), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Binary files %1 and %2 differ<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['filediff']->value->GetFromLabel(),2=>$_smarty_tpl->tpl_vars['filediff']->value->GetToLabel()), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</pre>
     <?php }else{ ?>
       <?php if ($_smarty_tpl->tpl_vars['sidebyside']->value){?>
          <?php /*  Call merged included template "filediffsidebyside.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('filediffsidebyside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('diffsplit'=>$_smarty_tpl->tpl_vars['filediff']->value->GetDiffSplit()), 0, '7633241035401a79aec7233-90137260');
content_5401a79b2a8206_38069797($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "filediffsidebyside.tpl" */?>
       <?php }else{ ?>
          <?php /*  Call merged included template "filediff.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('filediff.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('diff'=>$_smarty_tpl->tpl_vars['filediff']->value->GetDiff('',true,true)), 0, '7633241035401a79aec7233-90137260');
content_5401a79b2eacb3_74086204($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "filediff.tpl" */?>
       <?php }?>
     <?php }?>
     </div>
   <?php } ?>

   <?php if ($_smarty_tpl->tpl_vars['sidebyside']->value&&($_smarty_tpl->tpl_vars['treediff']->value->Count()>1)){?>
     </div>
     <div class="SBSFooter"></div>

    </div>
   <?php }?>


 </div>


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
    	<a href="http://www.gitphp.org/" target="_blank">GitPHP by Chris Han</a>
    </div>
  </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:47
         compiled from "./templates/nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5401a79b0d8ad4_48068433')) {function content_5401a79b0d8ad4_48068433($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/block.t.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.geturl.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:47
         compiled from "./templates/title.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5401a79b153d84_55098346')) {function content_5401a79b153d84_55098346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/block.t.php';
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('refbadges.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('commit'=>$_smarty_tpl->tpl_vars['titlecommit']->value), 0, '7633241035401a79aec7233-90137260');
content_5401a79b178bb1_69220598($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:47
         compiled from "./templates/refbadges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5401a79b178bb1_69220598')) {function content_5401a79b178bb1_69220598($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/gitphp-0.2.9.1/include/smartyplugins/function.geturl.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:47
         compiled from "./templates/filediffsidebyside.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5401a79b2a8206_38069797')) {function content_5401a79b2a8206_38069797($_smarty_tpl) {?>
<table class="diffTable">
  <?php if ($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='D'){?>
    <?php $_smarty_tpl->tpl_vars['delblob'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetFromBlob(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['blobline'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blobline']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delblob']->value->GetData(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blobline']->key => $_smarty_tpl->tpl_vars['blobline']->value){
$_smarty_tpl->tpl_vars['blobline']->_loop = true;
?>
      <tr class="diff-deleted">
        <td class="diff-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blobline']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
	<td>&nbsp;</td>
      </tr>
    <?php } ?>
  <?php }elseif($_smarty_tpl->tpl_vars['filediff']->value->GetStatus()=='A'){?>
    <?php $_smarty_tpl->tpl_vars['newblob'] = new Smarty_variable($_smarty_tpl->tpl_vars['filediff']->value->GetToBlob(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['blobline'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blobline']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newblob']->value->GetData(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blobline']->key => $_smarty_tpl->tpl_vars['blobline']->value){
$_smarty_tpl->tpl_vars['blobline']->_loop = true;
?>
      <tr class="diff-added">
        <td class="diff-left">&nbsp;</td>
	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blobline']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
      </tr>
    <?php } ?>
  <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['lineinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lineinfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diffsplit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lineinfo']->key => $_smarty_tpl->tpl_vars['lineinfo']->value){
$_smarty_tpl->tpl_vars['lineinfo']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['lineinfo']->value[0]=='added'){?>
      <tr class="diff-added">
      <?php }elseif($_smarty_tpl->tpl_vars['lineinfo']->value[0]=='deleted'){?>
      <tr class="diff-deleted">
      <?php }elseif($_smarty_tpl->tpl_vars['lineinfo']->value[0]=='modified'){?>
      <tr class="diff-modified">
      <?php }else{ ?>
      <tr>
      <?php }?>
        <td class="diff-left"><?php if ($_smarty_tpl->tpl_vars['lineinfo']->value[1]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lineinfo']->value[1], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&nbsp;<?php }?></td>
        <td><?php if ($_smarty_tpl->tpl_vars['lineinfo']->value[2]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lineinfo']->value[2], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&nbsp;<?php }?></td>
      </tr>
    <?php } ?>
  <?php }?>
</table>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-08-30 10:29:47
         compiled from "./templates/filediff.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5401a79b2eacb3_74086204')) {function content_5401a79b2eacb3_74086204($_smarty_tpl) {?>
<pre>
<?php  $_smarty_tpl->tpl_vars['diffline'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diffline']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diffline']->key => $_smarty_tpl->tpl_vars['diffline']->value){
$_smarty_tpl->tpl_vars['diffline']->_loop = true;
?>
<?php if (substr($_smarty_tpl->tpl_vars['diffline']->value,0,1)=="+"){?>
<span class="diffplus"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diffline']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }elseif(substr($_smarty_tpl->tpl_vars['diffline']->value,0,1)=="-"){?>
<span class="diffminus"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diffline']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }elseif(substr($_smarty_tpl->tpl_vars['diffline']->value,0,1)=="@"){?>
<span class="diffat"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diffline']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diffline']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }?>
<?php } ?>
</pre>
<?php }} ?>