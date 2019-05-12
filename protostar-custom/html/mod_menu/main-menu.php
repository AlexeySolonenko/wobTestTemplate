<script>
	jQuery(function() {
		var header = document.querySelector('header');
		if (header) header.classList.add('d-none');
		var fixedNav = document.getElementsByClassName('fixed-navbar ')[0];
		var rect = fixedNav.getBoundingClientRect();
		rect.height;

		var fixedMenuScroll = function(menu,trigger) {
			var y = window.scrollY;
			if (y >= trigger) {
				menu.classList.add('fixed-top','container');
				menu.classList.remove('row');
			} else {
				menu.classList.remove('fixed-top','container');
				menu.classList.add('row');
			}
		};

		window.addEventListener("scroll", fixedMenuScroll.bind(null,fixedNav,rect.height));
		
	});
	console.log(1);
</script>
<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php
$id = '';

if ($tagId = $params->get('tag_id', '')) {
	$id = ' id="' . $tagId . '"';
}

/* experimental fixed header */
?>

<nav class="navbar row navbar-expand-md navbar-light  bg-light menu <?php echo $class_sfx; ?> mod-list" <?php echo $id; ?>>
	<a class="navbar-brand" href="#">Fixed navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse show" id="navbarCollapse" style="">
		<ul class="navbar-nav mr-auto">
			<?php $j = 0; ?>
			<?php foreach ($list as $i => &$item) {
				$class = 'item-' . $item->id;

				if ($item->id == $default_id) {
					$class .= ' default';
				}

				if ($item->id == $active_id || ($item->type === 'alias' && $item->params->get('aliasoptions') == $active_id)) {
					$class .= ' current';
				}

				if (in_array($item->id, $path)) {
					$class .= ' active';
				} elseif ($item->type === 'alias') {
					$aliasToId = $item->params->get('aliasoptions');

					if (count($path) > 0 && $aliasToId == $path[count($path) - 1]) {
						$class .= ' active';
					} elseif (in_array($aliasToId, $path)) {
						$class .= ' alias-parent-active';
					}
				}

				if ($item->type === 'separator') {
					$class .= ' divider';
				}

				if ($item->deeper) {
					$class .= ' deeper';
				}

				if ($item->parent) {
					$class .= ' parent';
				}

				?> <li class=" nav-item <?php echo $class, (($j == 0) ? 'active' : ''); ?> ">
					<?php
					switch ($item->type): case 'separator':
						case 'component':
						case 'heading':
						case 'url':
							require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
							break;

						default:
							require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
							break;
					endswitch;

					// The next item is deeper.
					if ($item->deeper) {
						echo '<ul class="nav-child  unstyled small">';
					}
					// The next item is shallower.
					elseif ($item->shallower) {
						echo '</li>';
						echo str_repeat('</ul></li>', $item->level_diff);
					}
					// The next item is on the same level.
					else {
						echo '</li>';
					}
				}
				?>
		</ul>
	</div>
</nav>