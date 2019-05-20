<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
foreach($item->jcfields as $jcfield) {
    $item->jcFields[$jcfield->name] = $jcfield;
}
try {
    if (empty($urls)) {
        $urls = json_decode($item->urls);
    }
} catch(\Exception $e){
    $urls = [];
}
//echo "<pre>".print_r($params,true)."</pre>";
?>
<?php /* <div class=" <?php echo $col;?> card "> */ ?>
<div class=" mb-4 h-100 border-top border-bottom border-danger w-100 <?php echo $col; ?>">

    
    <img 
        <?php // class="d-block  w-100 " ; ?>
        class='float-left w-50 rounded-circle '
        alt="<?php echo $item->imageAlt; ?>" 
        src="<?php echo $item->imageSrc; ?>"
        >
   
    <!-- <div class="card-body"> -->

        <h5 class=" p-2 "><?php echo $item->title; ?></h5>
        <?php if (!empty($item->imageCaption)) : ?>
            <p class=" p-2"><?php echo $item->imageCaption; ?></p>
        <?php endif; ?>
        <?php if (!empty($item->jcFields['image-description']->rawvalue)) : ?>
            <p class="p-2 "><?php echo $item->jcFields['image-description']->rawvalue; ?></p>
        <?php endif; ?>
     
    <!-- </div> -->
    <?php //echo "<pre>".print_r(($item),true)."</pre>"; ?>
    <?php if(!empty($urls->urla)): ?>
        <!-- <div class="card-footer bg-danger   "> -->
                <a 
                class="p-2"
                    href="<?php echo $urls->urla; ?>"
                    ><h4 class="text-danger font-weight-bold text-center "><?php echo $urls->urlatext; ?></h5></a>
        <!-- </div> -->
   
    <?php
        endif; 
        $urls = []; ?>
       
</div>

<?php 

?>
