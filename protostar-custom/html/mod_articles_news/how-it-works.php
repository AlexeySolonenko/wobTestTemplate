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

/* COMPONENTS */

$leftTurn = "";
ob_start();
?>
 <div class="row no-gutters-sm">
    <div class="col-8 col-md-6"></div>
    <div class="col-1 border-danger border-wide border-right border-bottom border-time-line-rounded-br"></div>
    <div class="col-2 col-md-5"></div>
</div>
<div class="row no-gutters-sm">
    <div class="col-3 col-md-5"></div>
    <div class="col-1 border-danger border-wide border-left border-top border-time-line-rounded-tl"></div>
    <div class="d-block border-danger border-wide border-top border-time-line-shifted-up col-4 d-md-none"></div>
    <div class="col-4 col-md-6"></div>
</div>
<?php
$leftTurn = ob_get_contents();
ob_end_clean();

$rightTurn = "";
ob_start();
?>
 <div class="row no-gutters-sm ">
    <div class="col-3 col-md-5"></div>
    <div class="col-1 border-danger border-wide border-left border-bottom border-time-line-rounded-bl"></div>
    <div class="d-block border-danger border-wide border-bottom border-time-line-shifted-up col-4 d-md-none"></div>
    <div class="col-4 col-md-6"></div>
</div>
<div class="row no-gutters-sm ">
    <div class="col-8 col-md-6"></div>
    <div class="col-1 border-danger border-wide border-right border-top border-time-line-rounded-tr"></div>
    <div class="col-2 col-md-5"></div>
</div>
<?php
$rightTurn = ob_get_contents();
ob_end_clean();


/* LOOPING THROUGH ARTICLES */

/* SMALL SCREENS */
?>


<div class="  newsflash row no-gutters-sm justify-content-md-center <?php echo $moduleclass_sfx; ?>">


<?php 
/* SMALL SCREEN SIZES 1-col wide slideshow */
?>

    <?php 
    /* MEDIUM AND LARGE  */
    ?>
<div class="col-12 col-md-10 ">
<?php
$i= 0;
$len = count($list);
foreach($list as $item):
    /* content */
    if(($i > 0 && $i % 2 == 0) || $i == 0): 
        require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'how-it-works-pic-right');
    else:
        require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'how-it-works-pic-left'); 
    endif;
    /* turn  */
    if(( ($i > 0 && $i % 2 == 0) || $i==0) && $i < ($len-1)):
        echo $leftTurn;
    elseif($i < ($len-1)):
        echo $rightTurn;
    endif;
    $i++;
endforeach; ?>
</div>

</div>

