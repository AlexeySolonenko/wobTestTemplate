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
$len = count($list);
?>

<?php $id = $moduleclass_sfx . $suf; ?>

<div 
    <?php //class="carousel slide d-lg-none d-md-none w-100" ?>
    class="carousel slide  <?php echo $displayClass; ?> " 
    id="<?php echo $id; ?>"
    data-ride="carousel"
    data-touch="true"
    ><?php /*
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $len; $i++) : ?>
            <?php $active = ( ($i == 0) ? 'active' : ''); ?>
            <li 
                data-target="#<?php echo $id; ?>" 
                class=" <?php echo $active; ?> " 
                data-slide-to="<?php echo $i; ?>">
            </li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner w-100 fixed-height-85  ">
        <?php $i = 0; $col = "w-100 carousel-item item "; ?>
        <?php foreach ($list as $item) : ?>
            <?php
            if($i == 0) $col .=  ' active '; 
            else $col = str_replace('active','',$col); ?>
            <!-- <div class="carousel-item item w-100 <?php //echo $active; ?> "> -->
                <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts/', 'card-read-more01'); ?>
            <!-- </div> -->
            <?php $i++; ?>
        <?php endforeach; ?>
    </div> */ ?>
    <div class="carousel-inner row no-gutters-sm fixed-height-65  ">
        <?php $i = 0; $col = "col-12 carousel-item item "; ?>
        <?php foreach ($list as $item) : ?>
            <?php
            if($i == 0) $col .=  ' active '; 
            else $col = str_replace('active','',$col); ?>
            <!-- <div class="carousel-item item w-100 <?php //echo $active; ?> "> -->
                <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts/', 'card-read-more02'); ?>
            <!-- </div> -->
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    <?php //require JModuleHelper::getLayoutPath('mod_articles_news', 'carousel-control-prev'); ?>
    <?php //require JModuleHelper::getLayoutPath('mod_articles_news', 'carousel-control-next'); align-items-center justify-content-center ?>
    <div class="row no-gutters-sm   bg-danger font-weight-bold ">
        <div class="col-12">
            <a 
                
                href="<?php echo $urla; ?>"
                >
                <h5 class=" my-auto mx-auto text-center text-white "><?php echo $urlatext; ?></h5>
            </a>
        </div>
    </div>
</div>