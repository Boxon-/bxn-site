<?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21472734625401a6034f9543-31151804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23543f7835f9b20117f9ed6872785a6a1a503d73' => 
    array (
      0 => './templates/project.tpl',
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
    'b3844f7c48d056e029aa8fb3ed258982af6581ae' => 
    array (
      0 => './templates/shortloglist.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    '7b9473fd3b3817ff250f7774051d7ac75e5f69d5' => 
    array (
      0 => './templates/taglist.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
    'dc79ad833b034e755ce1e2e0e8c3c903b9abebd6' => 
    array (
      0 => './templates/headlist.tpl',
      1 => 1388000248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21472734625401a6034f9543-31151804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5401a603911ec6_80364612',
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
<?php if ($_valid && !is_callable('content_5401a603911ec6_80364612')) {function content_5401a603911ec6_80364612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/modifier.date_format.php';
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('commit'=>$_smarty_tpl->tpl_vars['head']->value,'current'=>'summary'), 0, '21472734625401a6034f9543-31151804');
content_541d9f64172a52_91989745($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "nav.tpl" */?>
 <br /><br />
 </div>

 <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21472734625401a6034f9543-31151804');
content_541d9f641ce597_92891216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>

 
 <table>
   <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetDescription(), ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
   <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
owner<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->GetOwner(), ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
   <?php if ($_smarty_tpl->tpl_vars['head']->value){?>
   <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
last change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['head']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['head']->value->GetCommitterEpoch(),"%a, %d %b %Y %H:%M:%S %z");?>
</time></td></tr>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['project']->value->GetCloneUrl()){?>
     <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
clone url<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetCloneUrl();?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['project']->value->GetCloneUrl();?>
</a></td></tr>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['project']->value->GetPushUrl()){?>
     <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
push url<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetPushUrl();?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['project']->value->GetPushUrl();?>
</a></td></tr>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['project']->value->GetWebsite()){?>
     <tr><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
website<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['project']->value->GetWebsite();?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['project']->value->GetWebsite();?>
</a></td></tr>
   <?php }?>
 </table>

 <?php if (!$_smarty_tpl->tpl_vars['head']->value){?>
   <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('target'=>'shortlog','disablelink'=>true), 0, '21472734625401a6034f9543-31151804');
content_541d9f641ce597_92891216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>
 <?php }else{ ?>
   <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('target'=>'shortlog'), 0, '21472734625401a6034f9543-31151804');
content_541d9f641ce597_92891216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>
 <?php }?>

 <?php /*  Call merged included template "shortloglist.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('shortloglist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>'summary'), 0, '21472734625401a6034f9543-31151804');
content_541d9f642878e6_54595761($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "shortloglist.tpl" */?>
 
 <?php if ($_smarty_tpl->tpl_vars['taglist']->value){?>
  
  <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('target'=>'tags'), 0, '21472734625401a6034f9543-31151804');
content_541d9f641ce597_92891216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>

  <?php /*  Call merged included template "taglist.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('taglist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>'summary'), 0, '21472734625401a6034f9543-31151804');
content_541d9f64343de8_59036285($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "taglist.tpl" */?>
   
 <?php }?>

 <?php if ($_smarty_tpl->tpl_vars['headlist']->value){?>

  <?php /*  Call merged included template "title.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('target'=>'heads'), 0, '21472734625401a6034f9543-31151804');
content_541d9f641ce597_92891216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "title.tpl" */?>

  <?php /*  Call merged included template "headlist.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('headlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>'summary'), 0, '21472734625401a6034f9543-31151804');
content_541d9f643e3591_22595145($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "headlist.tpl" */?>

 <?php }?>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f64172a52_91989745')) {function content_541d9f64172a52_91989745($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/title.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f641ce597_92891216')) {function content_541d9f641ce597_92891216($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('refbadges.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('commit'=>$_smarty_tpl->tpl_vars['titlecommit']->value), 0, '21472734625401a6034f9543-31151804');
content_541d9f641f2336_85226854($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/refbadges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f641f2336_85226854')) {function content_541d9f641f2336_85226854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/shortloglist.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f642878e6_54595761')) {function content_541d9f642878e6_54595761($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_agestring')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.agestring.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
?>

 <table>
   <?php  $_smarty_tpl->tpl_vars['rev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['revlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rev']->key => $_smarty_tpl->tpl_vars['rev']->value){
$_smarty_tpl->tpl_vars['rev']->_loop = true;
?>
     <tr class="<?php echo smarty_function_cycle(array('values'=>"light,dark"),$_smarty_tpl);?>
">
       <td class="monospace"><?php echo $_smarty_tpl->tpl_vars['rev']->value->GetHash(true);?>
</td>
       <td title="<?php if ($_smarty_tpl->tpl_vars['rev']->value->GetAge()>60*60*24*7*2){?><?php echo smarty_function_agestring(array('age'=>$_smarty_tpl->tpl_vars['rev']->value->GetAge()),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rev']->value->GetCommitterEpoch(),"%Y-%m-%d");?>
<?php }?>"><em><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rev']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php if ($_smarty_tpl->tpl_vars['rev']->value->GetAge()>60*60*24*7*2){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rev']->value->GetCommitterEpoch(),"%Y-%m-%d");?>
<?php }else{ ?><?php echo smarty_function_agestring(array('age'=>$_smarty_tpl->tpl_vars['rev']->value->GetAge()),$_smarty_tpl);?>
<?php }?></time></em></td>
       <td><em><?php echo $_smarty_tpl->tpl_vars['rev']->value->GetAuthorName();?>
</em></td>
       <td>
         <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
" class="list commitTip" <?php if (strlen($_smarty_tpl->tpl_vars['rev']->value->GetTitle())>50){?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value->GetTitle(), ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
         <?php if ($_smarty_tpl->tpl_vars['rev']->value->IsMergeCommit()){?><span class="merge_title"><?php }else{ ?><span class="commit_title"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value->GetTitle(50), ENT_QUOTES, 'UTF-8', true);?>
</span>
         </a>
	 <?php /*  Call merged included template "refbadges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('refbadges.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('commit'=>$_smarty_tpl->tpl_vars['rev']->value), 0, '21472734625401a6034f9543-31151804');
content_541d9f641f2336_85226854($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "refbadges.tpl" */?>
       </td>
       <td class="link">
         <?php $_smarty_tpl->tpl_vars['revtree'] = new Smarty_variable($_smarty_tpl->tpl_vars['rev']->value->GetTree(), null, 0);?>
         <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commitdiff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hash'=>$_smarty_tpl->tpl_vars['revtree']->value,'hashbase'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'snapshot','hash'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
" class="snapshotTip"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
snapshot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	 <?php if ($_smarty_tpl->tpl_vars['source']->value=='shortlog'){?>
	  | 
	  <?php if ($_smarty_tpl->tpl_vars['mark']->value){?>
	    <?php if ($_smarty_tpl->tpl_vars['mark']->value->GetHash()==$_smarty_tpl->tpl_vars['rev']->value->GetHash()){?>
	      <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
deselect<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	    <?php }else{ ?>
	      <?php if ($_smarty_tpl->tpl_vars['mark']->value->GetCommitterEpoch()>$_smarty_tpl->tpl_vars['rev']->value->GetCommitterEpoch()){?>
	        <?php $_smarty_tpl->tpl_vars['markbase'] = new Smarty_variable($_smarty_tpl->tpl_vars['mark']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['markparent'] = new Smarty_variable($_smarty_tpl->tpl_vars['rev']->value, null, 0);?>
	      <?php }else{ ?>
	        <?php $_smarty_tpl->tpl_vars['markbase'] = new Smarty_variable($_smarty_tpl->tpl_vars['rev']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['markparent'] = new Smarty_variable($_smarty_tpl->tpl_vars['mark']->value, null, 0);?>
	      <?php }?>
	      <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['markbase']->value,'hashparent'=>$_smarty_tpl->tpl_vars['markparent']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
diff with selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	    <?php }?>
	  <?php }else{ ?>
	    <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'mark'=>$_smarty_tpl->tpl_vars['rev']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
select for diff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	  <?php }?>
	<?php }?>
       </td>
     </tr>
   <?php }
if (!$_smarty_tpl->tpl_vars['rev']->_loop) {
?>
     <tr><td><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No commits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></td></tr>
   <?php } ?>

   <?php if ($_smarty_tpl->tpl_vars['hasmorerevs']->value){?>
     <tr>
     <?php if ($_smarty_tpl->tpl_vars['source']->value=='summary'){?>
       <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog'),$_smarty_tpl);?>
">&hellip;</a></td><td></td><td></td><td></td><td></td>
     <?php }elseif($_smarty_tpl->tpl_vars['source']->value=='shortlog'){?>
       <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['commit']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1,'mark'=>$_smarty_tpl->tpl_vars['mark']->value),$_smarty_tpl);?>
" title="Alt-n"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td><td></td><td></td><td></td><td></td>
     <?php }?>
     </tr>
   <?php }?>
 </table>

<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/taglist.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f64343de8_59036285')) {function content_541d9f64343de8_59036285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_agestring')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.agestring.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
?>

 <table class="tagTable">
   <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
     <tr class="<?php echo smarty_function_cycle(array('name'=>'tags','values'=>"light,dark"),$_smarty_tpl);?>
">
	   <?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['tag']->value->GetObject(), null, 0);?>
	   <?php $_smarty_tpl->tpl_vars['tagcommit'] = new Smarty_variable($_smarty_tpl->tpl_vars['tag']->value->GetCommit(), null, 0);?>
	   <?php $_smarty_tpl->tpl_vars['objtype'] = new Smarty_variable($_smarty_tpl->tpl_vars['tag']->value->GetType(), null, 0);?>
           <td><em><?php if ($_smarty_tpl->tpl_vars['tagcommit']->value){?><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tagcommit']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_function_agestring(array('age'=>$_smarty_tpl->tpl_vars['tagcommit']->value->GetAge()),$_smarty_tpl);?>
</time><?php }else{ ?><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tag']->value->GetTaggerEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_function_agestring(array('age'=>$_smarty_tpl->tpl_vars['tag']->value->GetAge()),$_smarty_tpl);?>
</time><?php }?></em></td>
           <td>
	   <?php if ($_smarty_tpl->tpl_vars['objtype']->value=='commit'){?>
		   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['object']->value),$_smarty_tpl);?>
" class="list"><strong><?php echo $_smarty_tpl->tpl_vars['tag']->value->GetName();?>
</strong></a>
	   <?php }elseif($_smarty_tpl->tpl_vars['objtype']->value=='tag'){?>
		   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tag','tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
" class="list"><strong><?php echo $_smarty_tpl->tpl_vars['tag']->value->GetName();?>
</strong></a>
	   <?php }elseif($_smarty_tpl->tpl_vars['objtype']->value=='blob'){?>
		   <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['object']->value),$_smarty_tpl);?>
" class="list"><strong><?php echo $_smarty_tpl->tpl_vars['tag']->value->GetName();?>
</strong></a>
	   <?php }?>
	   </td>
           <td>
	     <?php $_smarty_tpl->tpl_vars['comment'] = new Smarty_variable($_smarty_tpl->tpl_vars['tag']->value->GetComment(), null, 0);?>
             <?php if (count($_smarty_tpl->tpl_vars['comment']->value)>0){?>
               <a class="list <?php if (!$_smarty_tpl->tpl_vars['tag']->value->LightTag()){?>tagTip<?php }?>" href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tag','tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value[0];?>
</a>
             <?php }?>
           </td>
           <td class="link">
             <?php if (!$_smarty_tpl->tpl_vars['tag']->value->LightTag()){?>
   	       <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tag','tag'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | 
             <?php }?>
	     <?php if ($_smarty_tpl->tpl_vars['objtype']->value=='blob'){?>
		<a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'blob','hash'=>$_smarty_tpl->tpl_vars['object']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
blob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	     <?php }else{ ?>
             <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commit','hash'=>$_smarty_tpl->tpl_vars['tagcommit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
commit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	      | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['tagcommit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'log','hash'=>$_smarty_tpl->tpl_vars['tagcommit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'snapshot','hash'=>$_smarty_tpl->tpl_vars['tagcommit']->value),$_smarty_tpl);?>
" class="snapshotTip"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
snapshot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	      <?php }?>
           </td>
       </tr>
     <?php } ?>
     <?php if ($_smarty_tpl->tpl_vars['hasmoretags']->value){?>
       <tr>
         <?php if ($_smarty_tpl->tpl_vars['source']->value=='summary'){?>
           <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tags'),$_smarty_tpl);?>
">&hellip;</a></td>
	   <td></td><td></td><td></td>
	 <?php }elseif($_smarty_tpl->tpl_vars['source']->value=='tags'){?>
	   <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tags','page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
" title="Alt-n"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
	   <td></td><td></td><td></td>
	 <?php }?>
       </tr>
     <?php }?>
   </table>
<?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2014-09-20 15:38:12
         compiled from "./templates/headlist.tpl" */ ?>
<?php if ($_valid && !is_callable('content_541d9f643e3591_22595145')) {function content_541d9f643e3591_22595145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/lib/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_agestring')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.agestring.php';
if (!is_callable('smarty_function_geturl')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/function.geturl.php';
if (!is_callable('smarty_block_t')) include '/home/etienne/Documents/TAF/www/boxon/BoxonGit/include/smartyplugins/block.t.php';
?>

 <table>
   
   <?php  $_smarty_tpl->tpl_vars['head'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['head']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['head']->key => $_smarty_tpl->tpl_vars['head']->value){
$_smarty_tpl->tpl_vars['head']->_loop = true;
?>
       <?php $_smarty_tpl->tpl_vars['headcommit'] = new Smarty_variable($_smarty_tpl->tpl_vars['head']->value->GetCommit(), null, 0);?>
       <tr class="<?php echo smarty_function_cycle(array('values'=>"light,dark"),$_smarty_tpl);?>
">
         <td><em><time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['headcommit']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_function_agestring(array('age'=>$_smarty_tpl->tpl_vars['headcommit']->value->GetAge()),$_smarty_tpl);?>
</time></em></td>
         <td><a href="<?php if ($_smarty_tpl->tpl_vars['router']->value->GetCleanUrl()){?><?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'heads','hash'=>$_smarty_tpl->tpl_vars['head']->value->GetName()),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['head']->value),$_smarty_tpl);?>
<?php }?>" class="list"><strong><?php echo $_smarty_tpl->tpl_vars['head']->value->GetName();?>
</strong></a></td>
         <td class="link"><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'shortlog','hash'=>$_smarty_tpl->tpl_vars['head']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
shortlog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'log','hash'=>$_smarty_tpl->tpl_vars['head']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'tree','hashbase'=>$_smarty_tpl->tpl_vars['headcommit']->value),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
       </tr>
   <?php } ?>
   <?php if ($_smarty_tpl->tpl_vars['hasmoreheads']->value){?>
       <tr>
       <?php if ($_smarty_tpl->tpl_vars['source']->value=='summary'){?>
         <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'heads'),$_smarty_tpl);?>
">&hellip;</a></td>
	 <td></td><td></td>
       <?php }elseif($_smarty_tpl->tpl_vars['source']->value=='heads'){?>
         <td><a href="<?php echo smarty_function_geturl(array('project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'heads','page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
" title="Alt-n"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
	 <td></td><td></td>
       <?php }?>
       </tr>
   <?php }?>
 </table>

<?php }} ?>