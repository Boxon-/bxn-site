<!-- HOME -->
<div id="header"><!--marge superieure--><?php include($templatePath.'/header.php');?></div>
<div id="main">
	<div id="banniere"><!--Templates/banniere.html--><?php include($templatePath.'/banniere.html')?></div>
	</br>
	<div id="menuH"><!--Templates/menuH.html--><?php include($templatePath.'/menuH.html')?></div>
	</br>
	<div id="Page">
		<?php include($page->getPathFromServer())?>
	</div>
</div>
<div id="footer"><!--marge inferieure--><?php include($templatePath.'/footer.php');?></div>
<script>
// script de la page 
</script>
<!-- /HOME -->
