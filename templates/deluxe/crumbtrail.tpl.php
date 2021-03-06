<?php
/*
  LightSpeed Web Store
 
  NOTICE OF LICENSE
 
  This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@lightspeedretail.com <mailto:support@lightspeedretail.com>
 * so we can send you a copy immediately.
   
 * @copyright  Copyright (c) 2011 Xsilva Systems, Inc. http://www.lightspeedretail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 
 */

/**
 * Deluxe template: Breadcrumb menu bar and page numbers 
 *
 * 
 *
 */

?>


<div id="breadcrumbs" class="rounded">
	<a href="index.php"><img src="<?php echo templateNamed('css'); ?>/images/breadcrumbs_home.png"	style="display: block; float: left; margin: 0 10px 0 12px;"></a>
	<img src="<?php echo templateNamed('css'); ?>/images/breadcrumbs_separrow.png" style="display: block; float: left; margin: 0 0 0 -2px;">

<ul>
		<?php foreach($this->crumbs as $crumb): ?>
			<li>
				<a <?php if(isset($crumb['link'])): ?>
						href="<?= $crumb['link']; ?>"
					<?php elseif(isset($crumb['key'])): ?>
						href="index.php?<?= $crumb['key']; ?>"
					<?php else: ?>
						href="#"<?php endif; ?>  
						title="<?= $crumb['name']; ?>" 
					<?php if(isset($crumb['pxy'])): ?>
						<?= $crumb['pxy'] ; ?>
					<?php endif; ?>  >
					
					<?= _xls_truncate($crumb['name'], 45, "...", true); ?>
				</a>
			</li>
		<?php endforeach; ?>
</ul>

<?php

if($this->dtrProducts && $this->dtrProducts->Paginator){

	$this->dtrProducts->Paginator->Render();
	
}

?>

