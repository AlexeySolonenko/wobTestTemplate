<script>
	jQuery(function() {
		var header = document.querySelector('header');
		if (header) header.classList.add('d-none');
		var fixedNav = document.getElementsByClassName('fixed-navbar ')[0];
		
		var fixedMenuScroll = function(menu,trigger) {
			var fixedNav = document.getElementsByClassName('fixed-navbar ')[0];
			var staticNav = document.querySelector('.top-static-menu');
			var rect = staticNav.getBoundingClientRect();
			trigger = rect.height;
			var y = window.scrollY;
			var i = 0;
			var lightBrand = menu.querySelector('.light-brand');
			var inverseBrand = menu.querySelector('.inverse-brand');
			var topClasses = ['d-md-flex','bg-transparent'];
			var bodyClasses = ['fixed-top','bg-dark','pt-3'];
			var anchors = menu.querySelectorAll('a');
			var navBarIcon = menu.querySelector('.navbar-menu-icon');
			var socialAndContactIcons = menu.querySelector('.navbar-toggler').querySelectorAll('.nav-item');
			var mobileIconsUl = menu.querySelector('.navbar-toggler').querySelector('ul');

			if (y > trigger+5) {
				console.log('In body. y' + y + ', trigger: ' + trigger+5);
				menu.classList.add(...bodyClasses);
				menu.classList.remove(...topClasses);
				lightBrand.classList.add('d-none');
				inverseBrand.classList.remove('d-none');
				navBarIcon.classList.remove('text-danger');
				navBarIcon.classList.add('text-white');
				for(i = 0; i < anchors.length; i++){
					anchors[i].classList.add('text-white');
					anchors[i].classList.remove('text-danger');
				}
				for(i = 0; i < socialAndContactIcons.length; i++){
					socialAndContactIcons[i].classList.remove('d-none');
				}
				mobileIconsUl.classList.add('justify-content-between');
				mobileIconsUl.classList.remove('justify-content-end');

			} else {
				console.log('On top. y' + y + ', trigger: ' + trigger+5);
				menu.classList.remove(...bodyClasses);
				menu.classList.add(...topClasses);
				for(i = 0; i < anchors.length; i++){
					anchors[i].classList.remove('text-white');
					anchors[i].classList.add('text-danger');
				}
				lightBrand.classList.remove('d-none');
				inverseBrand.classList.add('d-none');
				navBarIcon.classList.add('text-danger');
				navBarIcon.classList.remove('text-white');
				for(i = 0; i < socialAndContactIcons.length; i++){
					socialAndContactIcons[i].classList.add('d-none');
				}
				mobileIconsUl.classList.remove('justify-content-between');
				mobileIconsUl.classList.add('justify-content-end');
			}
		};

		window.addEventListener("scroll", fixedMenuScroll.bind(null,fixedNav));
		fixedMenuScroll(fixedNav);
		var mainMenuFixed = document.querySelector("#mainTopFixedMenu");
		var mainMenuStatic =  document.querySelector("#mainTopStaticMenu");
		if(mainMenuFixed){
			mainMenuFixed.classList.remove('show');
		}
		if(mainMenuStatic){
			mainMenuStatic.classList.remove('show');
		}
		
		
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

<nav class=" d-md-flex navbar navbar-expand-md  bg-transparent  menu <?php echo $class_sfx; ?> mod-list" <?php echo $id; ?>>
<div class="container-fluid">

	<div class="row no-gutters-sm align-items-center w-100">
		<a class=" col-auto navbar-brand light-brand" href="/index.php/ru">
			<img
				src="/images/301_logo/wob_logo_003.png"
				class="img-fluid"
				style="width:7vw;height:5vw;"
				>
		</a>
		<a class=" col-auto navbar-brand py-0 d-none inverse-brand" href="/index.php/ru">
			<img
				src="/images/301_logo/wob_logo_003_inverse_black.png"
				class="img-fluid d-none d-md-flex"
				style="width:4vw;height:3vw;"
				>
				<img
				src="/images/301_logo/wob_logo_003_inverse_black.png"
				class="img-fluid d-flex d-md-none"
				style="width:7vw;height:5vw;"
				>
		</a>
		<button class="navbar-toggler col pr-2" type="button" data-toggle="collapse" data-target="#mainTopFixedMenu" aria-controls="mainTopFixedMenu" aria-expanded="true" aria-label="Toggle navigation">
		<ul class="navbar-nav flex-fill d-flex flex-row no-gutters-sm justify-content-between">
			<li class="nav-item active">
				<a class="nav-link text-white font-weight-bold" href="/index.php/ru/ru-contacts"><span class=""><i class="im im-mail"></i></span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white font-weight-bold" href="https://vk.com/life_bez_granic">
				<span><i class="im im-vk"></i></span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white font-weight-bold " target="_blank" href="https://www.instagram.com/vl_bez_granic" tabindex="-1" aria-disabled="true">
				<span><i class="im im-instagram"></i></span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white font-weight-bold " target="_blank" href="https://api.whatsapp.com/send?phone=+35699503677" tabindex="-1" aria-disabled="true">
				<span><i class="im im-whatsapp"></i></span>
				</a>
			</li>
			<li class="align-self-center pr-3">
				<span class="ml-5  navbar-menu-icon"><i class="im im-menu"></i></span>
			</li>
			</ul>
		</button>
	



	<div class="navbar-collapse col-auto collapse show" id="mainTopFixedMenu" style="">

		<ul class="navbar-nav mr-auto row no-gutters-sm w-100 justify-content-around">
			

			<?php $j = 0; ?>
			<?php foreach ($list as $i => &$item) :
				$class = 'item-' . $item->id;
				$item->anchor_css .= " text-danger ";

				if ($item->id == $default_id) {
					$class .= ' default';
				}

				if ($item->id == $active_id || ($item->type === 'alias' && $item->params->get('aliasoptions') == $active_id)) {
					$class .= ' active text-white ';
				}

				if (in_array($item->id, $path)) {
					$class .= /* not disabled ' active ' */ '';
				} elseif ($item->type === 'alias') {
					$aliasToId = $item->params->get('aliasoptions');

					if (count($path) > 0 && $aliasToId == $path[count($path) - 1]) {
						$class .= /* not disabled  ' active' */ '';
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

				?> <li class="btn btn-link font-weight-bold  text-uppercase <?php echo $class; ?> nav-item col-auto ">
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
						echo '<ul class="nav-child  row no-gutters-sm w-100 justify-content-around ">';
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
					$i;
				endforeach;
				?>
				
		</ul>
	</div>
	</div>
	</div>
</nav>