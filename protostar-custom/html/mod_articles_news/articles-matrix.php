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
<div class="  newsflash row <?php echo $moduleclass_sfx; ?>">


<?php 
/* SMALL SCREEN SIZES 1-col wide slideshow */
?>


    <?php $id = $moduleclass_sfx . "-small"; ?>
    <div 
        <?php //class="carousel slide d-lg-none d-md-none w-100" ?>
        class="carousel slide  w-100 d-md-none d-lg-none d-xl-none " 
        id="<?php echo $id; ?>"
        data-ride="carousel"
        data-touch="true"
        >
     
        <div class="carousel-inner w-100">
            <?php $i = 0; $col = "w-100"; ?>
            <?php foreach ($list as $item) : ?>
                <?php $active = ( ($i == 0) ? ' active ' : ''); ?>
                <div class="carousel-item item w-100 <?php echo $active; ?> ">
                    <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'card-read-more01'); ?>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
        <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'carousel-control-prev'); ?>
        <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'carousel-control-next'); ?>
    </div>
    <?php 
    /* MEDIUM SCREEN SIZES  wide slideshow */
    ?>
    <?php  $width = $mediumWidth;
        $suf = '-medium';
        $displayClass = " d-xs-none d-sm-none d-md-block d-lg-none d-xl-none ";
    ?>
    <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'articles-matrix-md-lg'); ?>
    <?php $width = $largeWidth;
        $suf = '-large';
        $displayClass = " d-xs-none d-sm-none d-md-none d-lg-block d-xl-block ";
    ?>
    <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'articles-matrix-md-lg'); ?>

</div>
