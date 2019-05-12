<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

	<div class="row ">	

		
		<?php if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc)) : ?>	
			<div class="col-12  newsflash-image w3-card-4">
				<img 
					src="<?php echo $item->imageSrc; ?>" 
					alt="<?php echo $item->imageAlt; ?>" 
					class="w3-hover-sepia "
					>
				<?php if (!empty($item->imageCaption)) : ?>
					<figcaption>
						<?php echo $item->imageCaption; ?>
					</figcaption>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<?php if ($params->get('item_title')) : ?>
			<div class="col-12 w3-center ">
				<?php $item_heading = $params->get('item_heading', 'h4'); ?>
				<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
				<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
					<a href="<?php echo "/index.php/ru/ru-offers" /* echo $item->link;*/ ?>">
						<?php echo $item->title; ?>
					</a>
				<?php else : ?>
					<?php echo $item->title; ?>
				<?php endif; ?>
				</<?php echo $item_heading; ?>>
			</div>
		<?php endif; ?>

		<div class="col-12  ">
			<?php if (!$params->get('intro_only')) : ?>
				<?php echo $item->afterDisplayTitle; ?>
			<?php endif; ?>

			<?php echo $item->beforeDisplayContent; ?>

			<?php if ($params->get('show_introtext', 1)) : ?>
				<?php echo $item->introtext; ?>
			<?php endif; ?>

			<?php echo $item->afterDisplayContent; ?>

			<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
				<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
			<?php endif; ?>
		</div>	
	
</div>
