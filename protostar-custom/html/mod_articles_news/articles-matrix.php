<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$i = 0;
$mediumWidth = 3;
$largeWidth = 4;
$len = count($list);
?>
<div class="  newsflash row no-gutters-sm <?php echo $moduleclass_sfx; ?>">



<?php 
/* SMALL SCREEN SIZES 1-col wide slideshow */
$suf="-small";
?>

    <?php $displayClass = "col-12 d-md-none d-lg-none d-xl-none "; ?>
    <?php $id = $moduleclass_sfx . $suf; ?>
    <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'carousel-sm'); ?>
    
    <?php 
    /* MEDIUM SCREEN SIZES  wide slideshow */
    ?>
    <?php  $width = $mediumWidth;
        $suf = '-medium';
        $displayClass = "d-none d-xs-none d-sm-none d-md-block d-xl-none ";
    ?>
    <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'articles-matrix-md-lg'); ?>
    <?php $width = $largeWidth;
        $suf = '-large';
        $displayClass = "d-none d-xs-none d-sm-none d-md-none d-lg-none d-xl-block ";
    ?>
    <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'articles-matrix-md-lg'); ?>

</div>
