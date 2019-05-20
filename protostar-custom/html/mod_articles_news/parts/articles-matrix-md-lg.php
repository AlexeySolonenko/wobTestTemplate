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


<?php $id = $moduleclass_sfx . $suf; ?>
    
    <div 
        <?php //class="carousel slide d-lg-none d-md-none w-100    <?php echo $displayClass; "  ?>
        class=" col-12  <?php echo $displayClass; ?>" 
        id="<?php echo $id; ?>"
        >
        <!-- <div class=" row  "> -->
            <?php 
            $i = 0;
            $active = "";
            $fullLen = $len + ( ($len % $width != 0) ? ($width - $len % $width) : 0);
            if($fullLen < $width) $fullLen = $width;
            $col = "";
            ?>
            <div class="card-deck">
            <?php for ($i = 0; $i <= $fullLen; $i++) : ?>
                <?php $item = $list[$i]; ?>
                <?php if($i > 1 && $i % $width == 0): ?>
                    </div>
                <?php endif;?>
                <?php if($i > 1 && $i % $width == 0 && $i < ($fullLen)): ?>
                    <div class="card-deck">
                <?php endif;?>
                <?php if($i < ($len)): ?>
                    <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'card-read-more01'); ?>
                <?php else: ?>
                    <div class="card border-0 bg-transparent"></div>
                <?php endif;?>
            <?php endfor; ?>
        <!-- </div> -->
    
</div>
