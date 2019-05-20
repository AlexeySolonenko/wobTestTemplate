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

<?php if($len > $width): ?>
    <?php $id = $moduleclass_sfx . $suf; ?>
        <div 
            <?php //class="carousel slide d-lg-none d-md-none w-100" ?>
            class="carousel slide carousel-fade col-12 <?php echo $displayClass; ?> " 
            id="<?php echo $id; ?>"
            data-ride="carousel"
            data-touch="true"
            >
            <div class=" row ">
                <?php $classOverride = " col-1 my-auto " ?>
                <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'carousel-control-prev'); ?>
                <div class="carousel-inner col-10 ">
                    <?php 
                        $i = 0;
                        $col = round(12 / $width, 0, PHP_ROUND_HALF_DOWN);
                        if ($col == 0) $col = 1; 
                        $col = "col-{$col}";
                        $active = "";
                        $fullLen = $len + ( ($len % $width != 0) ? ($width - $len % $width) : 0);
                        $col = "";
                    ?>
                    <div class="<?php echo $active; ?> carousel-item item active  ">
                        <div class="card-deck">
                        <?php for ($i = 0; $i <= $fullLen; $i++) : ?>
                            <?php
                                $ind = ( ($i >= $len) ?(abs($len - $i)) : $i); 
                                $item = $list[$ind]; 
                            ?>
                            <?php if($i > 1 && $i % $width == 0): ?>
                                </div></div>
                            <?php endif;?>
                            <?php if($i > 1 && $i % $width == 0 && $i < ($fullLen)): ?>
                                <div class="<?php echo $active; ?> carousel-item item  ">
                                    <div class="card-deck">
                            <?php endif;?>
                            <?php if($i < ($fullLen)): ?>
                                <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts/', 'card-read-more01'); ?>
                            <?php endif;?>
                        <?php endfor; ?>
                </div>
                <?php $classOverride = " col-1 my-auto " ?>
                <?php require JModuleHelper::getLayoutPath('mod_articles_news/parts', 'carousel-control-next'); ?>
                <?php $classOverride = " " ?> 
            </div>
                
                
            
        
    </div>
<?php else: ?>
<div class="col-12 <?php echo $displayClass; ?>">
    <div class="row card-deck">
        <?php 
            $i = 0;
            $col = round(12 / $width, 0, PHP_ROUND_HALF_DOWN);
            if ($col == 0) $col = 1; 
            $col = "col-{$col}";
            $active = "";
            $col = "";
        ?>
        <?php foreach ($list as $item) : ?>
                <?php require JModuleHelper::getLayoutPath('mod_articles_news', 'card-read-more01'); ?>
                
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
